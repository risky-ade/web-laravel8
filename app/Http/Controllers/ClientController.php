<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use App\Models\Project;
use Illuminate\Http\Request;

class ClientController extends Controller
{
    public function index()
    {
      $contact = Contact::query()->first();
      $projects= Project::all();
      $title = "Client";
      $active = "client";
      return view('client',compact('contact','projects','title','active'));

    }
}
