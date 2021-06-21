<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class StudentQuestionairForm extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'semester',
        'school_year',
        'is_enabled',

        'A_Question_1',
        'A_Question_2',
        'A_Question_3',
        'A_Question_4',
        'A_Question_5',

        'B_Question_1',
        'B_Question_2',
        'B_Question_3',
        'B_Question_4',
        'B_Question_5',

        'C_Question_1',
        'C_Question_2',
        'C_Question_3',
        'C_Question_4',
        'C_Question_5',

        'D_Question_1',
        'D_Question_2',
        'D_Question_3',
        'D_Question_4',
        'D_Question_5'
    ];
}
