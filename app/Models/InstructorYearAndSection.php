<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class InstructorYearAndSection extends Model
{
    use HasFactory;

    protected $fillable = [
        'instructor_id',
        'year_and_section_id',
    ];
}
