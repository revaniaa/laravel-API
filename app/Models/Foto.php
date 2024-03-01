<?php

namespace App\Models;
use App\Models\User;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Foto extends Model
{
    use HasFactory;

    protected $fillable = ['id_photo', 'describe_photo', 'image', 'like_post', 'id_user'];
    protected $table = 'gallery';


    public function user()
    {
        return $this->belongsTo(User::class);
    }

    // protected $fillable = ['title', 'content'];

    public function comments()
    {
        return $this->morphMany('App\Models\Komen', 'commentable');
    }

    // public function komens()
    // {
    //     return $this->hasMany(Komen::class);
    // }
}

