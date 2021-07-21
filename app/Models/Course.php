<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Course extends Model
{
    use HasFactory;

    protected $fillable = ['course', 'instructor_id'];

    public function instructors()
    {
        return $this->belongsTo(Instructor::class, 'instructor_id');
    }
}
