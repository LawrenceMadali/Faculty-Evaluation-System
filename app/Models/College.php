<?php

namespace App\Models;

use App\Models\Course;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class College extends Model
{
    use HasFactory;

    protected $fillable = [ 'college' ];

    // public function courses()
    // {
    //     return $this->hasMany(Course::class, 'college_id');
    // }
}
