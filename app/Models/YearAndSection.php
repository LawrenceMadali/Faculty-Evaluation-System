<?php

namespace App\Models;

use App\Models\User;
use App\Models\Course;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class YearAndSection extends Model
{
    use HasFactory;

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
}
