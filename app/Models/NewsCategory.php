<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasOne;

class NewsCategory extends Model
{
    use HasFactory;

    public function getNameAttribute($value) {
        return $value . '-Acc-';
    }

    public function setMessageAttribute($value) {
        $this->attributes['message'] = $value;
    }

    public function news()
    {
        return $this->belongsToMany(News::class, 'news_has_categories',
        'category_id', 'news_id');
    }

    public function authors()
    {
        return $this->hasOne(User::class,'id','created_by');
    }
}
