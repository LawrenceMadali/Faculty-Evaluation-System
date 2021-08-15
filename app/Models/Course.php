<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Spatie\Activitylog\LogOptions;
use Spatie\Activitylog\Traits\LogsActivity;

class Course extends Model
{
    use HasFactory;
    use LogsActivity;

    protected $fillable = ['course', 'instructor_id'];

    public function instructors()
    {
        return $this->belongsTo(Instructor::class, 'instructor_id');
    }

    protected static $logOnlyDirty = true;
    protected static $submitEmptyLogs = false;
    protected static $logAttributes = ['course'];
    protected static $logName = 'Manage Course';

    public function getDescriptionForEvent(string $eventName): string
    {
        return "{$eventName} by: ".Auth::user()->name;
    }
}
