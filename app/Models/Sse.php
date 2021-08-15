<?php

namespace App\Models;

use App\Models\User;
use App\Models\Instructor;
use Spatie\Activitylog\LogOptions;
use Illuminate\Support\Facades\Auth;
use Illuminate\Database\Eloquent\Model;
use Spatie\Activitylog\Traits\LogsActivity;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Sse extends Model
{
    use HasFactory;
    use LogsActivity;

    protected $fillable = [
        'name',
        'id_number',
        'evaluatee',
        'course_id',
        'college_id',
        'semester_id',
        'instructor_id',
        'school_year_id',
        'course_code_id',
        'year_and_section_id',
    ];

    protected static $logOnlyDirty = true;
    protected static $submitEmptyLogs = false;
    protected static $logAttributes = ['name'];
    protected static $logName = 'Set Student Evaluation';

    public function getDescriptionForEvent(string $eventName): string
    {
        return "{$eventName} by: ".Auth::user()->name;
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
