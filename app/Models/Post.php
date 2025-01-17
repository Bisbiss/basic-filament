<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    //add fillable
    protected $fillable = ['title', 'content','image','category_id'];

    //add relationship 
    public function category()
    {
        return $this->belongsTo(Category::class);
    }
}
