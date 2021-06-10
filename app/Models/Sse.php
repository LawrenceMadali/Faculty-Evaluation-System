<?php

namespace App\Models;

use App\Models\User;
use App\Models\Instructor;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Sse extends Model
{
    use HasFactory;

    protected $fillable = [
        'school_year_id',
        'semester_id',
        'user_id',
        'course_id',
        'course_code_id',
        'year_and_section_id',
    ];

    public function users()
    {
        return $this->belongsToMany(Student::class, 'sse_students')
        ->withTimestamps()
        ->using(EvaluationUser::class);
    }

    public function schoolYears()
    {
        return $this->belongsTo(SchoolYear::class, 'school_year_id');
    }

    public function instructors()
    {
        return $this->belongsTo(Instructor::class, 'user_id');
    }

    public function semesters()
    {
        return $this->belongsTo(Semester::class, 'semester_id');
    }

    public function courses()
    {
        return $this->belongsTo(Course::class, 'course_id');
    }

    public function yearSections()
    {
        return $this->belongsTo(YearAndSection::class, 'year_and_section_id');
    }

    public function CourseCodes()
    {
        return $this->belongsTo(CourseCode::class, 'course_code_id');
    }
}
