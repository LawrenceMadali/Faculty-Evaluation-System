<?php

namespace App\Models;

use App\Models\Course;
use Illuminate\Support\Facades\Auth;
use Illuminate\Database\Eloquent\Model;
use Spatie\Activitylog\Traits\LogsActivity;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class CourseCode extends Model
{
    use HasFactory;
    use LogsActivity;

    protected $fillable = [
        'course_id',
        'semester_id',
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

    public function semesters()
    {
        return $this->belongsTo(Semester::class, 'semester_id');
    }

    protected static $logOnlyDirty = true;
    protected static $submitEmptyLogs = false;
    protected static $logAttributes = ['course_code'];
    protected static $logName = 'Manage College Code';

    public function getDescriptionForEvent(string $eventName): string
    {
        return "{$eventName} by: ".Auth::user()->name;
    }

    public static function search($search)
    {
        return empty($search)
        ? static::query()
        : static::query()
        ->where('course_code', 'LIKE' , '%'.$search.'%');
    }
}
