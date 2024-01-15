<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Subscriber;

class AdminSubscribersController extends Controller
{
    public function index()
    {
        $contactss = subscriber::latest()->get();

        return view('admin.subscribers.index', compact('contactss'));
    }
}