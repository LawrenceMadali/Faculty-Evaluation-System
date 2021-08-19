<?php

namespace App\Imports;

use Validator;
use App\Models\User;
use Illuminate\Support\Collection;
use Illuminate\Support\Facades\Hash;
use Maatwebsite\Excel\Concerns\Importable;
use Maatwebsite\Excel\Concerns\ToCollection;
use Maatwebsite\Excel\Concerns\WithHeadingRow;

class UserUpdate implements ToCollection, WithHeadingRow
{
    use Importable;

    /**
    * @param Collection $collection
    */
    public function collection(Collection $rows)
    {
        foreach ($rows as $row)
        {
            User::where('id_number', $row['id_number'])
            ->update([
                'name'                  => $row['name'],
                'email'                 => $row['email'],
                'role_id'               => $row['role_id'],
                'password'              => Hash::make('password'),
                'id_number'             => $row['id_number'],
                'college_id'            => $row['college_id'] ?? null,
                'year_and_section_id'   => $row['year_and_section_id'] ?? null,
            ]);

            if ($row['role_id'] == 4) {
                Instructor::where('id_number', $row['id_number'])
                ->update([
                    'name'                  => $row['name'],
                    'id_number'             => $row['id_number'],
                    'college_id'            => $row['college_id'] ?? null,
                ]);
            }
        }
    }
}
