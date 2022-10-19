<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use Illuminate\Http\Request;

class AboutController extends Controller
{
    public function index()
    {
        {
            $contact = Contact::query()->first();
            $title = "About";
            $active = "about";
            return view('about',compact('contact','title','active'));
      
          }
    }
}
