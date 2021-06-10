<?php

namespace App\Imports;

use App\Student;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\SkipsFailures;
use Maatwebsite\Excel\Concerns\SkipsOnFailure;
use Maatwebsite\Excel\Concerns\WithHeadingRow;
use Maatwebsite\Excel\Concerns\WithValidation;

class StudentImport implements ToModel,
WithValidation,
WithHeadingRow,
SkipsOnFailure
{
    use SkipsFailures;
    use Importable;
    public function rules(): array
    {
        return [
            '*.user_id'         => 'required',
            '*.name'              => 'required',
            '*.email'             => 'required|email',
            '*.id_number'         => 'required',
            '*.year_and_section_id' => 'required',
            '*.course_code_id'  => 'required',
        ];

    }
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        return new Student([
            'user_id'               => $row['user_id'] ?? null,
            'name'                  => $row['name'],
            'email'                 => $row['email'],
            'id_number'             => $row['id_number'],
            'year_and_section_id'   => $row['year_and_section_id'],
            'course_code_id'        => $row['course_code_id'],
        ]);
    }
}
