<?php

namespace App\Http\Controllers;
use App\Models\Contact;
use Illuminate\Http\Request;

class ProjectController extends Controller
{
    public function index()
    {
      $contact = Contact::query()->first();
      $title = "Project";
      $active = "project";
      return view('project',compact('contact','title','active'));

    }
}
