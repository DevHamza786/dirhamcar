<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Carbon\Carbon;
use App\Models\Car;
use App\Models\Reservation;
use App\Models\User;
use App\Models\Policy;
use Illuminate\Support\Facades\Session as FacadesSession;
use Stripe\Stripe;
use Stripe\Checkout\Session as StripeCheckoutSession;
use App\Mail\CustomerEmail;
use App\Models\CarAddon;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Str;

class CheckoutController extends Controller
{
    public function index(Request $request)
    {
        $policies = Policy::all();
        $carId = $request->carId;
        $pickUp = $request->pickUp;
        $ReturenPickUp = $request->ReturenPickUp;
        $pickupDate = $request->pickupDate;
        $returnDate = $request->returnDate;
        $pickupTime = $request->pickupTime;
        $returnTime = $request->returnTime;
        $startDate = Carbon::parse($pickupDate);
        $endDate = Carbon::parse($returnDate);
        $days = $endDate->diffInDays($startDate);
        $car = Car::where("id", $carId)->first();
        $paymentId = $request->paymentId;
        $addons = DB::table("car_addons")->where("status", 1)->get();

        if (FacadesSession::has('currency')) {
            $currency = FacadesSession::get('currency');
        } else {
            $currency = "aed";
        }
        
     $carFeatureIds = $car->pluck('car_feature_id')->toArray();
   $car_features = DB::table("car_features")->whereIn("id",$carFeatureIds)->get();

        return view('frontend.checkout', compact('currency', 'car_features','addons', 'days', 'paymentId', 'car', 'carId', 'pickUp', 'ReturenPickUp', 'pickupDate', 'returnDate', 'pickupTime', 'returnTime', 'policies'));
    }



    public function userSessionId(Request $request)
    {

        $userId = User::where("session_id", $request->session_id)->first();
        if ($userId == null) {
            $jsonData = [
                'status' => 400,
            ];
            return response()->json($jsonData);
        } else {


            $jsonData = [
                'id' => $userId->id,
                'first_name' => $userId->first_name,
                'last_name' => $userId->last_name,
                'email' => $userId->email,
                'phone_number' => $userId->phone_number,
                "address" => $userId->address,
                "country" => $userId->country,
                "already" => 1,    // already + 18
                'status' => 200,
            ];
        }
        // Return JSON data
        return response()->json($jsonData);
    }

    public function store(Request $request)
    {
        $paymentId = $request->paymentId;
        $addonDetails = $request->addonDetails;
        $filteredAddonDetails = array_filter($addonDetails, function ($value) {
            return $value !== null;
        });
        $jsonAddon = implode(',', $filteredAddonDetails);

        if ($request->user_id == "") {
            $user = new User();
            $user->session_id = $request->sessionId;
            $user->first_name = $request->firstName;
            $user->last_name = $request->lastName;
            $user->phone_number = $request->phone;
            $user->email  = $request->email;
            $user->country = $request->country;
            $user->is_driver_confirmed = $request->isDriverConfirmed;
            $user->address = $request->address;
            $user->password = "";
            $user->role_id = 2;
            $user->save();

            $lastInsertedId = $user->id;
        } else {

            $lastInsertedId = $request->user_id;
        }



        if ($paymentId == 1) {
            $amount = $request->grandAmmount;
            $remaining_amount = 0;
        } elseif ($paymentId == 2) {
            $amount = $request->paynow;
            $remaining_amount = $request->remainingAmmount;
        } else {
             $amount = 0;
            $remaining_amount = $request->grandAmmount;
        }
        $currency = FacadesSession::get("currency");
        if ($currency == null)
            $currency = 'aed';


        $reservations = DB::table('reservations')->orderBy('id', 'Desc')->first();
        if ($reservations !== null) {
        // Ensure $reservations->invoice_no is treated as a number
        $invoice_no = is_numeric($reservations->invoice_no) ? (int)$reservations->invoice_no : 0;
        
            // Add 1 to the invoice number
            $reservation_invoice_no = $invoice_no + 1;
        } else {
            $reservation_invoice_no = 1; // Assuming you want an integer here
        }

        $fileName_license = "";
        $fileName_passport = "";


        // dd($fileName_license);
        $reservation = new Reservation();
        $reservation->pick_up = $request->pickUp;
        $reservation->return_pickup = $request->ReturenPickUp;
        $reservation->pickup_date = $request->pickupDate;
        $reservation->return_date = $request->returnDate;
        $reservation->pickup_time = $request->pickupTime;
        $reservation->return_time = $request->returnTime;
        $reservation->sub_total_amount = $request->subTotalAmount;
        $reservation->addon_details = $jsonAddon;
        $reservation->child_seat = $request->childSeat;
        $reservation->tax_amount = $request->taxAmount;
        $reservation->grand_amount = $request->grandAmmount;
        $reservation->amount = $amount;
        $reservation->remaining_amount = $remaining_amount;
        $reservation->payment_status = $request->paymentId;
        $reservation->user_id = $lastInsertedId;
        $reservation->car_id = $request->carId;
        $reservation->license_image = $fileName_license;
        $reservation->passport_image = $fileName_passport;
        $reservation->currency = $currency;
        $reservation->status = 0;
        $reservation->invoice_no = $reservation_invoice_no;
        $reservation->save();
        $reservationId = $reservation->id;
        FacadesSession::put('reservation', $reservation);
        FacadesSession::put('reservationId', $reservationId);
        return response()->json(["paymentId" => $request->paymentId, 'reservationId' => $reservationId]);
        // if ($paymentId == 3) {
        //     return true;
        // } else {
        //     return redirect(route("checkout.user-payment"));
        // }
    }

    public function storeChecked(Request $request)
    {

        $id = $request->reservationId;

        $licenseInput = $request->file('licensefile');
        $passportfile = $request->file('passportfile');
        if ($licenseInput !== null) {
            $targetDir = "assets/admin/diver-details/"; // Adjusted path
            $licensefileName = $_FILES["licensefile"]["name"];
            $licensefile = $targetDir . basename($licensefileName);
            move_uploaded_file($_FILES["licensefile"]["tmp_name"], $licensefile);
        }
        if ($passportfile !== null) {
            $targetDir = "assets/admin/diver-details/"; // Adjusted path
            $passportfileName = $_FILES["passportfile"]["name"];
            $passportfile = $targetDir . basename($passportfileName);
            move_uploaded_file($_FILES["passportfile"]["tmp_name"], $passportfile);
        }


        $data = [
            'license_image' => $licensefileName,
            'passport_image' => $passportfileName,
        ];

       DB::table('reservations')->where('id', $id)->update($data);
        
        return response()->json(['status' => 200, 'paymentId' => $request->paymentId]);

      
    }
    
    public function userPayment()
    {



        $data = FacadesSession::get("reservation");
       
        $car_id = $data['car_id'];

         $cars = DB::table("cars")->where("id", $car_id)->first();
         $images = explode(',', $cars->car_image);
         $firstImage = $images[0];
        
        
         $firstImage = asset('assets/admin/cars/' . $firstImage);
        $currency = FacadesSession::get("currency");
        // $data['car_imgs'] = $carImage ;
        
        $data['carimg'] = $firstImage;
        // dd($data['carimg']);
        

        if ($currency == null)
            $currency = 'aed';
            

 
             $originalAmount = $data["amount"];
             $originalAmount = str_replace(',', '', $originalAmount);
            
            // Multiply the original amount by 100 using bcmul for arbitrary precision
            $newAmount = bcmul($originalAmount, 100);
 
 
 
        Stripe::setApiKey('sk_test_51OJbyaKdfzNVfHJyFJ4CjeK1mdUFBjXn2KcrPirBUXG46S8f08qce0SoTsQz5tmq2gYql6TRdCG21IxMMc390IEf00SOLMz6EW');


        try {
            $session = StripeCheckoutSession::create([
                'payment_method_types' => ['card'],
                'line_items' => [
                    [
                        'price_data' => [
                            'currency' => $currency,
                            'product_data' => [
                                'name' => $cars->model,
                                'images' => [$data['carimg']],
                                'metadata' => [
                                    'Pickup Location' => $data['pick_up'],
                                    'Return Location' => $data['return_pickup'],
                                    'Pickup Date Time' => $data['pickup_time'],
                                    'Return Date Time' => $data['return_time'],
                                ],
                            ],

                            'unit_amount' => $newAmount ,
                        ],
                        'quantity' => 1,
                    ],
                ],
                'mode' => 'payment',
                'success_url' => route("checkout.send-invoice"),
                // 'cancel_url' => "https://dirhamcars.com/checkout?CarId=12",

            ]);
            return redirect($session->url);
        } catch (\Stripe\Exception\CardException $e) {
            echo "some techinal error";
        }
        // return view("confirmation");
    }

    public function sendInvoice()
    {

        $data = FacadesSession::get("reservation");
       if($data==null)
        return redirect(route("home"));


        $reservationId = FacadesSession::get('reservationId');

        $reservationStatus = Reservation::where('id', $reservationId)->update(['status' => 1]);
        $userId = $data['user_id'];
        $userDetails = User::where('id', $userId)->first();
        $data['email'] = $userDetails->email;
        $data['first_name'] = $userDetails->first_name;
        $data['last_name'] = $userDetails->last_name;
        $data['phone_number'] = $userDetails->phone_number;
        $data['country'] = $userDetails->country;

        $startDate = Carbon::parse($data['pickup_date']);
        $endDate = Carbon::parse($data['return_date']);
        $daysDifference = $endDate->diffInDays($startDate);
        $data['days'] = $daysDifference;
        $addon_ids = explode(',', $data->addon_details);
        $carAddon = CarAddon::whereIn('id', $addon_ids)->get();
        $data['carAddon'] = $carAddon->toArray();


        $cars = Car::where('id', $data['car_id'])->first();
        if ($data['currency'] == 'aed') {

            $data['car_price'] = $cars->price_aed;
        } else {
            $data['car_price'] = $cars->price_usd;
        }

        if ($data['payment_status'] == 3) {
            
            if($cars->tax==1 &&  $cars->tax==""){
             
                $tax=$cars->tax;
                $getValue = $data['car_price'] / $cars->tax;
                $data['car_price'] = $data['car_price'] + $getValue;
            }else{
                $data['car_price'];
            }

        }
        try {


            if ($reservationStatus) {
                $data2  = [
                    "pick_up" => $data["pick_up"],
                    "return_pickup" => $data["return_pickup"],
                    "pickup_date" => $data["pickup_date"],
                    "return_date" => $data["return_date"],
                    "pickup_time" => $data["pickup_time"],
                    "return_time" => $data["return_time"],
                    "sub_total_amount" => $data["sub_total_amount"],
                    "addon_details" => $data["addon_details"],
                    "child_seat" => $data["child_seat"],
                    "tax_amount" => $data["tax_amount"],
                    "grand_amount" => $data["grand_amount"],
                    "amount" => $data["amount"],
                    "remaining_amount" => $data["remaining_amount"],
                    "payment_status" => $data["payment_status"],
                    "user_id" => $data["user_id"],
                    "car_id" => $data["car_id"],
                    "license_image" => $data["license_image"],
                    "passport_image" => $data["passport_image"],
                    "currency" => $data["currency"],
                    "status" => 0,
                    "invoice_no" => $data["invoice_no"],
                    "id" => $data["id"],
                    "carimg" => $data["carimg"],
                    "email" => $data["email"],
                    "first_name" => $data["first_name"],
                    "last_name" => $data["last_name"],
                    "phone_number" => $data["phone_number"],
                    "country" => $data["country"],
                    "days" => $data["days"],
                    "carAddon" => $data["carAddon"],
                    "car_price" => $data["car_price"],
                    "email" => $data['email'] ,
                    "first_name" => $data['first_name'],
                    "last_name" =>  $data['last_name'],
                    "phone_number" => $data['phone_number'],
                    "country" =>   $data['country'],
                    "car_price" =>   $data['car_price'],
                    'car_name'=>$cars->model,
                ];
                $data2;

                $mailSend = Mail::to("$userDetails->email")->send(new CustomerEmail($data2));

                return redirect(route('checkout.complete-payment'));
            }
        } catch (\Throwable $th) {
            echo "Error Message: " . $th->getMessage();
        }
    }

    public function completePayment()
    {

        $data = FacadesSession::get("reservation");

        $userId = $data['user_id'];
        $userDetails = User::where('id', $userId)->first();
        $data['email'] = $userDetails->email;
        $data['first_name'] = $userDetails->first_name;
        $data['last_name'] = $userDetails->last_name;
        $data['phone_number'] = $userDetails->phone_number;
        $data['country'] = $userDetails->country;

        $startDate = Carbon::parse($data['pickup_date']);
        $endDate = Carbon::parse($data['return_date']);
        $daysDifference = $endDate->diffInDays($startDate);
        $data['days'] = $daysDifference;
        $addon_ids = explode(',', $data->addon_details);
        $carAddon = CarAddon::whereIn('id', $addon_ids)->get();
        $data['carAddon'] = $carAddon;

        $cars = Car::where('id', $data['car_id'])->first();
        if ($data['currency'] == 'aed') {

            $data['car_price'] = $cars->price_aed;
        } else {
            $data['car_price'] = $cars->price_usd;
        }
$data['car_name']=$cars->model;
        if ($data['payment_status'] == 3 && $cars->tax==1 && $cars->tax=="") {
            $getValue = $data['car_price'] / $cars->tax;
            $data['car_price'] = $data['car_price'] + $getValue;
        }else{
             $data['car_price'] = $data['car_price'];
        }

        $data['car_model_name'] = $cars->model;
        $data['car_model_year'] = $cars->year;
        $data['carimg']=$cars['car_image'];
    //  return view('frontend.customer_invoice', compact('data'));
        return view('frontend.complete_payment', compact('data'));
    }
}
