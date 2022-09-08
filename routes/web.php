<?php

use Illuminate\Support\Facades\Route;

use function PHPUnit\Framework\fileExists;

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

Route::get('/blogs/{blog}',function($slug){
    //{blog}adr yay htr tr ka wildcat function nae yay htr tr
    // dd($slug);
    $path = __DIR__."/../resources/blogs/$slug.html";
    if(!file_exists($path)){
        // abort(404);
        return redirect('/');//dd,abort,redirect(Helper function)
    }
    $blog = file_get_contents($path);
    // return $blog;
    return view('blog',[
        'blog'=>$blog
    ]);
})->where('blog','[A-z\d\-_]+');

