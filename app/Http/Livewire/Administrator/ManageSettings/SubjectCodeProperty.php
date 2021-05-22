<?php

namespace App\Http\Livewire\Administrator\ManageSettings;

use Livewire\Component;
use App\Models\CourseName;
use App\Models\SubjectCode;
use Livewire\WithPagination;

class SubjectCodeProperty extends Component
{
    use WithPagination;
    
    public $subject_code;
    public $course_name_id;
    public $createModal;
    public $editModal;

    protected $rules =[
        'subject_code'  => 'required|unique:subject_codes',
        'course_name_id'=> 'required'
    ];

    protected $messages = [
        'course_name_id.required' => 'This course field is required.'
    ];

    public function create()
    {
        $this->validate();

        SubjectCode::create([
            'subject_code'  => $this->subject_code,
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
        $this->subject_code     = $sc->subject_code;
        $this->course_name_id   = $sc->course_name_id;
        $this->resetValidation();

        $this->editModal = true;
    }

    public function update()
    {
        $scs = $this->validate([
            'subject_code'  => 'required',
            'course_name_id'=> 'required'
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
        $this->deleteModal = false;
        $this->reset();
        $this->resetValidation();
    }

    public $deleteModal = false;

    public function deleteOpenModal($id)
    {
        $this->sc = $id;
        $this->deleteModal = true;
    }

    public function delete()
    {
        SubjectCode::destroy($this->sc);
        $this->reset();
        $this->emit('deleted');
    }

    public function render()
    {
        return view('livewire.administrator.manage-settings.subject-code-property',[
            'scs'       => SubjectCode::latest('id')->paginate(5),
            'courses'   => CourseName::all(),
        ]);
    }
}
