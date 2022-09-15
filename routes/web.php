<?php

use Illuminate\Support\Facades\Route;
use App\Models\Blog;
use App\Models\Category;
use App\Models\User;

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
        'blogs'=>Blog::latest()->get(),//Blog::all ကိုသုံးလို့မရ with နဲ့ သုံးရင် get query ကိုဘဲ သုံးလို့ရမယ် with ကို lazy loading or eager load လို့ခေါ်
        'categories'=>Category::all()

    ]);
});

Route::get('/blogs/{blog:slug}',function(Blog $blog){//{blog:slug} slug နဲ့ရှာစေခြင်တာ
    return view('blog',[
        'blog'=>$blog,//wildcard nameနဲ့တူရမယ်
        'randomBlogs'=>Blog::inRandomOrder()->take(3)->get()
    ]);
})->where('blog','[A-z\d\-_]+');


Route::get('/categories/{category:slug}',function(Category $category){
    return view('blogs',[
        'blogs'=>$category->blogs,
        'categories'=>Category::all(),
        'currentCategory'=>$category

    ]);
});

Route::get('/users/{user:username}',function(User $user){
    return view('blogs',[
        'blogs'=>$user->blogs, //object တစ်ခုတည်းကနေလာတာ မို့လို့ ဒီတိုင်းရေးပေးရတယ်
        'categories'=>Category::all()

    ]);
});
