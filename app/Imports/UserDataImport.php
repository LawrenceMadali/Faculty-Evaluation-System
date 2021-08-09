<?php

namespace App\Imports;

use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\Importable;
use Maatwebsite\Excel\Concerns\SkipsErrors;
use Maatwebsite\Excel\Concerns\SkipsOnError;
use Maatwebsite\Excel\Concerns\SkipsFailures;
use Maatwebsite\Excel\Concerns\SkipsOnFailure;
use Maatwebsite\Excel\Concerns\WithHeadingRow;
use Maatwebsite\Excel\Concerns\WithValidation;
use Validator;

class UserDataImport implements WithHeadingRow,
    WithValidation,
    ToModel,
    SkipsOnError,
    SkipsOnFailure
{
    use SkipsErrors;
    use Importable;
    use SkipsFailures;

    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */

    public function model(array $row)
    {
        return new User([
            'name'                  => $row['name'],
            'email'                 => $row['email'],
            'role_id'               => $row['role_id'],
            'password'              => Hash::make('password'),
            'id_number'             => $row['id_number'],
            'college_id'            => $row['college_id'] ?? null,
            'year_and_section_id'   => $row['year_and_section_id'] ?? null,
        ]);
    }

    public function rules(): array
    {
        return [
            '*.name'              => 'required|unique:users',
            '*.email'             => 'required|unique:users|email',
            '*.role_id'           => 'required',
            '*.password'          => 'required',
            '*.id_number'         => 'required|unique:users',
        ];
    }

    public function customValidationMessages()
    {
        return [
            'name.unique'       => ':input is already exist',
            'email.unique'      => ':input is already exist',
            'id_number.unique'  => ':input is already exist',
        ];
    }
}
