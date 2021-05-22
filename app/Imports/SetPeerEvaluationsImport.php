<?php

namespace App\Imports;

use App\Models\Spe;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithHeadingRow;
use Maatwebsite\Excel\Concerns\WithValidation;

class SetPeerEvaluationsImport implements ToModel, WithHeadingRow, WithValidation
{

    public function rules(): array
    {
        return [
            'id_number'      => 'required|unique:spes',
        ];
    }

    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        return new Spe([
            'name'      => $row['name'] ?? null,
            'id_number' => $row['id_number'] ?? null,
            // 'spe_id'    => $row['spe_id'] ?? null,
        ]);
    }
}
