<?php

namespace App\Http\Livewire\Administrator\ManageUsers;

use App\Models\User;
use App\Models\College;
use Livewire\Component;
use App\Models\CourseName;
use App\Models\UserStatus;
use Livewire\WithPagination;
use Livewire\WithFileUploads;
use App\Models\YearAndSection;
use App\Imports\UserDataImport;
use Maatwebsite\Excel\Facades\Excel;

class ManageUsers extends Component
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

    public $role_id;
    public $id_number;
    public $name;
    public $email;
    public $college_id;
    public $course_name_id;
    public $year_and_section_id;
    public $user_status_id;

    protected $rules = [
        'role_id'       => 'required',
        'id_number'     => 'required|unique:users',
        'name'          => 'required',
        'email'         => 'required|email',
        'user_status_id'=> 'required',
    ];

    protected $messages = [
        'user_status_id.required' => 'This user status field is required',
        'role_id.required' => 'This role field is required',
    ];

    public function create()
    {
        $users = $this->validate();

        User::create($users + [
            'course_name_id'        => $this->course_name_id,
            'college_id'            => $this->college_id,
            'year_and_section_id'   => $this->year_and_section_id,
            'password'              => bcrypt('urspassword'),
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

    public $deanId;

    public function editOpenModal($id)
    {
        $this->deanId = $id;
        $deanId                     = User::find($this->deanId);
        $this->role_id              = $deanId->role_id;
        $this->id_number            = $deanId->id_number;
        $this->name                 = $deanId->name;
        $this->email                = $deanId->email;
        $this->college_id           = $deanId->college_id;
        $this->course_name_id       = $deanId->course_name_id;
        $this->year_and_section_id  = $deanId->year_and_section_id   ;
        $this->user_status_id       = $deanId->user_status_id;
        $this->resetValidation();

        $this->editModal = true;
    }

    public function update()
    {
        $users = $this->validate([
            'role_id'           => 'required',
            'id_number'         => 'required',
            'name'              => 'required',
            'email'             => 'required|email',
            'user_status_id'    => 'required',
            ]);
            User::find($this->deanId)->update($users + [
                'course_name_id'        => $this->course_name_id,
                'college_id'            => $this->college_id,
                'user_status_id'        => $this->college_id,
                'year_and_section_id'   => $this->year_and_section_id,
            ]);
            $this->reset();
            $this->resetValidation();
            $this->emit('updated');
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
        return view('livewire.administrator.manage-users.manage-users', [
            'colleges'          => College::all(),
            'courses'           => CourseName::all(),
            'yearAndSections'   => YearAndSection::all(),
            'studentStatuses'   => UserStatus::all(),
            'users'             => User::with('yearAndSections', 'colleges', 'roles', 'userStatuses', 'courses'),
            'users'             => User::search($this->search)
            ->orderBy($this->sortField, $this->sortAsc ? 'asc' : 'desc')
            ->paginate($this->perPage),
        ]);
    }
}
