<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;
use App\Models\Term;

class TermsController extends Controller
{
    public function index()
    {
        $term = DB::table('terms')->get();

        // Check if $term is not null
        if ($term !== null) {
            return view('frontend.termcondition', compact('term'));
        } else {
            return view('frontend.termcondition')->with('noTerm', true);
        }
    }
}
