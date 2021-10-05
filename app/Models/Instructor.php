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
        'college_id',
        'is_regular',
        'course_code_id',
    ];

    public function instructorYrSec()
    {
        return $this->belongsToMany(YearAndSection::class, 'instructor_year_and_sections')->withTimestamps();
    }

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
}
