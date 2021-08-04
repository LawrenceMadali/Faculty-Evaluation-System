<?php

namespace App\Models;

use Spatie\Activitylog\LogOptions;
use Illuminate\Database\Eloquent\Model;
use Spatie\Activitylog\Traits\LogsActivity;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Results extends Model
{
    use HasFactory;
    use LogsActivity;

    protected $fillable = [
        'name',
        'ipcr',
        'total',
        'id_number',
        'is_release',
        'college_id',
        'supervisor',
        'semester_id',
        'instructor_id',
        'school_year_id',
        'peer_evaluation_result',
        'student_evaluation_result',
    ];

    public function getActivitylogOptions(): LogOptions
    {
        return LogOptions::defaults()
        ->logOnly(['total']);
        // ->setDescriptionForEvent(fn(string $eventName) => '');
    }

    public function instructors()
    {
        return $this->belongsTo(Instructor::class, 'instructor_id');
    }

    public function semesters()
    {
        return $this->belongsTo(Semester::class, 'semester_id');
    }

    public function school_years()
    {
        return $this->belongsTo(SchoolYear::class, 'school_year_id');
    }

    public function colleges()
    {
        return $this->belongsTo(College::class, 'college_id');
    }
}
