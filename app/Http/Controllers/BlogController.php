<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use App\Models\Category;
use Illuminate\Http\Request;

class BlogController extends Controller
{
    public function index(){



        return view('blogs',[
        'blogs'=>Blog::latest()->filter(request(['search']))->get(),//Blog::all ကိုသုံးလို့မရ with နဲ့ သုံးရင် get query ကိုဘဲ သုံးလို့ရမယ် with ကို lazy loading or eager load လို့ခေါ်
        'categories'=>Category::all()

    ]);
    }

    public function show(Blog $blog){//{blog:slug} slug နဲ့ရှာစေခြင်တာ
    return view('blog',[
        'blog'=>$blog,//wildcard nameနဲ့တူရမယ်
        'randomBlogs'=>Blog::inRandomOrder()->take(3)->get()
    ]);
    }


    //     if(request('search')){
    //     $blogs=$blogs->where('title','LIKE','%'.request('search').'%')
    //                 ->orWhere('body','LIKE','%'.request('search').'%');
    // }




}
