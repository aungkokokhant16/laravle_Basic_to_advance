<?php

use App\Http\Controllers\BlogController;
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

Route::get('/', [BlogController::class,'index']);

Route::get('/blogs/{blog:slug}',[BlogController::class,'show']);



Route::get('/users/{user:username}',function(User $user){
    return view('blogs',[
        'blogs'=>$user->blogs, //object တစ်ခုတည်းကနေလာတာ မို့လို့ ဒီတိုင်းရေးပေးရတယ်
        'categories'=>Category::all()

    ]);
});
