<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Contact;

class AdminContactController extends Controller
{
    public function index()
    {

        $contacts = Contact::latest()->get();

        return view('admin.contacts.index', compact('contacts'));
    }
}
