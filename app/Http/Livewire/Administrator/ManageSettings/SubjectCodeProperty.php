<?php

namespace App\Http\Livewire\Administrator\ManageSettings;

use Livewire\Component;
use App\Models\CourseName;
use App\Models\SubjectCode;
use Livewire\WithPagination;

class SubjectCodeProperty extends Component
{
    use WithPagination;

    public $name;
    public $course_name_id;
    public $createModal;
    public $editModal;

    protected $rules =[
        'name'      => 'required|unique:subject_codes',
        'course_name_id'    => 'required',
    ];

    protected $messeges = [
        'course_name_id.required' => 'The course field is required.'
    ];

    public function create()
    {
        $this->validate();

        SubjectCode::create([
            'name'          => $this->name,
            'course_name_id'=> $this->course_name_id,
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
        $this->name             = $sc->name;
        $this->course_name_id   = $sc->course_name_id;
        $this->resetValidation();

        $this->editModal = true;
    }

    public function update()
    {
        $scs = $this->validate([
            'name'  => 'required',
            'course_name_id'=> 'required',
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
            'scs'       => SubjectCode::paginate(5),
            'courses'   => CourseName::all(),
        ]);
    }
}
