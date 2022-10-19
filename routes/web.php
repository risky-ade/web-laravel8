<?php

use App\Http\Controllers\AboutController;
use App\Models\Contact;
use App\Models\Service;
use App\Models\Category;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;

use App\Http\Controllers\DashboardAboutController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\DashboardClientController;
use App\Http\Controllers\DashboardSliderController;
use App\Http\Controllers\DashboardContactController;
use App\Http\Controllers\DashboardProjectController;
use App\Http\Controllers\DashboardServiceController;
use App\Http\Controllers\AdminCategoryController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\DashboardPostController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProjectController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/


Route::get('/', function () {
    return view('home', [
        "title" => "Home",
        'active' => "home"
    ]);
});

// Route::get('/home', function () {
//     return view('home', [
//         "title" => "Home",
//         'active' => "home",
//         'services' => Service::all(),
//     ]);
// });
Route::get('/home',[HomeController::class, 'index']);
Route::get('/about',[AboutController::class, 'index']);
Route::get('/project',[ProjectController::class, 'index']);
Route::get('/client',[ProjectController::class, 'index']);

Route::get('/client', function () {
    return view('client', [
        "title" => "Client",
        'active' => "client"
    ]);
});


// Route::get('/', function () {
//     return view('footers',[
//         'footers'=> Contact::first()
//     ]);
// });



Route::get('/posts', [PostController::class, 'index']);               // sebelumnya ('/blog', function ()
//halaman single post
Route::get('posts/{post:slug}', [PostController::class, 'show']);                //sebelumnya ('blog/{slug}', function ($slug)

Route::get('/categories', function () {
    return view('categories', [
        'title' => 'Post Categories',
        'active' => 'categories',
        'categories' => Category::all(),

    ]);

});



Route::get('/login', [LoginController::class, 'index'])->name('login')->middleware('guest');
Route::post('/login', [LoginController::class, 'authenticate']);
Route::post('/logout', [LoginController::class, 'logout']);

Route::get('/register', [RegisterController::class, 'index']);
Route::post('/register', [RegisterController::class, 'store']);

Route::get('/partials/footers', [ContactController::class, 'index']);
Route::get('/partials/footers', [ContactController::class, 'show']);

Route::get('/dashboard', function(){
    return view('dashboard.index');
})->middleware('auth');

Route::get('/dashboard/posts/checkSlug', [DashboardPostController::class, 'checkSlug'])->middleware('auth');

Route::resource('/dashboard/posts', DashboardPostController::class)->middleware('auth');

Route::get('/dashboard/categories/checkSlug', [AdminCategoryController::class, 'checkSlug'])->middleware('auth');

Route::resource('/dashboard/categories', AdminCategoryController::class)-> except('show')->middleware('auth');
Route::resource('/dashboard/sliders',DashboardSliderController::class)->middleware('auth');
Route::resource('/dashboard/services', DashboardServiceController::class)-> except('show')->middleware('auth');
Route::resource('/dashboard/projects', DashboardProjectController::class)->middleware('auth');
Route::resource('/dashboard/abouts', DashboardAboutController::class)->middleware('auth');
Route::resource('/dashboard/clients', DashboardClientController::class)->middleware('auth');

Route::get('/dashboard/contact', [DashboardContactController::class, 'index'])->middleware('auth');
Route::put('/dashboard/contact/{id}', [DashboardContactController::class, 'update'])->middleware('auth');




// Route::get('/categories/{category:slug}', function (Category $category) {
//     return view('posts', [
//         'title' => "Post By Category : $category->name",
//         'active' => 'categories',
//         'posts' => $category->posts->load('category', 'author')
//     ]);

// });

// Route::get('/authors/{author:username}', function (User $author) {
//     return view('posts', [
//         'title' => "Post By Author : $author->name",
//         'active' => 'posts',
//         'posts' => $author->posts->load('category', 'author')
//     ]);
// });



