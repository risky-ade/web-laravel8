<?php

namespace App\Http\Controllers;
use App\Models\Contact;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
      $contact = Contact::query()->first();
    //   $service
      $title = "Home";
      $active = "home";
      return view('home',compact('contact','title','active'));

    }

    public function show(Contact $contact)
    {
        $contact = Contact::first();
        return view('partials.footers', [
            'contact'=> $contact
        ]);

    }
}
