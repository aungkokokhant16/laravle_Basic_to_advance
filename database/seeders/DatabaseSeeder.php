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



        $frontend= Category::factory()->create(['name'=>'frontend']);
        $backend = Category::factory()->create(['name'=>'backend']);

        User::factory()->create();
        Blog::factory(2)->create(['category_id'=>$frontend->id]);
        Blog::factory(2)->create(['category_id'=>$backend->id]);

    }
}
