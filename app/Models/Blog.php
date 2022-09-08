<?php

namespace App\Models;

class Blog{
    public static function find($slug){

    // $path = __DIR__."/../resources/blogs/$slug.html";
    $path = resource_path("blogs/$slug.html");
    if(!file_exists($path)){
        // abort(404);
        return redirect('/');//dd,abort,redirect(Helper function)
    }
    return cache()->remember("posts.$slug", 120 , function() use($path){
        return file_get_contents($path);
    });
    }

    //{blog}adr yay htr tr ka wildcat function nae yay htr tr
    // dd($slug);

    // $blog = cache()->remember("posts.$slug", now()->addMinute() , function() use($path){//now()->addminute သည် helper functionဖြစ်သည်
    //     var_dump('file get contetn');
    //     return file_get_contents($path);
    // });
}
