<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $fillable = [
        'title',
        'body',
        'slug',
        'user_id',
        'img',
        'updated_at'
    ];

    public function user() {
        return $this->belongsTo('App\User');
    }

    public function tags() {
        return $this->belongsToMany('App\Tag');
    }

}
