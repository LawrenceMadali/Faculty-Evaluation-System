<?php

namespace App\Http\Livewire\Administrator\Questionair;

use Livewire\Component;
use App\Models\Semester;
use App\Models\SchoolYear;
use App\Models\StudentQuestionairForm;

class StudentQuestionair extends Component
{
    public $openModal = false;
    public $editModal = false;
    public $warningModal = false;
    public $viewModal = false;

    public $currentPage = 1;

    public $school_year;
    public $semester;
    public $is_enabled = true;
    public $name;

    public $A_Question_1;
    public $A_Question_2;
    public $A_Question_3;
    public $A_Question_4;
    public $A_Question_5;

    public $B_Question_1;
    public $B_Question_2;
    public $B_Question_3;
    public $B_Question_4;
    public $B_Question_5;

    public $C_Question_1;
    public $C_Question_2;
    public $C_Question_3;
    public $C_Question_4;
    public $C_Question_5;

    public $D_Question_1;
    public $D_Question_2;
    public $D_Question_3;
    public $D_Question_4;
    public $D_Question_5;

    public $pages = [

        1 => [
            'heading'       => 'Date range and semester',
            'subHeading'    => 'Please choose date range and semester'
        ],
        2 => [
            'heading'       => 'Commitment',
            'subHeading'    => 'Create questionair for Commitment.'
        ],
        3 => [
            'heading'       => 'Knowledge of Subject',
            'subHeading'    => 'Create questionair for Knowledge of Subject.'
        ],
        4 => [
            'heading'       => 'Teaching for Independent Learning',
            'subHeading'    => 'Create questionair for Knowledge of Teaching for Independent Learning.'
        ],
        5 => [
            'heading'       => 'Management of Learning',
            'subHeading'    => 'Create questionair for Knowledge of Teaching for Management of Learning.'
        ],
    ];

    private $validationRules = [
        1 => [
            'school_year'=> 'required|unique:peer_questionair_forms,school_year',
            'semester'     => 'required',
        ],
        2 => [
            'A_Question_1' => 'required',
            'A_Question_2' => 'required',
            'A_Question_3' => 'required',
            'A_Question_4' => 'required',
            'A_Question_5' => 'required',
        ],
        3 => [
            'B_Question_1' => 'required',
            'B_Question_2' => 'required',
            'B_Question_3' => 'required',
            'B_Question_4' => 'required',
            'B_Question_5' => 'required',
        ],
        4 => [
            'C_Question_1' => 'required',
            'C_Question_2' => 'required',
            'C_Question_3' => 'required',
            'C_Question_4' => 'required',
            'C_Question_5' => 'required',
        ],
        5 => [
            'D_Question_1' => 'required',
            'D_Question_2' => 'required',
            'D_Question_3' => 'required',
            'D_Question_4' => 'required',
            'D_Question_5' => 'required',
            ]
        ];


    public function create()
    {
        $rules = collect($this->validationRules)->collapse()->toArray();

        $this->validate($rules);

        StudentQuestionairForm::create([
            'school_year'   => $this->school_year,
            'semester'      => $this->semester,
            'name'          => auth()->user()->name,

            'A_Question_1' => $this->A_Question_1,
            'A_Question_2' => $this->A_Question_2,
            'A_Question_3' => $this->A_Question_3,
            'A_Question_4' => $this->A_Question_4,
            'A_Question_5' => $this->A_Question_5,
            'B_Question_1' => $this->B_Question_1,
            'B_Question_2' => $this->B_Question_2,
            'B_Question_3' => $this->B_Question_3,
            'B_Question_4' => $this->B_Question_4,
            'B_Question_5' => $this->B_Question_5,
            'C_Question_1' => $this->C_Question_1,
            'C_Question_2' => $this->C_Question_2,
            'C_Question_3' => $this->C_Question_3,
            'C_Question_4' => $this->C_Question_4,
            'C_Question_5' => $this->C_Question_5,
            'D_Question_1' => $this->D_Question_1,
            'D_Question_2' => $this->D_Question_2,
            'D_Question_3' => $this->D_Question_3,
            'D_Question_4' => $this->D_Question_4,
            'D_Question_5' => $this->D_Question_5,
        ]);
        $this->reset();
        $this->emit('created');
    }

    public function updated($propertyName)
    {
        $this->validateOnly($propertyName, $this->validationRules[$this->currentPage]);
    }

    public function goToNextPage()
    {
        $this->validate($this->validationRules[$this->currentPage]);
        $this->currentPage++;
    }

    public function goToPreviousPage()
    {
        $this->currentPage--;
    }

    public $questionairId;

    public function editOpenModal($id)
    {
        $this->questionairId = $id;
        $questionairId = StudentQuestionairForm::find($this->questionairId);
        $this->is_enabled = $questionairId->is_enabled;
        $this->resetValidation();

        $this->editModal = true;
    }

    public function update()
    {
        $updateQuestionair = $this->validate([
            'is_enabled' => 'required'
            ]);
            StudentQuestionairForm::find($this->questionairId)->update($updateQuestionair);
            $this->reset();
            $this->resetValidation();
            $this->emit('updated');
    }

    public function closeModal()
    {
        $this->openModal = false;
        $this->editModal = false;
        $this->warningModal = false;
        $this->viewModal = false;
    }

    public function openViewModal($id)
    {
        $view = StudentQuestionairForm::find($id);
        $this->A_Question_1 = $view->A_Question_1;
        $this->A_Question_2 = $view->A_Question_2;
        $this->A_Question_3 = $view->A_Question_3;
        $this->A_Question_4 = $view->A_Question_4;
        $this->A_Question_5 = $view->A_Question_5;

        $this->B_Question_1 = $view->B_Question_1;
        $this->B_Question_2 = $view->B_Question_2;
        $this->B_Question_3 = $view->B_Question_3;
        $this->B_Question_4 = $view->B_Question_4;
        $this->B_Question_5 = $view->B_Question_5;

        $this->C_Question_1 = $view->C_Question_1;
        $this->C_Question_2 = $view->C_Question_2;
        $this->C_Question_3 = $view->C_Question_3;
        $this->C_Question_4 = $view->C_Question_4;
        $this->C_Question_5 = $view->C_Question_5;

        $this->D_Question_1 = $view->D_Question_1;
        $this->D_Question_2 = $view->D_Question_2;
        $this->D_Question_3 = $view->D_Question_3;
        $this->D_Question_4 = $view->D_Question_4;
        $this->D_Question_5 = $view->D_Question_5;

        $this->viewModal = true;
    }

    public function render()
    {
        return view('livewire.administrator.questionair.student-questionair', [
            'questionairs' => StudentQuestionairForm::all(),
            'schoolYears'  => SchoolYear::all(),
            'sems'         => Semester::all(),
            'count'        => StudentQuestionairForm::where('is_enabled', 1 )->count(),
        ]);
    }
}
