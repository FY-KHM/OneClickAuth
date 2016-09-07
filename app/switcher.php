<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class switcher extends Model
{
    protected $table = 'switchref';
    protected $fillable = [
        'name', 'type',
    ];
}
