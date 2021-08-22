<?php

namespace App\Imports;

use App\Models\Instructor;
use Validator;
use App\Models\User;
use Illuminate\Support\Collection;
use Illuminate\Support\Facades\Hash;
use Maatwebsite\Excel\Concerns\Importable;
use Maatwebsite\Excel\Concerns\SkipsErrors;
use Maatwebsite\Excel\Concerns\SkipsOnError;
use Maatwebsite\Excel\Concerns\ToCollection;
use Maatwebsite\Excel\Concerns\SkipsFailures;
use Maatwebsite\Excel\Concerns\SkipsOnFailure;
use Maatwebsite\Excel\Concerns\WithHeadingRow;

class UserDataImport implements WithHeadingRow,
    ToCollection,
    SkipsOnError,
    SkipsOnFailure
{
    use SkipsErrors;
    use Importable;
    use SkipsFailures;
    use Importable;

    public function collection(Collection $rows)
    {
        $rules = [
            '*.name'              => 'required|unique:users',
            '*.email'             => 'required|unique:users|email',
            '*.role_id'           => 'required',
            '*.password'          => 'required',
            '*.id_number'         => 'required|unique:users',
        ];

        $messages = [
            '*.name.required' => 'The row :attribute field is required.',
            '*.email.required' => 'The row :attribute field is required.',
            '*.role_id.required' => 'The row :attribute field is required.',
            '*.password.required' => 'The row :attribute field is required.',
            '*.id_number.required' => 'The row :attribute field is required.',

            '*.name.unique' => ':input is already exist.',
            '*.email.unique' => ':input is already exist.',
            '*.role_id.unique' => ':input is already exist.',
            '*.password.unique' => ':input is already exist.',
            '*.id_number.unique' => ':input is already exist.',
        ];

        Validator::make($rows->toArray(), $rules, $messages)->validate();

        foreach ($rows as $row)
        {
            User::where('id_number', $row['id_number'])
            ->create([
                'id_number'             => $row['id_number'],
                'name'                  => $row['name'],
                'email'                 => $row['email'],
                'role_id'               => $row['role_id'],
                'password'              => Hash::make($row['password']),
                'college_id'            => $row['college_id'] ?? null,
                'year_and_section_id'   => $row['year_and_section_id'] ?? null,
            ]);

            if ($row['role_id'] == 4) {
                Instructor::where('id_number', $row['id_number'])
                ->create([
                    'name'                  => $row['name'],
                    'id_number'             => $row['id_number'],
                    'college_id'            => $row['college_id'] ?? null,
                ]);
            }

        }
    }
}
