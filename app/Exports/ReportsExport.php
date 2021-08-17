<?php

namespace App\Exports;

use App\Models\Results;
use Illuminate\Contracts\View\View;
use Maatwebsite\Excel\Concerns\FromView;
use Maatwebsite\Excel\Events\BeforeSheet;
use Maatwebsite\Excel\Concerns\Exportable;
use Maatwebsite\Excel\Concerns\WithEvents;
use Maatwebsite\Excel\Concerns\WithStyles;
use Maatwebsite\Excel\Concerns\ShouldAutoSize;
use Maatwebsite\Excel\Concerns\WithColumnWidths;
use PhpOffice\PhpSpreadsheet\Worksheet\Worksheet;

class ReportsExport implements FromView, WithStyles, WithColumnWidths, ShouldAutoSize, WithEvents
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
            'currentDate'   => now()->format('F d, Y h:ia'),
        ]);
    }

    public function registerEvents(): array
    {
        return [
            BeforeSheet::class => function (BeforeSheet $event) {
                $event->sheet
                    ->getPageSetup()
                    ->setOrientation(\PhpOffice\PhpSpreadsheet\Worksheet\PageSetup::ORIENTATION_LANDSCAPE);
            },
        ];
    }

    public function styles(Worksheet $sheet)
    {
        $count = count($this->selectedExport);

        $sheet->getStyle('A:K')->getAlignment()->setVertical('center');
        $sheet->getStyle('A:K')->getAlignment()->setHorizontal('center');

        return [
            1 => [ 'font' => ['bold' => true,]]
        ];
    }

    public function columnWidths(): array
    {
        return [
            'A' => 15, 'B' => 12, 'C' => 12, 'D' => 10, 'E' => 12,
            'F' => 7, 'G' => 7,  'H' =>  7, 'I' => 7,  'J' =>  7,
            'K' => 12,
        ];
    }
}
