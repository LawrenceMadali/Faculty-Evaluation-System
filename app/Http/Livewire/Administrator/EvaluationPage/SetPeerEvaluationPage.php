<?php

namespace App\Http\Livewire\Administrator\EvaluationPage;

use App\Models\Spe;
use App\Models\User;
use Livewire\Component;
use App\Models\Semester;
use App\Models\SchoolYear;
use Livewire\WithPagination;
use Livewire\WithFileUploads;

use function GuzzleHttp\Promise\all;

class SetPeerEvaluationPage extends Component
{
    use WithPagination;

    public $openModal = false;
    public $editModal = false;
    public $faculty;
    public $evaluatee;

    public function updatedSchoolYear()
    {
        $this->reset('semester', 'faculty', 'selectedInstructor');
    }

    public function updatedSemester()
    {
        $this->reset('faculty', 'selectedInstructor');
    }

    public function closeModal()
    {
        $this->openModal = false;
        $this->reset();
        $this->resetValidation();
    }

    public function resetFields()
    {
        $this->reset([
        'selectedInstructor', 'select100', 'select80', 'select60',
        'select40', 'select20', 'select10', 'school_year', 'semester'
        ,'faculty' ,'evaluatee']);
    }

    public function openCreateModal()
    {
        $this->openModal = true;
        $this->resetFields();
        $this->resetValidation();
    }

    // Select all or select 100%
    public $selectedInstructor = [];
    public $select100 = false;

    public function updatedSelect100($value)
    {
        if ($value) {
            $this->selectedInstructor = User::where('role_id', 4)
            ->where('id', '!=', $this->faculty)
            ->pluck('id')
            ->map(fn($id) => (string)$id)->toArray();

            $this->select90 = false;
            $this->select80 = false;
            $this->select70 = false;
            $this->select60 = false;
            $this->select50 = false;
            $this->select40 = false;
            $this->select30 = false;
            $this->select20 = false;
            $this->select10 = false;
        } else {
            $this->selectedInstructor = [];
        }
    }

    // Select all or select 90%
    public $select90 = false;

    public function updatedSelect90($value)
    {
        if ($value) {
            $instructorCount = User::where('role_id', 4)
            ->where('id', '!=', $this->faculty)
            ->count();
            $percentage = .90 * $instructorCount;

            $this->selectedInstructor = User::where('role_id', 4)
            ->where('id', '!=', $this->faculty)
            ->inRandomOrder()
            ->take($percentage)
            ->pluck('id')
            ->map(fn($id) => (string)$id)->toArray();

            $this->select100 = false;

            $this->select80 = false;
            $this->select70 = false;
            $this->select60 = false;
            $this->select50 = false;
            $this->select40 = false;
            $this->select30 = false;
            $this->select20 = false;
            $this->select10 = false;
        } else {
            $this->selectedInstructor = [];
        }
    }

    // Select all or select 80%
    public $select80 = false;

    public function updatedSelect80($value)
    {
        if ($value) {
            $instructorCount = User::where('role_id', 4)
            ->where('id', '!=', $this->faculty)
            ->count();
            $percentage = .80 * $instructorCount;

            $this->selectedInstructor = User::where('role_id', 4)
            ->where('id', '!=', $this->faculty)
            ->inRandomOrder()
            ->take($percentage)
            ->pluck('id')
            ->map(fn($id) => (string)$id)->toArray();

            $this->select100 = false;
            $this->select90 = false;

            $this->select70 = false;
            $this->select60 = false;
            $this->select50 = false;
            $this->select40 = false;
            $this->select30 = false;
            $this->select20 = false;
            $this->select10 = false;
        } else {
            $this->selectedInstructor = [];
        }
    }

    // Select all or select 70%
    public $select70 = false;

    public function updatedSelect70($value)
    {
        if ($value) {
            $instructorCount = User::where('role_id', 4)
            ->where('id', '!=', $this->faculty)
            ->count();
            $percentage = .70 * $instructorCount;

            $this->selectedInstructor = User::where('role_id', 4)
            ->where('id', '!=', $this->faculty)
            ->inRandomOrder()
            ->take($percentage)
            ->pluck('id')
            ->map(fn($id) => (string)$id)->toArray();

            $this->select100 = false;
            $this->select90 = false;
            $this->select80 = false;

            $this->select60 = false;
            $this->select50 = false;
            $this->select40 = false;
            $this->select30 = false;
            $this->select20 = false;
            $this->select10 = false;
        } else {
            $this->selectedInstructor = [];
        }
    }

    // Select all or select 60%
    public $select60 = false;

    public function updatedSelect60($value)
    {
        if ($value) {
            $instructorCount = User::where('role_id', 4)
            ->where('id', '!=', $this->faculty)
            ->count();
            $percentage = .60 * $instructorCount;

            $this->selectedInstructor = User::where('role_id', 4)
            ->where('id', '!=', $this->faculty)
            ->inRandomOrder()
            ->take($percentage)
            ->pluck('id')
            ->map(fn($id) => (string)$id)->toArray();

            $this->select100 = false;
            $this->select90 = false;
            $this->select80 = false;
            $this->select70 = false;

            $this->select50 = false;
            $this->select40 = false;
            $this->select30 = false;
            $this->select20 = false;
            $this->select10 = false;
        } else {
            $this->selectedInstructor = [];
        }
    }

    // Select all or select 50%
    public $select50 = false;

    public function updatedSelect50($value)
    {
        if ($value) {
            $instructorCount = User::where('role_id', 4)
            ->where('id', '!=', $this->faculty)
            ->count();
            $percentage = .50 * $instructorCount;

            $this->selectedInstructor = User::where('role_id', 4)
            ->where('id', '!=', $this->faculty)
            ->inRandomOrder()
            ->take($percentage)
            ->pluck('id')
            ->map(fn($id) => (string)$id)->toArray();

            $this->select100 = false;
            $this->select90 = false;
            $this->select80 = false;
            $this->select70 = false;
            $this->select60 = false;

            $this->select40 = false;
            $this->select30 = false;
            $this->select20 = false;
            $this->select10 = false;
        } else {
            $this->selectedInstructor = [];
        }
    }

    // Select all or select 40%
    public $select40 = false;

    public function updatedSelect40($value)
    {
        if ($value) {
            $instructorCount = User::where('role_id', 4)
            ->where('id', '!=', $this->faculty)
            ->count();
            $percentage = .40 * $instructorCount;

            $this->selectedInstructor = User::where('role_id', 4)
            ->where('id', '!=', $this->faculty)
            ->inRandomOrder()
            ->take($percentage)
            ->pluck('id')
            ->map(fn($id) => (string)$id)->toArray();

            $this->select100 = false;
            $this->select90 = false;
            $this->select80 = false;
            $this->select70 = false;
            $this->select60 = false;
            $this->select50 = false;

            $this->select30 = false;
            $this->select20 = false;
            $this->select10 = false;
        } else {
            $this->selectedInstructor = [];
        }
    }

    // Select all or select 30%
    public $select30 = false;

    public function updatedSelect30($value)
    {
        if ($value) {
            $instructorCount = User::where('role_id', 4)
            ->where('id', '!=', $this->faculty)
            ->count();
            $percentage = .30 * $instructorCount;

            $this->selectedInstructor = User::where('role_id', 4)
            ->where('id', '!=', $this->faculty)
            ->inRandomOrder()
            ->take($percentage)
            ->pluck('id')
            ->map(fn($id) => (string)$id)->toArray();

            $this->select100 = false;
            $this->select90 = false;
            $this->select80 = false;
            $this->select70 = false;
            $this->select60 = false;
            $this->select50 = false;
            $this->select40 = false;

            $this->select20 = false;
            $this->select10 = false;
        } else {
            $this->selectedInstructor = [];
        }
    }

    // Select all or select 20%
    public $select20 = false;

    public function updatedSelect20($value)
    {
        if ($value) {
            $instructorCount = User::where('role_id', 4)
            ->where('id', '!=', $this->faculty)
            ->count();
            $percentage = .20 * $instructorCount;

            $this->selectedInstructor = User::where('role_id', 4)
            ->where('id', '!=', $this->faculty)
            ->inRandomOrder()
            ->take($percentage)
            ->pluck('id')
            ->map(fn($id) => (string)$id)->toArray();

            $this->select100 = false;
            $this->select90 = false;
            $this->select80 = false;
            $this->select70 = false;
            $this->select60 = false;
            $this->select50 = false;
            $this->select40 = false;
            $this->select30 = false;

            $this->select10 = false;
        } else {
            $this->selectedInstructor = [];
        }
    }
    // Select all or select 10%
    public $select10 = false;

    public function updatedSelect10($value)
    {

        if ($value) {
            $instructorCount = User::where('role_id', 4)
            ->where('id', '!=', $this->faculty)
            ->count();
            $percentage = $instructorCount * .10;

            $this->selectedInstructor = User::where('role_id', 4)
            ->where('id', '!=', $this->faculty)
            ->inRandomOrder()
            ->take($percentage)
            ->pluck('id')
            ->map(fn($id) => (string)$id)->toArray();

            $this->select100 = false;
            $this->select90 = false;
            $this->select80 = false;
            $this->select70 = false;
            $this->select60 = false;
            $this->select50 = false;
            $this->select40 = false;
            $this->select30 = false;
            $this->select20 = false;

        } else {
            $this->selectedInstructor = [];
        }
    }

    public function updatedselectedInstructor()
    {
        $this->resetSelect();
    }

    public function resetSelect()
    {
        $this->select100 = false;
        $this->select90 = false;
        $this->select80 = false;
        $this->select70 = false;
        $this->select60 = false;
        $this->select50 = false;
        $this->select40 = false;
        $this->select30 = false;
        $this->select20 = false;
        $this->select10 = false;
    }

    public $name;
    public $id_number;
    public $college_id;
    public $school_year;
    public $semester;
    public $year_and_section;

    public function create()
    {
        $this->validate([
            'selectedInstructor' => 'required',
            'school_year'        => 'required|unique:spes,school_year_id,NULL,id,user_id,'.$this->faculty.',semester_id,'.$this->semester,
            'semester'           => 'required|unique:spes,semester_id,NULL,id,user_id,'.$this->faculty.',school_year_id,'.$this->school_year,
            'faculty'            => 'required|unique:spes,user_id,NULL,id,school_year_id,'.$this->school_year.',semester_id,'.$this->semester,
        ],[
            'selectedInstructor.required' => 'The instructor checkbox field is required.',
            'faculty.required' => 'The instructor field is required.',
        ]);

        $evaluator = Spe::create([
            'name'              => $this->name,
            'user_id'           => $this->faculty,
            'id_number'         => $this->id_number,
            'evaluatee'         => count($this->selectedInstructor),
            'college_id'        => $this->college_id,
            'semester_id'       => $this->semester,
            'school_year_id'    => $this->school_year,
        ]);
        $this->emit('created');
        $evaluator->users()->sync($this->selectedInstructor);
        $this->openModal = false;
        $this->reset();
        $this->resetValidation();
    }

    public function updatedFaculty()
    {
        $this->resetSelect();
        $this->selectedInstructor = [];

        $name = User::find($this->faculty);
        $this->name         = $name->name ?? null;
        $this->id_number    = $name->id_number ?? null;
        $this->college_id   = $name->college_id ?? null;
    }

    public function openEditModal()
    {
        $this->editModal = true;
    }

    public function updateSelected()
    {
        Spe::where('is_active', 1)->update([
            'is_active' => 0,
        ]);
        $this->reset();
        $this->emit('updated');
    }

    public $is_active = false;

    public function render()
    {
        if (in_array(!auth()->user()->role_id, [1,3])) {
            $instructors = User::where([
                'college_id' => auth()->user()->college_id,
                'role_id' => 4])
            ->get() ?? null;
        } else {
            $instructors = User::where('role_id', 4)
            ->get();
        }

        return view('livewire.administrator.evaluation-page.set-peer-evaluation-page', compact(['instructors']),
        [
            'evaluatees'        => User::where('role_id', 4)->get(),
            'instructorCount'   => User::where('role_id', 4)
                                ->where('id', '!=', $this->faculty)
                                ->count(),
            'sems'              => Semester::all(),
            'schoolYears'       => SchoolYear::all(),
            'spes'              => Spe::with('schoolYears', 'instructors', 'semesters',
                                'courses', 'yearSections', 'CourseCodes')
                                ->latest('id')
                                ->paginate(5),
            'activeCount'       =>Spe::where('is_active', 1)->count(),
            ]);
    }
}
