<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Lecture extends Model
{
    protected $fillable = [
        'title',
        'studycourse',
        'from',
        'to'
    ];

    public $timestamps = false;
}
