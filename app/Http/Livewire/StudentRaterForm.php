<?php

namespace App\Http\Livewire;

use App\Models\Sse;
use App\Models\User;
use Livewire\Component;
use App\Models\StudentRatingForm;
use Illuminate\Support\Facades\Auth;
use App\Models\StudentQuestionairForm;

class StudentRaterForm extends Component
{
    public $commitment_1;
    public $commitment_2;
    public $commitment_3;
    public $commitment_4;
    public $commitment_5;
    public $commitment_total;

    public $knowledge_of_subject_1;
    public $knowledge_of_subject_2;
    public $knowledge_of_subject_3;
    public $knowledge_of_subject_4;
    public $knowledge_of_subject_5;
    public $knowledge_of_subject_total;

    public $teaching_for_independent_learning_1;
    public $teaching_for_independent_learning_2;
    public $teaching_for_independent_learning_3;
    public $teaching_for_independent_learning_4;
    public $teaching_for_independent_learning_5;
    public $teaching_for_independent_learning_total;

    public $management_of_learning_1;
    public $management_of_learning_2;
    public $management_of_learning_3;
    public $management_of_learning_4;
    public $management_of_learning_5;
    public $management_of_learning_total;

    public $sse_id;
    public $total;
    public $is_evaluated = false;
    public $srfModal = false;

    public function submit()
    {
        $studentRaterForm = $this->validate([
            // validation error for commitment table
            'commitment_1' => 'required',
            'commitment_2' => 'required',
            'commitment_3' => 'required',
            'commitment_4' => 'required',
            'commitment_5' => 'required',
            // validation error for Knowldge of subject table
            'knowledge_of_subject_1' => 'required',
            'knowledge_of_subject_2' => 'required',
            'knowledge_of_subject_3' => 'required',
            'knowledge_of_subject_4' => 'required',
            'knowledge_of_subject_5' => 'required',

            // validation error for Teaching for Independent Learning table
            'teaching_for_independent_learning_1' => 'required',
            'teaching_for_independent_learning_2' => 'required',
            'teaching_for_independent_learning_3' => 'required',
            'teaching_for_independent_learning_4' => 'required',
            'teaching_for_independent_learning_5' => 'required',
            // validation error for Management of Learning table
            'management_of_learning_1' => 'required',
            'management_of_learning_2' => 'required',
            'management_of_learning_3' => 'required',
            'management_of_learning_4' => 'required',
            'management_of_learning_5' => 'required',
        ],

        [
           // custom validation message for commitment table
        'commitment_1.required' => 'Commitment question 1 is required ',
        'commitment_2.required' => 'Commitment question 2 is required ',
        'commitment_3.required' => 'Commitment question 3 is required ',
        'commitment_4.required' => 'Commitment question 4 is required ',
        'commitment_5.required' => 'Commitment question 5 is required ',
        // custom validation message for knowledge of subject table
        'knowledge_of_subject_1.required' => 'Knowledge of Subject question 1 is required',
        'knowledge_of_subject_2.required' => 'Knowledge of Subject question 2 is required',
        'knowledge_of_subject_3.required' => 'Knowledge of Subject question 3 is required',
        'knowledge_of_subject_4.required' => 'Knowledge of Subject question 4 is required',
        'knowledge_of_subject_5.required' => 'Knowledge of Subject question 5 is required',
        // custom validation message for teaching for independeint learning table
        'teaching_for_independent_learning_1.required' => 'Teaching for Independent Learning question 1 is required',
        'teaching_for_independent_learning_2.required' => 'Teaching for Independent Learning question 2 is required',
        'teaching_for_independent_learning_3.required' => 'Teaching for Independent Learning question 3 is required',
        'teaching_for_independent_learning_4.required' => 'Teaching for Independent Learning question 4 is required',
        'teaching_for_independent_learning_5.required' => 'Teaching for Independent Learning question 5 is required',
        // custom validation message for management of learning table
        'management_of_learning_1.required' => 'Management of Learning question 1 is required',
        'management_of_learning_2.required' => 'Management of Learning question 2 is required',
        'management_of_learning_3.required' => 'Management of Learning question 3 is required',
        'management_of_learning_4.required' => 'Management of Learning question 4 is required',
        'management_of_learning_5.required' => 'Management of Learning question 5 is required',
        ]);
        StudentRatingForm::create($studentRaterForm +
        [
            'commitment_total' =>
            $this->commitment_1 +
            $this->commitment_2 +
            $this->commitment_3 +
            $this->commitment_4 +
            $this->commitment_5,

            'knowledge_of_subject_total' =>
            $this->knowledge_of_subject_1 +
            $this->knowledge_of_subject_2 +
            $this->knowledge_of_subject_3 +
            $this->knowledge_of_subject_4 +
            $this->knowledge_of_subject_5 ,

            'teaching_for_independent_learning_total' =>
            $this->teaching_for_independent_learning_1 +
            $this->teaching_for_independent_learning_2 +
            $this->teaching_for_independent_learning_3 +
            $this->teaching_for_independent_learning_4 +
            $this->teaching_for_independent_learning_5,

            'management_of_learning_total' =>
            $this->management_of_learning_1 +
            $this->management_of_learning_2 +
            $this->management_of_learning_3 +
            $this->management_of_learning_4 +
            $this->management_of_learning_5,

            'total' =>
            $this->commitment_1 +
            $this->commitment_2 +
            $this->commitment_3 +
            $this->commitment_4 +
            $this->commitment_5 +
            $this->knowledge_of_subject_1 +
            $this->knowledge_of_subject_2 +
            $this->knowledge_of_subject_3 +
            $this->knowledge_of_subject_4 +
            $this->knowledge_of_subject_5 +
            $this->teaching_for_independent_learning_1 +
            $this->teaching_for_independent_learning_2 +
            $this->teaching_for_independent_learning_3 +
            $this->teaching_for_independent_learning_4 +
            $this->teaching_for_independent_learning_5 +
            $this->management_of_learning_1 +
            $this->management_of_learning_2 +
            $this->management_of_learning_3 +
            $this->management_of_learning_4 +
            $this->management_of_learning_5,
            'sse_id' => $this->sse_id,

    ]);


        session()->flash('message', 'Your response will be recorded.');
        $this->reset();
    }


    public function render()
    {
        $student = Auth::user()->children;
        // $student->sses();
        dd($student);
        return view('livewire.student-rater-form.student-rater-form',[
            'sse'   => Sse::count(),
            'questionairs'  => StudentQuestionairForm::all(),
            'assignInstructors' => auth()->user(),
        ]);
    }

}
