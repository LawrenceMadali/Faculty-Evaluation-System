<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class StudentRatingForm extends Model
{
    use HasFactory;

    protected $fillable = [
        'commitment_1',
        'commitment_2',
        'commitment_3',
        'commitment_4',
        'commitment_5',

        'knowledge_of_subject_1',
        'knowledge_of_subject_2',
        'knowledge_of_subject_3',
        'knowledge_of_subject_4',
        'knowledge_of_subject_5',

        'teaching_for_independent_learning_1',
        'teaching_for_independent_learning_2',
        'teaching_for_independent_learning_3',
        'teaching_for_independent_learning_4',
        'teaching_for_independent_learning_5',

        'management_of_learning_1',
        'management_of_learning_2',
        'management_of_learning_3',
        'management_of_learning_4',
        'management_of_learning_5',

        'commitment_total',
        'knowledge_of_subject_total',
        'teaching_for_independent_learning_total',
        'management_of_learning_total',
        'total',
        'comments',
        'instructor_id',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function instructors()
    {
        return $this->belongsTo(Instructor::class, 'instructor_id');
    }
}
