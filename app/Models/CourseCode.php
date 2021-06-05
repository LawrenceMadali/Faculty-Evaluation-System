<?php

namespace App\Models;

use App\Models\Course;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class CourseCode extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'instructor_id'];

    public function courses()
    {
        return $this->belongsTo(Course::class, 'course_id');
    }
}
