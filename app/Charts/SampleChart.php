<?php

declare(strict_types = 1);

namespace App\Charts;

use App\Models\Results;
use Chartisan\PHP\Chartisan;
use ConsoleTVs\Charts\BaseChart;
use Illuminate\Http\Request;

class SampleChart extends BaseChart
{
    /**
     * Handles the HTTP request for the given chart.
     * It must always return an instance of Chartisan
     * and never a string or an array.
     */
    public function handler(Request $request): Chartisan
    {
        $results = Results::count();
        return Chartisan::build()
            ->labels(['First', 'Second', 'Third'])
            // ->dataset('Sample', [1, 2, 3])
            ->dataset('Sample 2', [$results]);
    }
}
