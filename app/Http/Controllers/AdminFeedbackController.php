<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Feedback;

class AdminFeedbackController extends Controller
{
    public function index()
    {
        $feed = Feedback::latest()->get();

        return view('admin.feedback.index', compact('feed'));
    }
}
