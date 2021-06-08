<?php

namespace App\Models;

use App\Models\Course;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class CourseCode extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'instructor_id', 'course_code'];

    public function instructors()
    {
        return $this->belongsTo(Instructor::class, 'instructor_id');
    }
}
