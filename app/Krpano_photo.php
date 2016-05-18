<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Krpano_photo extends Model
{
    protected $fillable = [
        'title', 'krpano_path', 'img_path',
    ];
}
