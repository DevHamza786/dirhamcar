<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use App\Models\Car;
use App\Models\CarType;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;
use PhpParser\Node\Stmt\Echo_;
use Illuminate\Support\Facades\Session;

class FleetController extends Controller
{
    public function index(Request $request)
    {
        $carTypes = DB::table('car_types')->where('status', 1)->get();
        $cars = Car::with('carType')->where('status', 1)->orderByRaw('CAST(price_aed AS UNSIGNED) ASC')->get();
        // return($cars);
        // dd($cars->toArray());

        $pickupDate = $request->pickupDate;
        $returnDate = $request->returnDate;
        if (isset($request->pickup)) {
            $pickup = $request->pickup;
            $returnPickUp =  $request->returnPickUp;
            $pickupDate =  $request->pickupDate;
            $returnDate =  $request->returnDate;
            $pickupTime =  $request->pickupTime;
            $returnTime =  $request->returnTime;

            $startDate = Carbon::parse($pickupDate);
            $endDate = Carbon::parse($returnDate);
            $days = $endDate->diffInDays($startDate);
            $pickUp = $request->pickUp;
            $returnPickUp = $request->returnPickUp;
            $pickupDate = $request->pickupDate;
            $returnDate = $request->returnDate;
            $pickupTime = $request->pickupTime;
            $returnTime = $request->returnTime;
        } else {
            $days = 1;
            $returnPickUp = "";
            $pickup = "";
            $returnDate =  "";
            $pickupDate = "";
            $returnDate = "";
            $pickupTime = "";
            $returnTime = "";
        }



        if (Session::has('currency')) {
            $currency = Session::get('currency');
        } else {
            $currency = "aed";
        }



        return view('frontend.fleets', compact('carTypes', 'cars', 'days', 'pickup', 'returnPickUp', 'pickupDate', 'returnDate', 'pickupTime', 'returnTime', 'currency'));
    }
    public function filterData(Request $request)
    {


        $id = $request->id;


        $pickupDate = $request->pickupDate;
        $returnDate = $request->returnDate;

        $startDate = Carbon::parse($pickupDate);
        $endDate = Carbon::parse($returnDate);
        $cars = Car::with('carType')->orderByRaw('CAST(price_aed AS UNSIGNED) ASC')->get();

        $daysDifference = $endDate->diffInDays($startDate);
        if ($id == 0 && $request->carType == "") {

            return response()->json(['data' => 'all']);
        } else {
            if ($id == 0) {

                $cars = Car::with('carType')->where('status', 1)->orderByRaw('CAST(price_aed AS UNSIGNED) ASC')->get();

            } else {
                $cars = Car::with('carType')->where('car_type_id', $id)->where('status', 1)->orderByRaw('CAST(price_aed AS UNSIGNED) ASC')->get();
            }

            $htmlContent = '';

            if (count($cars) == 0) {
                $htmlContent .= '

                <div class="col-lg-12 col-md-4 col-sm-6">
                    <div class="featured-car-slide">
                        <p class="align-items-md-center d-flex h-100 justify-content-around text-center">
                        No Record</p>
                    </div>
                </div>';
            } else {
          $currency=true;
 if(Session::has("currency")){
     
     if(Session::get("currency")=="aed"){
         dd("test");
         $currency=true;
    }else{
    
        $currency=false;
    }
    
   }else{
       $currency=true;
}



                foreach ($cars as $key => $list) {
                    $images = explode(',', $list['car_image']);
                    $firstImage = $images[0];

                    $htmlContent .= '

                <div class="col-lg-3 col-md-4 col-sm-6">
                    <div class="featured-car-slide">
                        <div class="featured-car-img">
                            <img onclick="openfancybox(' . $list->id . ')" src="' . asset("assets/admin/cars/") . '/' . $firstImage . '" alt="">
                        </div>
                        <div class="featured-car-text">
                            <p class="feated-car-card-title">' . $list->model . '</p>
                            <div class="car-detial">
                                <p><img src="images/car-details/user.png" alt="">' . $list->passager . '</p>
                                <p><img src="images/car-details/car-gear.png" alt="">' . $list->gear_shift . '</p>
                                <p><img src="images/car-details/car-door.png" alt="">' . $list->door . '</p>
                                <p><img src="images/car-details/bag.png" alt="">' . $list->baggage . '</p>
                            </div>';
                            // <p class="car-price price-aed">AED ' . ($list->price_aed * $daysDifference) . '/ ' . $daysDifference . ' Day</p>
                            //   <p class="car-price price-usd">USD ' . ($list->price_usd * $daysDifference) . '/ ' . $daysDifference . ' Day</p>
                            
                                if($currency){
                                    $htmlContent .= '<p class="car-price">AED ' . ($list->price_aed * $daysDifference) . '/ ' . $daysDifference . ' Day</p>';
                                }else{
                                    $htmlContent .= '<p class="car-price">USD ' . ($list->price_usd * $daysDifference) . '/ ' . $daysDifference . ' Day</p>';
                                }
                                
                                
                           



                            $htmlContent .= '<div class="book-car-card">
                                <div class="call-icon-card"><i class="fa-solid fa-phone"></i></div>
                                <a href="javascript:void(0);" class="book-btn-card" onclick="getCar(' . $list->id . ')"> Book Now</a>
                                <div class="whatsapp-icon-card"><img src="' . asset("images/whastsapp-icon.png") . '" alt=""></div>
                            </div>
                        </div>
                    </div>
                </div>';
                }
            }

            // echo $htmlContent;
            return response()->json(['data' => $htmlContent, 'id' => $id]);
        }
    }

    public function getFilterDate(Request $request)
    {
        $pickupDate = $request->pickupDate;
        $returnDate = $request->returnDate;

        $startDate = Carbon::parse($pickupDate);
        $endDate = Carbon::parse($returnDate);
        $cars = Car::with('carType')->orderByRaw('CAST(price_aed AS UNSIGNED) ASC')->get();
        $counter = count($cars);
        // Calculate the difference in days
        $daysDifference = $endDate->diffInDays($startDate);
        return response()->json(['counter' => $counter, 'days' => $daysDifference]);
    }
}
