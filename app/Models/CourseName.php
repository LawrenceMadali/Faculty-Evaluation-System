<?php

namespace App\Models;

use App\Models\SubjectCode;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class CourseName extends Model
{
    use HasFactory;
    // public $table = 'courses';

    protected $fillable = ['course'];

    public function subjectCode()
    {
        return $this->hasMany(SubjectCode::class);
    }
}
