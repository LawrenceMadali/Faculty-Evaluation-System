<?php

namespace App\Charts\CollegeOfComputerStudies;

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
        $name = Results::where(['semester_id' => 2, 'college_id' => 1,])->pluck('name')->toArray();

        $sy1 = Results::where(['school_year_id'=> 1, 'semester_id' => 2, 'college_id' => 1,])
                        ->pluck('total')->toArray();

        $sy2 = Results::where(['school_year_id'=> 2, 'semester_id' => 2, 'college_id' => 1,])
                        ->pluck('total')->toArray();

        $sy3 = Results::where(['school_year_id'=> 3, 'semester_id' => 2, 'college_id' => 1,])
                        ->pluck('total')->toArray();

        $sy4 = Results::where(['school_year_id'=> 4, 'semester_id' => 2, 'college_id' => 1,])
                        ->pluck('total')->toArray();

        $sy5 = Results::where(['school_year_id'=> 5, 'semester_id' => 2, 'college_id' => 1,])
                        ->pluck('total')->toArray();

        $sy6 = Results::where(['school_year_id'=> 6, 'semester_id' => 2, 'college_id' => 1,])
                        ->pluck('total')->toArray();

        $sy7 = Results::where(['school_year_id'=> 7, 'semester_id' => 2, 'college_id' => 1,])
                        ->pluck('total')->toArray();

        $sy8 = Results::where(['school_year_id'=> 8, 'semester_id' => 2, 'college_id' => 1,])
                        ->pluck('total')->toArray();

        $sy9 = Results::where(['school_year_id'=> 9, 'semester_id' => 2, 'college_id' => 1,])
                        ->pluck('total')->toArray();

        $sy10 = Results::where(['school_year_id'=> 10, 'semester_id' => 2, 'college_id' => 1,])
                        ->pluck('total')->toArray();

        $sy11 = Results::where(['school_year_id'=> 11, 'semester_id' => 2, 'college_id' => 1,])
                        ->pluck('total')->toArray();

        $sy12 = Results::where(['school_year_id'=> 12, 'semester_id' => 2, 'college_id' => 1,])
                        ->pluck('total')->toArray();

        $sy13 = Results::where(['school_year_id'=> 13, 'semester_id' => 2, 'college_id' => 1,])
                        ->pluck('total')->toArray();

        $sy14 = Results::where(['school_year_id'=> 14, 'semester_id' => 2, 'college_id' => 1,])
                        ->pluck('total')->toArray();

        $sy15 = Results::where(['school_year_id'=> 15, 'semester_id' => 2, 'college_id' => 1,])
                        ->pluck('total')->toArray();

        $sy16 = Results::where(['school_year_id'=> 16, 'semester_id' => 2, 'college_id' => 1,])
                        ->pluck('total')->toArray();

        $sy17 = Results::where(['school_year_id'=> 17, 'semester_id' => 2, 'college_id' => 1,])
                        ->pluck('total')->toArray();

        $sy18 = Results::where(['school_year_id'=> 18, 'semester_id' => 2, 'college_id' => 1,])
                        ->pluck('total')->toArray();

        $sy19 = Results::where(['school_year_id'=> 19, 'semester_id' => 2, 'college_id' => 1,])
                        ->pluck('total')->toArray();

        $sy20 = Results::where(['school_year_id'=> 20, 'semester_id' => 2, 'college_id' => 1,])
                        ->pluck('total')->toArray();

        $sy21 = Results::where(['school_year_id'=> 21, 'semester_id' => 1, 'college_id' => 1,])
                        ->pluck('total')->toArray();

        $sy22 = Results::where(['school_year_id'=> 22, 'semester_id' => 1, 'college_id' => 1,])
                        ->pluck('total')->toArray();

        $sy23 = Results::where(['school_year_id'=> 23, 'semester_id' => 1, 'college_id' => 1,])
                        ->pluck('total')->toArray();

        $sy24 = Results::where(['school_year_id'=> 24, 'semester_id' => 1, 'college_id' => 1,])
                        ->pluck('total')->toArray();

        $sy25 = Results::where(['school_year_id'=> 25, 'semester_id' => 1, 'college_id' => 1,])
                        ->pluck('total')->toArray();

        $sy26 = Results::where(['school_year_id'=> 26, 'semester_id' => 1, 'college_id' => 1,])
                        ->pluck('total')->toArray();

        $sy27 = Results::where(['school_year_id'=> 27, 'semester_id' => 1, 'college_id' => 1,])
                        ->pluck('total')->toArray();

        $sy28 = Results::where(['school_year_id'=> 28, 'semester_id' => 1, 'college_id' => 1,])
                        ->pluck('total')->toArray();

        $sy29 = Results::where(['school_year_id'=> 29, 'semester_id' => 1, 'college_id' => 1,])
                        ->pluck('total')->toArray();

        return $this->chart->barChart()
                ->setTitle('College of Computer Study')
                ->setSubtitle('2nd Semester')
                ->addData('2021 - 2022', $sy1)
                ->addData('2022 - 2023', $sy2)
                ->addData('2023 - 2024', $sy3)
                ->addData('2024 - 2025', $sy4)
                ->addData('2025 - 2026', $sy5)
                ->addData('2026 - 2027', $sy6)
                ->addData('2027 - 2028', $sy7)
                ->addData('2028 - 2029', $sy8)
                ->addData('2029 - 2030', $sy9)
                ->addData('2030 - 2031', $sy10)
                ->addData('2031 - 2032', $sy11)
                ->addData('2032 - 2033', $sy12)
                ->addData('2033 - 2034', $sy13)
                ->addData('2034 - 2035', $sy14)
                ->addData('2035 - 2036', $sy15)
                ->addData('2036 - 2037', $sy16)
                ->addData('2037 - 2038', $sy17)
                ->addData('2038 - 2039', $sy18)
                ->addData('2039 - 2040', $sy19)
                ->addData('2040 - 2041', $sy20)
                ->addData('2041 - 2042', $sy21)
                ->addData('2042 - 2043', $sy22)
                ->addData('2043 - 2044', $sy23)
                ->addData('2044 - 2045', $sy24)
                ->addData('2045 - 2046', $sy25)
                ->addData('2046 - 2047', $sy26)
                ->addData('2047 - 2048', $sy27)
                ->addData('2048 - 2049', $sy28)
                ->addData('2049 - 2050', $sy29)
                ->setXAxis($name);
    }
}
