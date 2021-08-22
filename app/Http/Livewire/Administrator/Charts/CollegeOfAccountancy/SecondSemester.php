<?php

namespace App\Http\Livewire\Administrator\Charts\CollegeOfAccountancy;

use App\Charts\CollegeOfAccountancy\SecondSemesterChart;
use Livewire\Component;

class SecondSemester extends Component
{
    public function render(SecondSemesterChart $chart)
    {
        return view('livewire.administrator.charts.college-of-accountancy.second-semester',
        [
            'chart' => $chart->build()
        ]);
    }
}
