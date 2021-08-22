<?php

namespace App\Models;

use Illuminate\Support\Facades\Auth;
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

    protected static $logOnlyDirty = true;
    protected static $submitEmptyLogs = false;
    protected static $logAttributes = ['name'];
    protected static $logName = 'Manage Result';

    public function getDescriptionForEvent(string $eventName): string
    {
        return "{$eventName} by: ".Auth::user()->name;
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
