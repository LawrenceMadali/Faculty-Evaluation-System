<?php

namespace App\Models;

use App\Models\SubjectCode;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Course extends Model
{
    use HasFactory;

    protected $fillable = ['name'];

    public function subjectCode()
    {
        return $this->hasMany(SubjectCode::class);
    }
}
