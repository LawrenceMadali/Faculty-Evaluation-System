<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CourseCodeAndTitle extends Model
{
    use HasFactory;

    protected $fillable = [
        'course_code_title'
    ];
}
