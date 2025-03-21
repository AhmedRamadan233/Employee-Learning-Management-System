<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;

class Manager extends Authenticatable
{
    protected $guarded = [];
    protected $casts = [
        'password' => 'hashed',
    ];
    protected $hidden = [
        'password',
    ];
}
