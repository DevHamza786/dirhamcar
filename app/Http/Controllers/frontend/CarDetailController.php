<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use App\Models\Car;
use Illuminate\Http\Request;
use Carbon\Carbon;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;

class CarDetailController extends Controller
{

    public function index(Request $request)
    {
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
        if ($days == 0)
            $days = 1;

        if (Session::has('currency')) {
            $currency = Session::get('currency');
        } else {
            $currency = "aed";
        }

        $carFeatureIdArray = explode(',',$car->car_feature_id);
        $car_images = explode(',',$car->car_image);
        
        $car_features = DB::table('car_features')->whereIn('id', $carFeatureIdArray)->get();

        $car_types = DB::table('car_types')->where('id', $car->car_type_id)->first();
        
        
        // dd($car);

        // dd ($car_images);
        return view('frontend.cardetails', compact('car_types','car_images','car_features','currency', 'car', 'days', 'carId', 'pickUp', 'ReturenPickUp',  'pickupDate', 'returnDate', 'pickupTime', 'returnTime'));
    }
    public function fancybox(Request $request){
        $carId = $request->carId;
        $car = Car::where("id", $carId)->first();
        $car_images = $car->car_image;

        // Explode $car_images by commas
        $imageArray = explode(',', $car_images);
        
        return response()->json(['data' => $imageArray]);
    }
}
