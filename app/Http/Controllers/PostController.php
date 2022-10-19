<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\User;
use App\Models\Contact;
use App\Models\Category;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index()
    {


        $title = '';
        if(request('category')){
            $category = Category::firstWhere('slug', request('category'));
            $title = ' in ' . $category->name;
        }

        if(request('author')){
            $author = User::firstWhere('username', request('author'));
            $title = ' by ' . $author->name;
        }
        // $posts = Post::latest();

        // $contact = Contact::first();

        return view('posts', [
            "title" => "All Article" . $title,
            "active" => 'posts',
            // "posts" => Post::all()
            "posts" => Post::latest()->filter(request(['search', 'category', 'author']))
            ->paginate(7)->withQueryString(),       //Note : old ->get()
            "contact" => Contact::first()
            // "posts" => $posts->get()     //dilakukan query disini
        ]);

       
    }
    // public function show(Contact $contact)
    // {
    //     $contact = Contact::first();
    //     return view('partials.footers', [
    //         'contact'=> $contact
    //     ]);

    // }

    public function show(Post $post)
    {
        return view('post', [
            "title" => "Single Post",
            "active" => 'posts',
            "post" => $post                      //sebelumnya pakai cari sesuai slug//Post::find($slug)
        ]);
        
    }
    
}
