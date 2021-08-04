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

    public $total;
    public $name;
    public $scale;
    public $sse_id;
    public $id_number;
    public $comments;
    public $semester_id;
    public $school_year_id;
    public $evaluator_number;
    public $srfModal = false;

    protected $rules = [
        // 'sse_id' => 'required|unique:student_rating_forms,sse_id,NULL,id,evaluator_number,'.Auth::user()->id_number.',semester_id,'.$this->semester_id.',school_year_id,'.$this->school_year_id,
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
    ];

    protected $messages = [
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
           'unique' => 'The selected faculty has already evaluated.',

            'spe_id.required' => 'The instructor field is required'
    ];

    public function submit()
    {
        $validatedData = $this->validate();

        StudentRatingForm::create($validatedData +
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

            'scale' =>
            ($this->commitment_1 +
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
            $this->management_of_learning_5) / 20,
            'name'              => $this->name,
            'sse_id'            => $this->sse_id,
            'comments'          => $this->comments,
            'id_number'         => $this->id_number,
            'semester_id'       => $this->semester_id,
            'school_year_id'    => $this->school_year_id,
            'evaluator_number'  => Auth::user()->id_number,
    ]);


        session()->flash('message', 'Your response will be recorded.');
        $this->reset();
    }

    public function updatedSseId()
    {
        $sseId = Sse::find($this->sse_id);
        $this->name             = $sseId->name ?? null;
        $this->id_number        = $sseId->id_number ?? null;
        $this->semester_id      = $sseId->semester_id ?? null;
        $this->school_year_id   = $sseId->school_year_id ?? null;
        $this->validate([
            'sse_id' => 'required|unique:student_rating_forms,sse_id,NULL,id,evaluator_number,'.Auth::user()->id_number.',semester_id,'.$this->semester_id.',school_year_id,'.$this->school_year_id,
        ]);
    }

    public function render()
    {
        return view('livewire.student-rater-form.student-rater-form',[
            'questionairs'  => StudentQuestionairForm::all(),
            'assignStudents' => Auth::user()->sses,
        ]);
    }

}
