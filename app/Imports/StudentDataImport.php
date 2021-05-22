<?php

namespace App\Imports;

use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithHeadingRow;
use Maatwebsite\Excel\Concerns\WithValidation;

class StudentDataImport implements ToModel,
WithHeadingRow,
WithValidation
{
    public function rules(): array
    {
        return [
            'id_number' => 'required|unique:users',
            'role_id'   => 'required',
            'name'      => 'required',
            'email'     => 'required|email',
            'password'  => 'required',
        ];
    }
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        return new User([
            'id_number' => $row['id_number'],
            'role_id'   => $row['role_id'],
            'name'      => $row['name'],
            'email'     => $row['email'],
            'college'   => $row['college'] ?? null,
            'password'  => Hash::make($row['password'])
        ]);
    }
}
