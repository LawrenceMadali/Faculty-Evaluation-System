<?php

namespace App\Models;

use App\Models\CourseName;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class SubjectCode extends Model
{
    use HasFactory;

    protected $fillable = ['subject_code', 'course_name_id'];

    public function course()
    {
        return $this->belongsTo(CourseName::class, 'course_name_id');
    }
}
