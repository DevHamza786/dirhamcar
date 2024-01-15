<?php

namespace App\Http\Controllers\admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

use Illuminate\Support\Facades\Session;


class LoginController extends Controller
{
    public function index()
    {
        return view('admin.login');
    }

    public function store(Request $request)
    {
        $credentials = $request->only('email', 'password');

        if (Auth::attempt($credentials)) {
            // Authentication successful

            $user = Auth::user();

            if ($user->role_id == 1) {
                return redirect(route('admin.index'));
            } else {
                return redirect()->back()->withInput()->withErrors(['errorMessage' => 'Invalid credentials']);
            }
        } else {
            // Authentication failed
            // Handle accordingly, for example, redirect back with an error message
            return redirect()->back()->withInput()->withErrors(['errorMessage' => 'Invalid credentials']);
        }
    }

    public function logout()
    {
        Auth::logout();
        return redirect('/dhc-admin');
    }
}
