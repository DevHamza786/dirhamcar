<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PrivacyPolicysController extends Controller
{
    public function index()
    {
        $privacyPolicy = DB::table('privacy_policy')->first();

        // Check if $privacyPolicy is not null
        if ($privacyPolicy !== null) {
            return view('frontend.privacypolicy', compact('privacyPolicy'));
        } else {
            return view('frontend.privacypolicy')->with('noPolicy', true);
        }
    }
}
