<?php

namespace App\Http\Livewire\Administrator\ManageSettings;

use Livewire\Component;
use App\Models\SubjectCode;
use Livewire\WithPagination;
use App\Models\YearAndSection;

class SubjectCodeProperty extends Component
{
    use WithPagination;

    public $name;
    public $year_and_section_id;
    public $createModal;
    public $editModal;

    protected $rules =[
        'name'                  => 'required|unique:subject_codes',
        'year_and_section_id'   => 'required',
    ];

    protected $messeges = [
        'year_and_section_id.required' => 'This year and section field is required.'
    ];

    public function create()
    {
        $this->validate();

        SubjectCode::create([
            'name'                  => $this->name,
            'year_and_section_id'   => $this->year_and_section_id,
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

    public $sc;

    public function editOpenModal($id)
    {
        $this->sc = $id;
        $sc = SubjectCode::find($this->sc);
        $this->name                 = $sc->name;
        $this->year_and_section_id  = $sc->year_and_section_id;
        $this->resetValidation();

        $this->editModal = true;
    }

    public function update()
    {
        $scs = $this->validate([
            'name'                  => 'required',
            'year_and_section_id'   => 'required',
            ]);
            SubjectCode::find($this->sc)->update($scs);
            $this->reset();
            $this->resetValidation();
            $this->emit('updated');
    }

    public function closeModal()
    {
        $this->createModal = false;
        $this->editModal = false;
        $this->reset();
        $this->resetValidation();
    }

    public function render()
    {
        return view('livewire.administrator.manage-settings.subject-code-property',[
            'scs'               => SubjectCode::with('yearAndSections')->paginate(5),
            'yearAndSections'   => YearAndSection::all(),
        ]);
    }
}
