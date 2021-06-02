<?php

namespace App\Models;

use App\Models\CourseCode;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Instructor extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'user_id',
        'id_number',
        'course_code_id',
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
}
