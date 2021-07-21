<?php

namespace App\Models;

use App\Models\Course;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class CourseCode extends Model
{
    use HasFactory;

    protected $fillable = [
        'course_id',
        'course_code',
        'instructor_id',
        'year_and_section_id',
    ];

    public function instructors()
    {
        return $this->belongsTo(Instructor::class, 'instructor_id');
    }

    public function courses()
    {
        return $this->belongsTo(Course::class, 'course_id');
    }

    public function year_and_sections()
    {
        return $this->belongsTo(YearAndSection::class, 'year_and_section_id');
    }
}
