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

    public function getActivitylogOptions(): LogOptions
    {
        return LogOptions::defaults()
        ->logOnly(['course'])
        ->useLogName('Course')
        ->setDescriptionForEvent(fn(string $evenName) => "The course has been {$eventName} by: ".Auth::user()->name);
    }
}
