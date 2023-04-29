<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TestiteratorModel extends Model
{
    use HasFactory;

    protected $table = 'testiterator_models';
    protected $fillable = ['numbers', 'words'];


}
