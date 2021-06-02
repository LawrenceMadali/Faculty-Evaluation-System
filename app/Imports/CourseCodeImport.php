<?php

namespace App\Imports;

use App\Instructor;
use Maatwebsite\Excel\Concerns\ToModel;

class CourseCodeImport implements ToModel
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        return new Instructor([
            //
        ]);
    }
}
