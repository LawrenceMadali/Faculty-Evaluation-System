<?php

namespace App\Models;

use App\Models\SubjectCode;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Instructor extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'id_number',
        'subject_code_id',
        'is_regular',
    ];

    public function users()
    {
        return $this->belongsTo(User::class, 'user_id');
    }

    public function subjectCodes()
    {
        return $this->belongsTo(SubjectCode::class, 'subject_code_id');
    }
}
