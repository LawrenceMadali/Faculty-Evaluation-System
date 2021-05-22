<?php

namespace App\Models;

use App\Models\User;
use App\Models\CourseName;
use App\Models\SchoolYear;
use App\Models\SubjectCode;
use App\Models\YearAndSection;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Spe extends Model
{
    use HasFactory;

    protected $fillable = [
        'school_year_id',
        'semester_id',
        'user_id',
        'course_name_id',
        'subject_code_id',
        'year_and_section_id',
    ];

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
        return $this->belongsTo(CourseName::class, 'course_name_id');
    }

    public function yearSections()
    {
        return $this->belongsTo(YearAndSection::Class, 'year_and_section_id');
    }

    public function subjectCodes()
    {
        return $this->belongsTo(SubjectCode::class, 'subject_code_id');
    }

}
