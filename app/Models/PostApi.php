<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PostApi extends Model
{
    use HasFactory;

    protected $table = 'post_apis';

    protected $fillable = ['title', 'description', 'text', 'date-create'];

    protected $perPage = 10;
}
