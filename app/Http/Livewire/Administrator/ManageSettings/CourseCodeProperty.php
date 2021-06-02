<?php

namespace App\Http\Livewire\Administrator\ManageSettings;

use App\Models\Course;
use Livewire\Component;
use App\Models\CourseCode;
use Livewire\WithPagination;
use App\Models\YearAndSection;

class CourseCodeProperty extends Component
{
    use WithPagination;

    public $name;
    public $course_id;
    public $createModal;
    public $editModal;

    protected $rules = [
        'name'      => 'required|unique:course_codes',
        'course_id' => 'required',
    ];

    protected $messages = [
        'course_id.required' => 'The course field is required.'
    ];

    public function create()
    {
        $this->validate();

        CourseCode::create([
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

    public $CourseCodeId;

    public function editOpenModal($id)
    {
        $this->CourseCodeId = $id;
        $CourseCodeId  = CourseCode::find($this->CourseCodeId);
        $this->name     = $CourseCodeId->name;
        $this->course_id= $CourseCodeId->course_id;
        $this->resetValidation();

        $this->editModal = true;
    }

    public function update()
    {
        $validated = $this->validate([
            'name'      => 'required',
            'course_id' => 'required',
            ]);
            CourseCode::find($this->CourseCodeId)->update($validated);
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
        return view('livewire.administrator.manage-settings.course-code-property',[
            'scs'       => CourseCode::with('courses')->paginate(5),
            'courses'   => Course::all(),
        ]);
    }
}
