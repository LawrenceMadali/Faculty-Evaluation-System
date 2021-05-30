<?php

namespace App\Http\Livewire\Administrator\ManageSettings;

use App\Models\Course;
use Livewire\Component;
use App\Models\SubjectCode;
use Livewire\WithPagination;
use App\Models\YearAndSection;

class SubjectCodeProperty extends Component
{
    use WithPagination;

    public $name;
    public $course_id;
    public $createModal;
    public $editModal;

    protected $rules = [
        'name'      => 'required|unique:subject_codes',
        'course_id' => 'required',
    ];

    protected $messages = [
        'course_id.required' => 'The course field is required.'
    ];

    public function create()
    {
        $this->validate();

        SubjectCode::create([
            'name'      => $this->name,
            'course_id' => $this->course_id,
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

    public $subjectCodeId;

    public function editOpenModal($id)
    {
        $this->subjectCodeId = $id;
        $subjectCodeId  = SubjectCode::find($this->subjectCodeId);
        $this->name     = $subjectCodeId->name;
        $this->course_id= $subjectCodeId->course_id;
        $this->resetValidation();

        $this->editModal = true;
    }

    public function update()
    {
        $validated = $this->validate([
            'name'      => 'required',
            'course_id' => 'required',
            ]);
            SubjectCode::find($this->subjectCodeId)->update($validated);
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
            'scs'       => SubjectCode::with('courses')->paginate(5),
            'courses'   => Course::all(),
        ]);
    }
}
