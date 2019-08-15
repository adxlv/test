<?php

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

// Meklē failus šeit
// _blog/resources/view/*

Route::get('/', function () {
    return view('welcome');
});

Route::get('/blog', function () {

    $posts = \App\Post::orderBy('id', 'desc')->get();

    return view('blog', [
        'title' => 'Blog',
        'posts' => $posts,
    ]);
});

Route::get('/blog/create', function () {

    // $post = \App\Post::find($id);

    return view('blog-form', [
        'title' => 'Blog Create',
    //     'post' => $post,
    ]);
});


Route::post('/blog/create', function () {

    $title = Request::post('title', null);
    $body  = Request::post('body', null);

    $post = new \App\Post;
    $post->title = $title;
    $post->body = $body;

    $post->save();

    return redirect('/blog');
});

Route::get('/blog/{id}', function ($id) {
    $post = \App\Post::find($id);

    return view('blog-item', [
        'title' => 'Blog Post',
        'post' => $post,
    ]);
});

Route::get('/about', function () {
    return view('about', [
        'title' => 'About',
    ]);
});


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
