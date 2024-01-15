<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use App\Models\Car;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Str;
use Stripe\Stripe;
use Stripe\Checkout\Session as StripeCheckoutSession;


class HomeController extends Controller
{
    public function index()
    {


        $sessionId  = (string) Str::uuid();
        $cars = DB::table('cars')->where("is_feature",1)->get();
        $carTypes = DB::table('car_types')->get();
        $blogs = DB::table('blogs')->get();
        return view('frontend.homepage', compact("cars", "carTypes", "blogs", "sessionId"));
    }
    public function updateCurrency(Request $resquest)
    {
        
    
        $currency = $resquest->currency;
        Session::put('currency', $currency);

    }

    public function carSearch(Request $request)
    {

        $results = Car::where('model', 'like', '%' . $request->input('search') . '%')->get();

        $html = "";
        $path = route('car-details');

        if (!count($results) == 0) {
            foreach ($results as $list) {
                $html .= '<li><a href="' . $path . '?carId=' . $list->id . '">' . $list->model . '</a></li>';
            }
        } else {
            $html .= '<li><a href="#">No record</a></li>';
        }

        echo $html;
    }
}
