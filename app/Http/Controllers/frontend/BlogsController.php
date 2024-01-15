<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Blog;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;

class BlogsController extends Controller
{
    public function index(){
        
        $blogs = DB::table('blogs')->get();
         return view('frontend.blogs', compact('blogs'));
       
    }
    
    public function show($slug)
{
    try {
        $blogs = Blog::where('slug',$slug)->first();
        
        return view('frontend.show', compact('blogs'));
    } catch (\Throwable $th) {
        return redirect()->back()->with('error', $th->getMessage());
    }
}

}
