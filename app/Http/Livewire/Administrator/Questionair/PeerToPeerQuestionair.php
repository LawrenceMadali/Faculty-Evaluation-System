<?php

namespace App\Http\Livewire\Administrator\Questionair;

use Livewire\Component;
use App\Models\PeerQuestionairForm;
use Livewire\WithPagination;

class PeerToPeerQuestionair extends Component
{
    use WithPagination;

    public $openModal = false;
    public $viewModal = false;
    public $editModal = false;
    public $statusModal = false;

    public $currentPage = 1;
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
            'heading'       => 'Commitment',
            'subHeading'    => 'Create questionair for Commitment.'
        ],
        2 => [
            'heading'       => 'Knowledge of Subject',
            'subHeading'    => 'Create questionair for Knowledge of Subject.'
        ],
        3 => [
            'heading'       => 'Teaching for Independent Learning',
            'subHeading'    => 'Create questionair for Knowledge of Teaching for Independent Learning.'
        ],
        4 => [
            'heading'       => 'Management of Learning',
            'subHeading'    => 'Create questionair for Knowledge of Teaching for Management of Learning.'
        ],
    ];

    private $validationRules = [
        1 => [
            'A_Question_1' => 'required',
            'A_Question_2' => 'required',
            'A_Question_3' => 'required',
            'A_Question_4' => 'required',
            'A_Question_5' => 'required',
        ],
        2 => [
            'B_Question_1' => 'required',
            'B_Question_2' => 'required',
            'B_Question_3' => 'required',
            'B_Question_4' => 'required',
            'B_Question_5' => 'required',
        ],
        3 => [
            'C_Question_1' => 'required',
            'C_Question_2' => 'required',
            'C_Question_3' => 'required',
            'C_Question_4' => 'required',
            'C_Question_5' => 'required',
        ],
        4 => [
            'D_Question_1' => 'required',
            'D_Question_2' => 'required',
            'D_Question_3' => 'required',
            'D_Question_4' => 'required',
            'D_Question_5' => 'required',
            ]
        ];


    public function openCreateModal()
    {
        $this->openModal = true;
        $this->reset(
        'A_Question_1','A_Question_2','A_Question_3','A_Question_4','A_Question_5',
        'B_Question_1','B_Question_2','B_Question_3','B_Question_4','B_Question_5',
        'C_Question_1','C_Question_2','C_Question_3','C_Question_4','C_Question_5',
        'D_Question_1','D_Question_2','D_Question_3','D_Question_4','D_Question_5');
    }

    public function create()
    {
        $rules = collect($this->validationRules)->collapse()->toArray();

        $this->validate($rules);

        PeerQuestionairForm::create([
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

    public function openStatusModal($id)
    {
        $this->questionairId = $id;
        $questionairId = PeerQuestionairForm::find($this->questionairId);
        $this->is_enabled = $questionairId->is_enabled;
        $this->resetValidation();

        $this->statusModal = true;
    }
    // Enable
    public function updateEnable()
    {
        PeerQuestionairForm::find($this->questionairId)
        ->where('id', '!=', $this->questionairId)
        ->update(['is_enabled' => 0]);

        PeerQuestionairForm::find($this->questionairId)
        ->update(['is_enabled' => 1]);

        $this->statusModal = false;
        $this->emit('updated');
    }
    // Disable
    public function updateDisable()
    {
        PeerQuestionairForm::find($this->questionairId)
        ->update(['is_enabled' => 0]);

        $this->statusModal = false;
        $this->emit('updated');
    }


    public function closeModal()
    {
        $this->openModal = false;
        $this->statusModal = false;
        $this->viewModal = false;
        $this->reset();
        $this->resetValidation();
    }

    public function openViewModal($id)
    {
        $view = PeerQuestionairForm::find($id);
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
        return view('livewire.administrator.questionair.peer-to-peer-questionair',[
            'questionairs' => PeerQuestionairForm::latest()->paginate(10),
            'count'        => PeerQuestionairForm::where('is_enabled', 1 )->count(),
        ]);
    }
}
