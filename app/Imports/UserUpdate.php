<?php

namespace App\Imports;

use Validator;
use App\Models\User;
use Illuminate\Support\Collection;
use Illuminate\Support\Facades\Hash;
use Maatwebsite\Excel\Concerns\Importable;
use Maatwebsite\Excel\Concerns\ToCollection;

class UserUpdate implements ToCollection
{
    use Importable;
    
    /**
    * @param Collection $collection
    */
    public function collection(Collection $rows)
    {
        $rules = [
            '*.name'              => 'required',
            '*.email'             => 'required|email',
            '*.role_id'           => 'required',
            '*.password'          => 'required',
            '*.id_number'         => 'required',
        ];

        $messages = [
            '*.name.required'       => 'The row :attribute field is required.',
            '*.email.required'      => 'The row :attribute field is required.',
            '*.role_id.required'    => 'The row :attribute field is required.',
            '*.password.required'   => 'The row :attribute field is required.',
            '*.id_number.required'  => 'The row :attribute field is required.',
        ];

        Validator::make($rows->toArray(), $rules, $messages)->validate();

        foreach ($rows as $row)
        {
            User::where('id_number', $row['id_number'])
            ->update([
                'name'                  => $row['name'],
                'email'                 => $row['email'],
                'role_id'               => $row['role_id'],
                'password'              => Hash::make($row['password']),
                'id_number'             => $row['id_number'],
                'college_id'            => $row['college_id'] ?? null,
                'year_and_section_id'   => $row['year_and_section_id'] ?? null,
            ]);
        }
    }
}
