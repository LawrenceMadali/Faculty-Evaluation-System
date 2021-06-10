<?php

namespace App\Imports;

use App\Models\User;
use Illuminate\Support\Collection;
use Illuminate\Support\Facades\Hash;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\Importable;
use Maatwebsite\Excel\Concerns\ToCollection;
use Maatwebsite\Excel\Concerns\SkipsFailures;
use Maatwebsite\Excel\Concerns\SkipsOnFailure;
use Maatwebsite\Excel\Concerns\WithHeadingRow;
use Maatwebsite\Excel\Concerns\WithValidation;

class UserDataImport implements
ToModel,
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
            'college_id'            => $row['college_id'] ?? null,
            'role_id'               => $row['role_id'],
            'email'                 => $row['email'],
            'password'              => Hash::make($row['password']),
        ]);

    }
}
