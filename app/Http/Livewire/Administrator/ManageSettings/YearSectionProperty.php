<?php

namespace App\Http\Livewire\Administrator\ManageSettings;

use App\Models\User;
use Livewire\Component;
use App\Models\Course;
use Livewire\WithPagination;
use App\Models\YearAndSection;

class YearSectionProperty extends Component
{
    use WithPagination;

    public $name;
    public $user_id;
    public $createModal = false;
    public $editModal = false;

    protected $rules = [
        'name'      => 'required',
        'user_id'   => 'required',
    ];

    protected $messages = [
        'user_id.required' => 'The instructor field is required',
    ];

    public function create()
    {
        $this->validate();

        YearAndSection::create([
            'name'      => $this->name,
            'user_id'   => $this->user_id,
        ]);
        $this->reset();
        $this->resetValidation();
        $this->emit('added');
    }

    public function createOpenModal()
    {
        $this->reset();
        $this->resetValidation();
        $this->createModal = true;
    }

    public $yearAndSectionId;

    public function editOpenModal($id)
    {
        $this->yearAndSectionId = $id;
        $yearAndSectionId       = YearAndSection::find($this->yearAndSectionId);
        $this->name             = $yearAndSectionId->name;
        $this->user_id          = $yearAndSectionId->user_id;
        $this->resetValidation();

        $this->editModal = true;
    }

    public function update()
    {
        $yearNsection = $this->validate([
            'name'          => 'required',
            'user_id'=> 'required'
        ]);
        YearAndSection::find($this->yearAndSectionId)->update($yearNsection);
        $this->reset();
        $this->resetValidation();
        $this->emit('updated');
    }

    public function closeModal()
    {
        $this->editModal = false;
        $this->createModal = false;
        $this->reset();
        $this->resetValidation();
    }


    public function render()
    {
        return view('livewire.administrator.manage-settings.year-section-property', [
            'yrSecs'=> YearAndSection::with('users')->paginate(5),
            'instructors' => User::where('role_id', 4)->get(),
        ]);
    }
}
