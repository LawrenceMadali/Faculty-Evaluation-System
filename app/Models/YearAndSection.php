<?php

namespace App\Models;

use App\Models\User;
use App\Models\Course;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Spatie\Activitylog\LogOptions;
use Spatie\Activitylog\Traits\LogsActivity;

class YearAndSection extends Model
{
    use HasFactory;
    use LogsActivity;

    protected $fillable = [
        'year_and_section',
        'instructor_id',
        'course_id',
    ];

    public function instructors()
    {
        return $this->belongsTo(Instructor::class, 'instructor_id');
    }

    public function courses()
    {
        return $this->belongsTo(Course::class, 'course_id');
    }
    public function getActivitylogOptions(): LogOptions
    {
        return LogOptions::defaults()
        ->logOnly(['year_and_section'])
        ->useLogName('Year and Section')
        ->setDescriptionForEvent(fn(string $eventName) => "The year and section has been {$eventName} by: ".Auth::user()->name);
    }
}
