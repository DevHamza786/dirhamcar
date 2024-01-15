<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Term;

class TermController extends Controller
{
    public function index()
    {
        $terms = Term::all();
        return view('admin.term.index', compact('terms'));
    }

    public function edit()
    {
        $term = Term::first(); // Assuming you have only one record for Term and Condition
        return view('admin.term.edit', compact('term'));
    }

    public function update(Request $request)
    {
        $request->validate([
            'content' => 'required|string',
            // Add any other fields you have in your Term model
        ]);

        $term = Term::first();

        // Check if a Term record exists
        if ($term) {
            $term->content = htmlspecialchars($request->input('content'));
            // Update other fields as needed
            $term->update($request->all());
        } else {
            // Create a new Term record if it doesn't exist
            Term::create($request->all());
        }

        return redirect()->route('admin.term.index')->with('success', 'Term and Condition updated successfully');
    }
}
