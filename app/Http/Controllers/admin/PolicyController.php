<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Policy;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;
use Illuminate\Validation\Rule;

class PolicyController extends Controller
{

    public function index()
    {
        try {
            $policys = DB::table('policys')->get();


            return view('admin.policy.index', compact('policys'));
        } catch (\Throwable $th) {

            echo "Error Message: " . $th->getMessage();
            return redirect()->back()->with('error', $th->getMessage());
        }
    }

    public function create($id = null)
    {
        $policy = null;

        // Check if $id is provided and fetch the policy
        if ($id) {
            $policy = DB::table('policys')->where('id', $id)->first();
        }

        return view('admin.policy.create', compact('id', 'policy'));
    }
    
    public function edit($id)
{
    $policy = DB::table('policys')->find($id);
    
    return view('admin.policy.edit', compact('id', 'policy'));
}


   public function store(Request $request, $id = null)
{
    $request->validate([
        'title' => 'required',
        'description' => 'required',
        'status' => 'required',
        'is_featured' => 'boolean', // Assuming is_featured is a boolean field
    ]);

    $title = $request->title;
    $description = $request->description;
    $status = $request->status;
    $is_featured = $request->input('is_featured', 0); // Default to 0 if not provided
    
    try {
        if ( $request->id != '') {
            // If ID is present, update the existing policy
            $policy = Policy::findOrFail($request->id);
            $policy->update([
                'title' => $title,
                'description' => $description,
                'status' => $status,
                'is_featured' => $is_featured,
            ]);
            return redirect(route('admin.policy.index'))->with('success', 'Policy updated successfully.');
        } else {
            // If ID is not present, create a new policy
            Policy::create([
                'title' => $title,
                'description' => $description,
                'status' => $status,
                'is_featured' => $is_featured,
            ]);
            return redirect(route('admin.policy.index'))->with('success', 'Policy created successfully.');
        }
    } catch (\Throwable $th) {
        return redirect()->back()->with('error', 'Failed to save/update the policy. ' . $th->getMessage());
    }
}


    public function destory(Request $request)
    {

        try {
            $id = $request->id;
            DB::table('policys')->where('id', $id)->delete();
            return redirect()->back()->with('error', 'Row has been deleted!successfully.');
        } catch (\Throwable $th) {

            echo "Error Message: " . $th->getMessage();
            return redirect()->back()->with('error', $th->getMessage());
        }
    }
}