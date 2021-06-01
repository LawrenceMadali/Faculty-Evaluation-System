<?php

namespace App\Http\Livewire\Administrator\ManageUsers;

use App\Models\User;
use App\Models\Course;
use App\Models\College;
use Livewire\Component;
use App\Models\UserStatus;
use App\Models\SubjectCode;
use Livewire\WithPagination;
use Livewire\WithFileUploads;
use App\Models\YearAndSection;
use App\Imports\UserDataImport;
use Maatwebsite\Excel\Facades\Excel;

class ManageAccounts extends Component
{
    use WithPagination;
    use WithFileUploads;

    public $search = '';
    public $perPage = 5;
    public $sortField = 'created_at';
    public $sortAsc = true;

    public $createModal = false;
    public $editModal = false;
    public $importModal = false;
    public $viewModal = false;

    public $role_id;
    public $user_id;
    public $id_number;
    public $name;
    public $email;
    public $college_id;
    public $course_id;
    public $year_and_section_id;
    public $status = true;

    protected $messages = [
        'role_id.required' => 'This role field is required',
    ];

    public $college = null;
    public $courses = null;

    public function updatedCollege($college_id)
    {
        $this->courses = Course::where('college_id', $college_id)->get();
    }

    public function create()
    {
        if (!in_array($this->role_id, [3,6] )) {
            $this->validate([
                'role_id'       => 'required',
                'id_number'     => 'required|unique:users|min:10',
                'name'          => 'required',
                'email'         => 'required|email',
                'college_id'    => 'required',
            ]);
        } else {
            $this->validate([
                'role_id'       => 'required',
                'id_number'     => 'required|unique:users|min:10',
                'name'          => 'required',
                'email'         => 'required|email',
            ]);
        }

        User::create([
            'role_id'       => $this->role_id,
            'id_number'     => $this->id_number,
            'name'          => $this->name,
            'email'         => $this->email,
            'college_id'    => $this->college_id,
            'password'      => bcrypt('urspassword'),
        ]);
        $this->reset();
        $this->resetValidation();
        $this->emit('created');
    }


    public function createOpenModal()
    {
        $this->reset();
        $this->resetValidation();
        $this->createModal = true;
    }

    public $accId;
    public $user;

    public function editOpenModal($id)
    {
        $this->accId = $id;
        $accId                     = User::find($this->accId);
        $this->role_id              = $accId->role_id;
        $this->id_number            = $accId->id_number;
        $this->name                 = $accId->name;
        $this->email                = $accId->email;
        $this->status               = $accId->status;
        $this->user_id              = $accId->user_id;
        $this->college_id           = $accId->college_id;
        $this->resetValidation();

        $this->editModal = true;
        $this->user = $accId;
    }


    public function update()
    {
        if (!in_array($this->role_id, [3,6] )) {
            $this->validate([
                'role_id'       => 'required',
                'id_number'     => 'required|unique:users,id_number,'.$this->user->id,
                'name'          => 'required',
                'email'         => 'required|email|unique:users,email,'.$this->user->id,
                'college_id'    => 'required',
            ]);
        } else {
            $this->validate([
                'role_id'       => 'required',
                'id_number'     => 'required',
                'name'          => 'required',
                'email'         => 'required|email|unique:users',
            ]);
        }
            User::find($this->accId)->update([
                'role_id'       => $this->role_id,
                'id_number'     => $this->id_number,
                'name'          => $this->name,
                'email'         => $this->email,
                'status'        => $this->status,
                'college_id'    => $this->college_id,
            ]);
            $this->resetValidation();
            $this->emit('updated');
    }

    public function createEvaluationDetails()
    {
    }

    public function closeModal()
    {
        $this->createModal = false;
        $this->editModal = false;
        $this->importModal = false;
        $this->reset();
        $this->resetValidation();
    }

    public $studentFile;

    public function importStudent()
    {
        $this->validate([
            'studentFile' => 'required|mimes:xlsx, xls'
        ]);

        // $import = Excel::import(new UserDataImport, $this->studentFile);
        $import = new UserDataImport();
        $import->import($this->studentFile);
        $import->failures();
        if ($import->failures()->isNotEmpty()) {
            session()->flash('errorMessage', $import->failures());
        }
        else{
            $this->reset();
        }

        $this->resetValidation();
        $this->emit('import');
    }

    public function render()
    {
        return view('livewire.administrator.manage-users.manage-accounts', [
            'colleges'          => College::all(),
            'courses'           => Course::all(),
            'subjectCodes'      => SubjectCode::all(),
            'yearAndSections'   => YearAndSection::all(),
            'users'             => User::with('yearAndSections', 'colleges', 'roles', 'courses')
            ->where('role_id', 5),
            'users'             => User::search($this->search)
            ->orderBy($this->sortField, $this->sortAsc ? 'asc' : 'desc')
            ->paginate($this->perPage),
        ]);
    }
}
