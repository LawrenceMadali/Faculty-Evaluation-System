<?php

namespace App\Models;

use App\Models\YearAndSection;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class SubjectCode extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'course_name_id'];

    public function courses()
    {
        return $this->belongsTo(CourseName::class, 'course_name_id');
    }
}
