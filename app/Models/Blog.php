<?php

namespace App\Models;

use Clockwork\Storage\Search;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Blog extends Model
{
    use HasFactory;
    // protected $fillable = ['title','body','intro'];
    protected $guarded = []; //ထည့်ခြင်တာအကုန်ထည့်လို့ရတယ်။
    protected $with = ['category', 'author'];// eager load ကို web.php မှာအကုန်မထည့်ခြင်လို့ ဒီမှာလာရေးတာ။
    // protected $without = ['category'];

    public function scopeFilter($query, $filter){

            $query->when($filter['search']??false,function($query,$search){  //when() နဲ့စစ်တာ laravel ရဲ့ Object Orient Secentnce နဲ့‌ရေးတာ
            $query->where(function($query) use ($search){
                    $query->where('title','LIKE','%'.$search.'%')
                  ->orWhere('body','LIKE','%'.$search.'%');
            });
        });

        $query->when($filter['category']??false,function($query,$slug){  //when() နဲ့စစ်တာ laravel ရဲ့ Object Orient Secentnce နဲ့‌ရေးတာ
            $query->whereHas('category',function($query) use ($slug){
                $query->where('slug',$slug);
            });
        });

        $query->when($filter['username']??false,function($query,$usernmae){  //when() နဲ့စစ်တာ laravel ရဲ့ Object Orient Secentnce နဲ့‌ရေးတာ
            $query->whereHas('author',function($query) use ($usernmae){
                $query->where('username',$usernmae);
            });
        });

    }
    public function category(){
        return $this->belongsTo(Category::class);
    }

    public function author(){
        return $this->belongsTo(User::class,'user_id');
    }

    public function comments(){
        return $this->hasMany(Comment::class);
    }
}
