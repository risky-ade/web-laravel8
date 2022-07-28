<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;
use App\Models\Post;
use App\Models\User;

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



        return view('posts', [
            "title" => "All Posts" . $title,
            "active" => 'posts',
            // "posts" => Post::all()
            "posts" => Post::latest()->filter(request(['search', 'category', 'author']))
            ->paginate(7)->withQueryString()       //Note : old ->get()
            // "posts" => $posts->get()     //dilakukan query disini
        ]);
    }

    public function show(Post $post)
    {
        return view('post', [
            "title" => "Single Post",
            "active" => 'posts',
            "post" => $post                      //sebelumnya pakai cari sesuai slug//Post::find($slug)
        ]);
    }
}
