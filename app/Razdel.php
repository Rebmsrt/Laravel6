<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Razdel extends Model
{
    protected $fillable = [
        'title', 'is_public'
    ];
}
