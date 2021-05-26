<?php

namespace App\Imports;

use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\Importable;
use Maatwebsite\Excel\Concerns\SkipsFailures;
use Maatwebsite\Excel\Concerns\SkipsOnFailure;
use Maatwebsite\Excel\Concerns\WithHeadingRow;
use Maatwebsite\Excel\Concerns\WithValidation;

class UserDataImport implements ToModel,
WithHeadingRow,
WithValidation,
SkipsOnFailure
{
    use SkipsFailures;
    use Importable;
    public function rules(): array
    {
        return [
            '*.id_number'         => 'required|unique:users',
            '*.name'              => 'required',
            '*.user_status_id'    => 'required',
            '*.role_id'           => 'required',
            '*.email'             => 'required|email|unique:users,email',
            '*.password'          => 'required',
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
            'name'                  => $row['name'],
            'year_and_section_id'   => $row['year_and_section_id'] ?? null,
            'college_id'            => $row['college_id'] ?? null,
            'course_name_id'        => $row['course_name_id'] ?? null,
            'user_status_id'        => $row['user_status_id']       == $row['user_status_id']       ? $row['user_status_id']        : null,
            'role_id'               => $row['role_id'],
            'email'                 => $row['email'],
            'password'              => Hash::make($row['password']),
        ]);

    }
}
