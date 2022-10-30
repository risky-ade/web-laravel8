<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function index()
    {
          return view('categories', [
          'title' => 'Post Categories',
          'active' => 'categories',
          'categories' => Category::all(),
          'contact'=> Contact::first()
    
        ]);
    //   $contact = Contact::query()->first();
    //   $title = "Post Categories";
    //   $active = "categories";
    //   return view('categories',compact('contact','title','active'));

    }

}
