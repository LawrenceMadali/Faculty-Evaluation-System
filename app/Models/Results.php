<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Results extends Model
{
    use HasFactory;

    protected $fillable = [
        'peer_evaluation_result',
        'student_evaluation_result',
        'supervisor',
        'semester_id',
        'school_year_id',
        'spe_id',
        'ipcr',
        'total',
    ];
}
