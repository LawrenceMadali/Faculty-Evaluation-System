<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ReportGroupList extends Model
{
    use HasFactory;

    protected $fillable = [
        'semester_id',
        'school_year_id',
        'college_id',
    ];

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
