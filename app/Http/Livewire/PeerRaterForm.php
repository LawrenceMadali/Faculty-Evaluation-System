<?php

namespace App\Http\Livewire;

use App\Models\Spe;
use Livewire\Component;
use App\Models\PeerRatingForm;
use App\Models\PeerQuestionairForm;
use Illuminate\Support\Facades\Auth;

class PeerRaterForm extends Component
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
    public $scale;
    public $prfModal = false;
    public $id_number;
    public $comments;
    public $spe_id;
    public $evaluator;
    public $semester_id;
    public $school_year_id;

    protected $rules = [
        'spe_id' => 'required|unique:peer_rating_forms',
        // validation for commitment
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

    protected $messages =[
        // custom validation message for commitment table
        'commitment_1.required' => 'The commitment question number 1 is required ',
        'commitment_2.required' => 'The commitment question number 2 is required ',
        'commitment_3.required' => 'The commitment question number 3 is required ',
        'commitment_4.required' => 'The commitment question number 4 is required ',
        'commitment_5.required' => 'The commitment question number 5 is required ',
        // custom validation message for knowledge of subject table
        'knowledge_of_subject_1.required' => 'The knowledge of Subject question number 1 is required',
        'knowledge_of_subject_2.required' => 'The knowledge of Subject question number 2 is required',
        'knowledge_of_subject_3.required' => 'The knowledge of Subject question number 3 is required',
        'knowledge_of_subject_4.required' => 'The knowledge of Subject question number 4 is required',
        'knowledge_of_subject_5.required' => 'The knowledge of Subject question number 5 is required',
        // custom validation message for teaching for independeint learning table
        'teaching_for_independent_learning_1.required' => 'The teaching for Independent Learning question number 1 is required',
        'teaching_for_independent_learning_2.required' => 'The teaching for Independent Learning question number 2 is required',
        'teaching_for_independent_learning_3.required' => 'The teaching for Independent Learning question number 3 is required',
        'teaching_for_independent_learning_4.required' => 'The teaching for Independent Learning question number 4 is required',
        'teaching_for_independent_learning_5.required' => 'The teaching for Independent Learning question number 5 is required',
        // custom validation message for management of learning table
        'management_of_learning_1.required' => 'The management of Learning question number 1 is required',
        'management_of_learning_2.required' => 'The management of Learning question number 2 is required',
        'management_of_learning_3.required' => 'The management of Learning question number 3 is required',
        'management_of_learning_4.required' => 'The management of Learning question number 4 is required',
        'management_of_learning_5.required' => 'The management of Learning question number 5 is required',
        'unique' => 'The selected faculty has already evaluated.',

        'spe_id.required' => 'The instructor field is required'
    ];

    public function submit()
    {
        $peerRaterForm = $this->validate();

        PeerRatingForm::create($peerRaterForm +
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
            'spe_id'        => $this->spe_id,
            'comments'      => $this->comments,
            'evaluator'     => Auth::user()->name,
            'semester_id'   => $this->semester_id,
            'school_year_id'=> $this->school_year_id
        ]);

        session()->flash('message', 'Thank you! Your response will be recorded.');
        $this->reset();
    }

    public function updatedSpeId()
    {
        $speId = Spe::find($this->spe_id);
        $this->semester_id = $speId->semester_id ?? null;
        $this->school_year_id = $speId->school_year_id ?? null;
        $this->validate([
            'spe_id' => 'required|unique:peer_rating_forms,spe_id,NULL,id'
        ]);
    }

    public function render()
    {
        return view('livewire.peer-rater-form.peer-rater-form',[
            'questionairs'  => PeerQuestionairForm::all(),
            'assignInstructors' => Auth::user()->spes,
        ]);
    }
}
