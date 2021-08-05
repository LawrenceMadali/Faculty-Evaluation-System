<?php

namespace App\Exports;

use App\Models\Results;
use Illuminate\Contracts\View\View;
use Maatwebsite\Excel\Concerns\Exportable;
use Maatwebsite\Excel\Concerns\FromView;
use Maatwebsite\Excel\Concerns\ShouldAutoSize;
use Maatwebsite\Excel\Concerns\WithColumnWidths;
use Maatwebsite\Excel\Concerns\WithStyles;
use PhpOffice\PhpSpreadsheet\Worksheet\Worksheet;

class ReportsExport implements FromView, 
    WithStyles, 
    WithColumnWidths,
    ShouldAutoSize
{
    use Exportable;
    
    protected $selectedExport;

    public function __construct($selectedExport)
    {
        $this->selectedExport = $selectedExport;
    }

    public function view(): View
    {
        return view('report-pdf', [
            'reports'       => Results::with('semesters', 'school_years', 'colleges', 'instructors')
                            ->latest('total')->find($this->selectedExport),
            'currentDate'   => now(),
        ]);
    }

    public function styles(Worksheet $sheet)
    {
        $count = count($this->selectedExport);

        $sheet->getStyle('A1:K'. $count+2)->getAlignment()->setVertical('center');
        $sheet->getStyle('A1:K'. $count+2)->getAlignment()->setHorizontal('center');

        return [
            1 => [ 'font' => ['bold' => true,]],
            2 => [ 'font' => ['bold' => true,]],
        ];
    }

    public function columnWidths(): array
    {
        return [
            'A' => 15, 'B' => 10, 'C' => 10, 'D' => 10, 'E' => 10,
            'F' => 10, 'G' => 5,  'H' =>  5, 'I' => 5,  'J' =>  5, 
            'K' => 11,
        ];
    }
}
