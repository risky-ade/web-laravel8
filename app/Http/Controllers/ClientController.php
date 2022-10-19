<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use Illuminate\Http\Request;

class ClientController extends Controller
{
    public function index()
    {
      $contact = Contact::query()->first();
      $title = "Client";
      $active = "client";
      return view('client',compact('contact','title','active'));

    }
}
