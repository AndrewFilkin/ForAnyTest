<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ShortLink extends Model
{
    use HasFactory;

    protected $table = 'short_links';
    protected $fillable = [
        'main_link',
        'short_code_link',
        'code',
        'description',
    ];
}
