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
            'id_number'     => 'required|unique:users',
            'role_id'       => 'required',
            'first_name'    => 'required',
            'last_name'     => 'required',
            'email'         => 'required|email',
            'password'      => 'required',
            'year_and_section_id'  => 'required',
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
            'id_number'             => $row['id_number'],
            'role_id'               => $row['role_id'],
            'first_name'            => $row['first_name'],
            'last_name'             => $row['last_name'],
            'middle_initial'        => $row['middle_initial'],
            'email'                 => $row['email'],
            'college'               => $row['college'] ?? null,
            'year_and_section_id'   => $row['year_and_section_id'],
            'password'              => Hash::make($row['password']),
        ]);
    }
}
