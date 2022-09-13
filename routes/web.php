<?php

use Illuminate\Support\Facades\Route;
use App\Models\Blog;
use App\Models\Category;

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
    return view('blogs',[
        'blogs'=>Blog::with('category')->get()//Blog::all ကိုသုံးလို့မရ with နဲ့ သုံးရင် get query ကိုဘဲ သုံးလို့ရမယ် with ကို lazy loading or eager load လို့ခေါ်
    ]);
});

Route::get('/blogs/{blog:slug}',function(Blog $blog){//{blog:slug} slug နဲ့ရှာစေခြင်တာ
    return view('blog',[
        'blog'=>$blog//wildcard nameနဲ့တူရမယ်
    ]);
})->where('blog','[A-z\d\-_]+');


Route::get('/categories/{category:slug}',function(Category $category){
    return view('blogs',[
        'blogs'=>$category->blogs
    ]);
});
