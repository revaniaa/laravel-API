<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Profile extends Model
{
    use HasFactory;

    protected $table = 'profile';
    protected $fillable = [
        'describe_profile',
        'link_acc',
        'photo_profile',
    ];

    public function user()
{
    return $this->belongsTo(User::class);
}
}
