<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Feedback;

class FeedbackController extends Controller
{
    
      public function feedBack()
    {
        return view('frontend.feedback');
    }
    
    public function store(Request $request)
    {
        // Validate the form data
        $validatedData = $request->validate([
            'share' => 'required',
            'email' => 'required|email',
            'contact' => 'required',
            'message' => 'required',
        ]);

        // Create a new Feedback model instance
        $feedback = new Feedback;

        // Assign values from the form to the model
        $feedback->share = $validatedData['share'];
        $feedback->email = $validatedData['email'];
        $feedback->contact = $validatedData['contact'];
        $feedback->message = $validatedData['message'];

        // Save the feedback to the database
        $feedback->save();
        return redirect()->back()->with('success', 'Thankyou For Your Feedback');
        // Redirect with a success message or to a thank-you page
        // return redirect()->route('thankyou')->with('success', 'Feedback submitted successfully!');
    }
}
