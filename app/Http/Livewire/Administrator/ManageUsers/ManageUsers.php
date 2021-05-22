<?php

namespace App\Http\Livewire\Administrator\ManageUsers;

use App\Models\User;
use App\Models\College;
use Livewire\Component;
use Livewire\WithPagination;
use Livewire\WithFileUploads;
use App\Imports\StudentDataImport;
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
    public $college;
    public $status = true;

    protected $rules = [
        'role_id'   => 'required',
        'id_number' => 'required|unique:users',
        'name'      => 'required',
        'email'     => 'required|email',
    ];

    public function create()
    {
        $users = $this->validate();

        User::create($users + [
            'password'  => bcrypt('ursbinangonanpassword'),
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
        $deanId             = User::find($this->deanId);
        $this->role_id      = $deanId->role_id;
        $this->id_number    = $deanId->id_number;
        $this->name         = $deanId->name;
        $this->email        = $deanId->email;
        $this->college      = $deanId->college;
        $this->status       = $deanId->status;
        $this->resetValidation();

        $this->editModal = true;
    }

    public function update()
    {
        $users = $this->validate([
            'role_id'   => 'required',
            'id_number' => 'required',
            'name'      => 'required',
            'email'     => 'required|email',
            'status'    => 'required',
            ]);
            User::find($this->deanId)->update($users);
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
        // dd($this->studentFile);
        $this->validate([
            'studentFile' => 'required|mimes:xlsx, xls'
        ]);

        Excel::import(new StudentDataImport, $this->studentFile);
        $this->reset();
        $this->resetValidation();
        $this->emit('import');
    }

    public function render()
    {
        return view('livewire.administrator.manage-users.manage-users', [
            'colleges'  => College::all(),
            'users'     => User::search($this->search)
            ->orderBy($this->sortField, $this->sortAsc ? 'asc' : 'desc')
            ->paginate($this->perPage),
        ]);
    }
}
