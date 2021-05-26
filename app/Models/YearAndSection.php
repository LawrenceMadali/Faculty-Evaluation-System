<?php

namespace App\Models;

use App\Models\User;
use App\Models\CourseName;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class YearAndSection extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'course_name_id',
    ];

    public function users()
    {
        return $this->belongsTo(User::class);
    }

    public function courses()
    {
        return $this->belongsTo(CourseName::class, 'course_name_id');
    }
}
