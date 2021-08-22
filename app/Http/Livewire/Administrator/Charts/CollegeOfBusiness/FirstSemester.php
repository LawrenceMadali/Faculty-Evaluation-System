<?php

namespace App\Http\Livewire\Administrator\Charts\CollegeOfBusiness;

use App\Charts\CollegeOfBusiness\FirstSemesterChart;
use Livewire\Component;

class FirstSemester extends Component
{
    public function render(FirstSemesterChart $chart)
    {
        return view('livewire.administrator.charts.college-of-business.first-semester',
        [
            'chart' => $chart->build()
        ]);
    }
}
