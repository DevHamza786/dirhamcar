<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Policy;

class PolicyController extends Controller
{
    public function showPolicies()
    {
        // Fetch policies
        $policies = Policy::all();

        return view('frontend.checkout', compact('policies'));
    }
}