<?php

namespace Database\Seeders;

use App\Models\Blog;
use App\Models\Category;
use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        User::truncate();//truncate()ဆိုတာ မ run ခင်  data table ထဲမှာရှိတဲ့ data အားလုံးကို အရင်ဖျက်
        Category::truncate();
        Blog::truncate();
        User::factory()->create();

        $frontend=Category::create([
            "name"=>"frontend",
            "slug"=>"frontend"
        ]);

        $backend=Category::create([
            "name"=>"backend",
            "slug"=>"backend"
        ]);

        Blog::create([
            "title"=>"Frontend",
            "intro"=>"This is Frontend Intro",
            "slug"=>"frontend-post",
            "body"=>"This is body text",
            "category_id"=>$frontend->id
        ]);

        Blog::create([
            "title"=>"Backend",
            "intro"=>"This is Backend Intro",
            "slug"=>"backend-post",
            "body"=>"This is body text",
            "category_id"=>$backend->id
        ]);
    }
}
