<?php

namespace App\Models;

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

    public function category(){
        return $this->belongsTo(Category::class);
    }

    public function author(){
        return $this->belongsTo(User::class,'user_id');
    }
}
