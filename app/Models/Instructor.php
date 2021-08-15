<?php

namespace App\Models;

use App\Models\CourseCode;
use Auth;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Spatie\Activitylog\LogOptions;
use Spatie\Activitylog\Traits\LogsActivity;

class Instructor extends Model
{
    use HasFactory;
    use LogsActivity;

    protected $fillable = [
        'name',
        'user_id',
        'id_number',
        'course_code_id',
        'college_id',
        'is_regular',
    ];

    public function users()
    {
        return $this->belongsTo(User::class, 'user_id');
    }

    public function CourseCodes()
    {
        return $this->belongsTo(CourseCode::class, 'course_code_id');
    }

    public function colleges()
    {
        return $this->belongsTo(College::class, 'college_id');
    }

    public function prfs()
    {
        return $this->belongsTo(PeerRatingForm::class, 'instructor_id');
    }

    protected static $logOnlyDirty = true;
    protected static $submitEmptyLogs = false;
    protected static $logAttributes = ['name'];
    protected static $logName = 'Manage Instructor';

    public function getDescriptionForEvent(string $eventName): string
    {
        return "{$eventName} by: ".Auth::user()->name;
    }
}
