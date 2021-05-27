<?php

namespace App\Models;

use App\Models\User;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Sse extends Model
{
    use HasFactory;

    protected $fillable = [
        'school_year_id',
        'semester_id',
        'name',
        'course_id',
        'subject_code_id',
        'year_and_section_id',
    ];

    public function users()
    {
        return $this->belongsToMany(User::class, 'sse_users')->withTimestamps();
    }

    public function schoolYears()
    {
        return $this->belongsTo(SchoolYear::class, 'school_year_id');
    }

    // public function instructors()
    // {
    //     return $this->belongsTo(User::class, 'user_id');
    // }

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

    public function subjectCodes()
    {
        return $this->belongsTo(SubjectCode::class, 'subject_code_id');
    }
}
