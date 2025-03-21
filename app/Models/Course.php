<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Course extends Model
{  
    protected $guarded = [];
    
    public function users()
    {
        return $this->belongsToMany(User::class, 'user_courses');
    }

    public function lessons()
    {
        return $this->hasMany(Lesson::class);
    }
}
