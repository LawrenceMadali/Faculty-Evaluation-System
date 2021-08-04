<?php

namespace App\Http\Livewire\Administrator\Charts\CollegeOfComputerStudies;

use App\Charts\CollegeOfComputerStudies\FirstSemesterChart;
use Livewire\Component;

class FirstSemester extends Component
{
    public function render(FirstSemesterChart $chart)
    {
        return view('livewire.administrator.charts.college-of-computer-studies.first-semester',
        [
            'chart' => $chart->build()
        ]);
    }
}
