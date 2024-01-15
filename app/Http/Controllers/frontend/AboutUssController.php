<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\AboutUs;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;

class AboutUssController extends Controller
{
   public function index(){
        $aboutUsContent = DB::table('about_us')->get();
        return view('frontend.aboutus', ['aboutUsContent' => $aboutUsContent]);
    }
}
