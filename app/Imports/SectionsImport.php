<?php

namespace App\Imports;

use App\Models\StudentYearSection;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithHeadingRow;
use Maatwebsite\Excel\Concerns\WithValidation;

class SectionsImport implements ToModel,
WithHeadingRow,
WithValidation
{
    public function rules(): array
    {
        return [
            'name' => 'required|unique:student_year_sections',
            'year_and_section' => 'required',
        ];
    }

    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        return new StudentYearSection([
            'name'  => $row['name'],
            'year_and_section'  => $row['year_and_section'] ?? null,
        ]);
    }
}
