<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class News extends Model
{
    use HasFactory;


    public function categories()
    {
        return $this->belongsToMany(NewsCategory::class, 'news_has_categories',
        'news_id', 'category_id');
    }

    public function authors()
    {
        return $this->hasOne(User::class,'id','created_by');
    }
}
