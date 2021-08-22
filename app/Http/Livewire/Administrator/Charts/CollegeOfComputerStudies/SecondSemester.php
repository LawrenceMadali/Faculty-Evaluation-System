<?php

namespace App\Http\Livewire\Administrator\Charts\CollegeOfComputerStudies;

use App\Charts\CollegeOfComputerStudies\SecondSemesterChart;
use Livewire\Component;

class SecondSemester extends Component
{
    public function render(SecondSemesterChart $chart)
    {
        return view('livewire.administrator.charts.college-of-computer-studies.second-semester',
        [
            'chart' => $chart->build()
        ]);
    }
}
