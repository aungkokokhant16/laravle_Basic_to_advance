<?php

use Illuminate\Support\Facades\Route;

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
    return view('blogs');
});

Route::get('/blogs/{blog}',function($filename){
    //{blog}adr yay htr tr ka wildcat function nae yay htr tr
    $path = __DIR__."/../resources/blogs/$filename.html";
    $blog = file_get_contents($path);
    // return $blog;
    return view('blog',[
        'blog'=>$blog
    ]);
});
