<?php

namespace App\Models;

use App\Models\User;
use App\Models\Course;
use App\Models\SchoolYear;
use App\Models\CourseCode;
use App\Models\YearAndSection;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Spatie\Activitylog\LogOptions;
use Spatie\Activitylog\Traits\LogsActivity;

class Spe extends Model
{
    use HasFactory;
    use LogsActivity;

    protected $fillable = [
        'name',
        'evaluatee',
        'semester_id',
        'user_id',
        'school_year_id',
    ];

    public function getActivitylogOptions(): LogOptions
    {
        return LogOptions::defaults()
        ->logOnly(['name'])
        ->logOnlyDirty()
        ->useLogName('Set Peer Evaluation')
        ->setDescriptionForEvent(fn(string $eventName) => "This module has been {$eventName}");
    }

    public function users()
    {
        return $this->belongsToMany(User::class, 'spe_users')->withTimestamps();
    }

    public function schoolYears()
    {
        return $this->belongsTo(SchoolYear::class, 'school_year_id');
    }

    public function instructors()
    {
        return $this->belongsTo(User::class, 'user_id');
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
