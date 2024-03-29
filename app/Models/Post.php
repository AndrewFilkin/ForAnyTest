<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;

    protected $fillable = ['title', 'description', 'text', 'counter_likes'];

    public function users()
    {
        return $this->belongsToMany(User::class, 'post_users');
    }

}
