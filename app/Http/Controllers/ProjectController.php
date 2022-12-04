<?php

namespace App\Http\Controllers;
use App\Models\Contact;
use App\Models\Project;
use Illuminate\Http\Request;

class ProjectController extends Controller
{
    public function index()
    {
      $contact = Contact::query()->first();
      $projects= Project::latest()->paginate(6);
      $title = "Project";
      $active = "project";
      return view('project',compact('contact','projects','title','active'));

    }

    public function show(){

    }
}
