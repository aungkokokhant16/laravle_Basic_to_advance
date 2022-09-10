<?php

namespace App\Models;

use Illuminate\Support\Facades\File;
use Spatie\YamlFrontMatter\YamlFrontMatter;


class Blog{

    public $title;
    public $slug;
    public $intro;
    public $body;
    public $date;

    public function __construct($title,$slug,$intro,$body,$date)
    {
        $this->title=$title;
        $this->slug=$slug;
        $this->intro=$intro;
        $this->body=$body;
        $this->date=$date;
    }

    public static function all(){
        return collect(File::files(resource_path("blogs")))
            ->map(function($file){
            $obj = YamlFrontMatter::parseFile($file);
            return new Blog ($obj->title,$obj->slug,$obj->intro,$obj->body(),$obj->date);
        })->sortByDesc('date');


        // return array_map( function($file){
        //     $obj = YamlFrontMatter::parseFile($file);
        //     return new Blog ($obj->title,$obj->slug,$obj->intro,$obj->body());

        // },$files);



        // return array_map(function($file){
        //     return $file->getContents();
        // },$files);
    }

    // public static function find($slug){

    // // $path = __DIR__."/../resources/blogs/$slug.html";
    // $path = resource_path("blogs/$slug.html");
    // if(!file_exists($path)){
    //     // abort(404);
    //     return redirect('/');//dd,abort,redirect(Helper function)
    // }
    // return cache()->remember("posts.$slug", 120 , function() use($path){
    //     return file_get_contents($path);
    // });
    // }

    //{blog}adr yay htr tr ka wildcat function nae yay htr tr
    // dd($slug);

    // $blog = cache()->remember("posts.$slug", now()->addMinute() , function() use($path){//now()->addminute သည် helper functionဖြစ်သည်
    //     var_dump('file get contetn');
    //     return file_get_contents($path);
    // });

    public static function find($slug){
        $blogs = static::all();
        return $blogs->firstWhere('slug',$slug);
    }
}
