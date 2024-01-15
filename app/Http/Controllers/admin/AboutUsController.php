<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;  // Import the Storage facade
use App\Models\AboutUs;

class AboutUsController extends Controller
{
    public function index()
    {
        $aboutUsContent = AboutUs::all();
        return view('admin.about_us.index', compact('aboutUsContent'));
    }

    public function edit()
    {
        $aboutUsContent = AboutUs::first(); // Assuming you have only one record for About Us
        return view('admin.about_us.edit', compact('aboutUsContent'));
    }

    public function update(Request $request)
    {
        $request->validate([
            'content' => 'required|string',
            'content_one' => 'required|string',
            'content_two' => 'required|string',
            'content_three' => 'required|string',
            'content_four' => 'required|string',
            'content_five' => 'required|string',
            'meta_title' => 'required|string',
            'meta_description' => 'required|string',
            'image_path' => 'nullable|url',
        ]);

        $aboutUs = AboutUs::first();
        $aboutUs->content = htmlspecialchars($request->input('content'));
        
        // Example of using Storage to store an image
       if ($request->hasFile('image_file')) {
            $path = $request->file('image_file')->store('admin/cars/about_us/');
            $aboutUs->image_path = $path;
        }

        $aboutUs->update($request->all());

        return redirect()->route('admin.about-us.index')->with('success', 'About Us content updated successfully');
    }
}
