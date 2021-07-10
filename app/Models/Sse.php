<?php

namespace App\Models;

use App\Models\User;
use App\Models\Instructor;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Spatie\Activitylog\LogOptions;
use Spatie\Activitylog\Traits\LogsActivity;

class Sse extends Model
{
    use HasFactory;
    use LogsActivity;

    protected $fillable = [
        'school_year_id',
        'semester_id',
        'instructor_id',
        'name',
        'course_id',
        'course_code_id',
        'year_and_section_id',
        'evaluatee',
    ];

    public function getActivitylogOptions(): LogOptions
    {
        return LogOptions::defaults()
        ->logOnly(['name'])
        ->useLogName('Set Student Evaluation')
        ->setDescriptionForEvent(fn(string $eventName) => "Student Evaluation has been {$eventName}");
    }

    public function users()
    {
        return $this->belongsToMany(User::class, 'sse_users')
        ->withTimestamps();
    }

    public function schoolYears()
    {
        return $this->belongsTo(SchoolYear::class, 'school_year_id');
    }

    public function instructors()
    {
        return $this->belongsTo(Instructor::class, 'instructor_id');
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
