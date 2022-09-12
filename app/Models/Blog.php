<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Blog extends Model
{
    use HasFactory;
    // protected $fillable = ['title','body','intro'];
    protected $guarded = []; //ထည့်ခြင်တာအကုန်ထည့်လို့ရတယ်။
}
