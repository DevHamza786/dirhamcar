<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;  // Import the Storage facade
use App\Models\PrivacyPolicy;

class PrivacyPolicyController extends Controller
{
    public function index()
    {
        $privacyPolicy = PrivacyPolicy::all(); // Assuming you have only one record for Privacy Policy
        return view('admin.privacy_policy.index', compact('privacyPolicy'));
    }

    public function edit()
    {
        $privacyPolicy = PrivacyPolicy::first(); // Assuming you have only one record for Privacy Policy
        return view('admin.privacy_policy.edit', compact('privacyPolicy'));
    }

   public function update(Request $request)
{
    $request->validate([
        'content' => 'required|string',
        // Add any other fields you have in your PrivacyPolicy model
    ]);

    $privacyPolicy = PrivacyPolicy::first();

    // Check if a PrivacyPolicy record exists
    if ($privacyPolicy) {
        $privacyPolicy->content = htmlspecialchars($request->input('content'));
        // Update other fields as needed
        $privacyPolicy->update($request->all());
    } else {
        // Create a new PrivacyPolicy record if it doesn't exist
        PrivacyPolicy::create($request->all());
    }

    return redirect()->route('admin.privacy-policy.index')->with('success', 'Privacy Policy updated successfully');
}

}
