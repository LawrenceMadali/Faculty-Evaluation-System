<?php

namespace App\Http\Livewire\Administrator\ManageSettings;

use App\Models\User;
use Livewire\Component;
use App\Models\YearAndSection;

class YearSectionProperty extends Component
{
    public $year_and_section;
    public $createModal = false;
    public $editModal = false;
    public $user_id;

    protected $rules = [
        'year_and_section'  => 'required',
        'user_id'    => 'required'
    ];

    public function create()
    {
        $this->validate();

        YearAndSection::create([
            'year_and_section'  => $this->year_and_section,
            'user_id'    => $this->user_id
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

    public $yrSec;

    public function editOpenModal($id)
    {
        $this->yrSec = $id;
        $yrSec = YearAndSection::find($this->yrSec);
        $this->year_and_section = $yrSec->year_and_section;
        $this->resetValidation();

        $this->editModal = true;
    }

    public function update()
    {
        $yearNsection = $this->validate([
            'year_and_section' => 'required'
        ]);
        YearAndSection::find($this->yrSec)->update($yearNsection);
        $this->reset();
        $this->resetValidation();
        $this->emit('updated');
    }

    public function closeModal()
    {
        $this->editModal = false;
        $this->createModal = false;
        $this->deleteModal = false;
        $this->reset();
        $this->resetValidation();
    }

    public $deleteModal = false;

    public function deleteOpenModal($id)
    {
        $this->yrSec = $id;
        $this->deleteModal = true;
    }

    public function delete()
    {
        YearAndSection::destroy($this->yrSec);
        $this->reset();
        $this->emit('deleted');
    }

    public function render()
    {
        return view('livewire.administrator.manage-settings.year-section-property', [
            'yrSecs'=> YearAndSection::with('users')
            ->latest('id')
            ->paginate(5),
            'instructors' => User::where('role_id', 4)->get(),
        ]);
    }
}
