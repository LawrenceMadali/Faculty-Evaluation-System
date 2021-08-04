<?php

namespace App\Charts\CollegeOfBusiness;

use App\Models\Results;
use ArielMejiaDev\LarapexCharts\LarapexChart;

class SecondSemesterChart
{
    protected $chart;

    public function __construct(LarapexChart $chart)
    {
        $this->chart = $chart;
    }

    public function build(): \ArielMejiaDev\LarapexCharts\BarChart
    {
        $name = Results::where(['semester_id' => 2, 'college_id' => 3,])->pluck('name')->toArray();

        $sy1 = Results::where(['school_year_id'=> 1, 'semester_id' => 2, 'college_id' => 3,])
                        ->pluck('total')->toArray();

        $sy2 = Results::where(['school_year_id'=> 2, 'semester_id' => 2, 'college_id' => 3,])
                        ->pluck('total')->toArray();

        $sy3 = Results::where(['school_year_id'=> 3, 'semester_id' => 2, 'college_id' => 3,])
                        ->pluck('total')->toArray();

        $sy4 = Results::where(['school_year_id'=> 4, 'semester_id' => 2, 'college_id' => 3,])
                        ->pluck('total')->toArray();

        $sy5 = Results::where(['school_year_id'=> 5, 'semester_id' => 2, 'college_id' => 3,])
                        ->pluck('total')->toArray();

        $sy6 = Results::where(['school_year_id'=> 6, 'semester_id' => 2, 'college_id' => 3,])
                        ->pluck('total')->toArray();

        $sy7 = Results::where(['school_year_id'=> 7, 'semester_id' => 2, 'college_id' => 3,])
                        ->pluck('total')->toArray();

        $sy8 = Results::where(['school_year_id'=> 8, 'semester_id' => 2, 'college_id' => 3,])
                        ->pluck('total')->toArray();

        $sy9 = Results::where(['school_year_id'=> 9, 'semester_id' => 2, 'college_id' => 3,])
                        ->pluck('total')->toArray();

        $sy10 = Results::where(['school_year_id'=> 10, 'semester_id' => 2, 'college_id' => 3,])
                        ->pluck('total')->toArray();

        $sy11 = Results::where(['school_year_id'=> 11, 'semester_id' => 2, 'college_id' => 3,])
                        ->pluck('total')->toArray();

        $sy12 = Results::where(['school_year_id'=> 12, 'semester_id' => 2, 'college_id' => 3,])
                        ->pluck('total')->toArray();

        $sy13 = Results::where(['school_year_id'=> 13, 'semester_id' => 2, 'college_id' => 3,])
                        ->pluck('total')->toArray();

        $sy14 = Results::where(['school_year_id'=> 14, 'semester_id' => 2, 'college_id' => 3,])
                        ->pluck('total')->toArray();

        $sy15 = Results::where(['school_year_id'=> 15, 'semester_id' => 2, 'college_id' => 3,])
                        ->pluck('total')->toArray();

        $sy16 = Results::where(['school_year_id'=> 16, 'semester_id' => 2, 'college_id' => 3,])
                        ->pluck('total')->toArray();

        $sy17 = Results::where(['school_year_id'=> 17, 'semester_id' => 2, 'college_id' => 3,])
                        ->pluck('total')->toArray();

        $sy18 = Results::where(['school_year_id'=> 18, 'semester_id' => 2, 'college_id' => 3,])
                        ->pluck('total')->toArray();

        $sy19 = Results::where(['school_year_id'=> 19, 'semester_id' => 2, 'college_id' => 3,])
                        ->pluck('total')->toArray();

        $sy20 = Results::where(['school_year_id'=> 20, 'semester_id' => 2, 'college_id' => 3,])
                        ->pluck('total')->toArray();


        return $this->chart->barChart()
                ->setTitle('College of Business')
                ->setSubtitle('2nd Semester')
                ->addData('2020 - 2021', $sy1)
                ->addData('2021 - 2022', $sy2)
                ->addData('2022 - 2023', $sy3)
                ->addData('2023 - 2024', $sy4)
                ->addData('2024 - 2025', $sy5)
                ->addData('2025 - 2026', $sy6)
                ->addData('2026 - 2027', $sy7)
                ->addData('2027 - 2028', $sy8)
                ->addData('2028 - 2029', $sy9)
                ->addData('2029 - 2030', $sy10)
                ->addData('2030 - 2031', $sy11)
                ->addData('2031 - 2032', $sy12)
                ->addData('2032 - 2033', $sy13)
                ->addData('2033 - 2034', $sy14)
                ->addData('2034 - 2035', $sy15)
                ->addData('2035 - 2036', $sy16)
                ->addData('2036 - 2037', $sy17)
                ->addData('2037 - 2038', $sy18)
                ->addData('2038 - 2039', $sy19)
                ->addData('2039 - 2040', $sy20)
                ->setXAxis($name);
    }
}
