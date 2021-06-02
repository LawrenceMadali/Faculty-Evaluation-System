<?php

namespace App\Models;

use App\Models\CourseCode;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Course extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'college_id'];

    public function colleges()
    {
        return $this->belongsTo(College::class, 'college_id');
    }
}
