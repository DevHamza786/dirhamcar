<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Contact;

class ContactController extends Controller
{
    public function showForm()
    {
        return view('frontend.contact');
    }

    public function submitForm(Request $request)
    {
        // Validate the form data
        $request->validate([
            'name' => 'required|string',
            'email' => 'required|email',
            'phone' => 'required|string',
            'message' => 'required|string',
        ]);

        // Create a new contact using the Contact model
        Contact::create([
            'name' => $request->input('name'),
            'email' => $request->input('email'),
            'phone' => $request->input('phone'),
            'message' => $request->input('message'),
        ]);

        // Redirect back with a success message
        return redirect()->back()->with('success', 'Contact form submitted successfully!');
    }
}
