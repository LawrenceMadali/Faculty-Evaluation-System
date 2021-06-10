<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SseStudent extends Model
{
    use HasFactory;

    protected $fillable = [
        'student_id',
        'sse_id',
        'user_id',
    ];

}
