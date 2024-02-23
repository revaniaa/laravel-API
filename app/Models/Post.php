<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;

    public function user(){
        return $this->belongsTo('App\Models\User');
    }

    // protected $fillable = ['title', 'content'];

    public function comments()
    {
        return $this->morphMany('App\Models\Comment', 'commentable');
    }
}
