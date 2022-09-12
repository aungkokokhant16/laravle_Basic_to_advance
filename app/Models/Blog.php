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

    public function category(){
        return $this->belongsTo(Category::class);
    }
}
