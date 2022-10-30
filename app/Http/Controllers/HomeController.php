<?php

namespace App\Http\Controllers;
use App\Models\Contact;
use App\Models\Service;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
      $contact = Contact::query()->first();
      $services = Service::latest()->paginate(6);
      $title = "Home";
      $active = "home";
      return view('home',compact('contact','services','title','active'));

    }

    public function show(Contact $contact)
    {
        $contact = Contact::first();
        return view('partials.footers', [
            'contact'=> $contact
        ]);

    }
}
