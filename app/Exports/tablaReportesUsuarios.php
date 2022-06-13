<?php

namespace App\Exports;

use Maatwebsite\Excel\Concerns\FromCollection;
use DB;

use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\Concerns\WithCustomCsvSettings;
use Maatwebsite\Excel\Concerns\WithTitle;
use Maatwebsite\Excel\Concerns\ShouldAutoSize;

class tablaReportesUsuarios implements FromCollection,WithHeadings,WithCustomCsvSettings,WithTitle,ShouldAutoSize
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public $consul;
    public function __construct($consul="")
    {
         $this->consul=$consul;
    }
    public function headings(): array
    {
        return ['ID_REPORTE','MODULO','ID_EMPLEADO','OBSERVACIONES','FECHA'];
    }
    public function getCsvSettings(): array
    {
        return [
            'use_bom' => 'true'
        ];
    }
    public function title(): string
    {
        return 'Reporte ';
    }


    public function collection()
    {

        return Collect(DB::select($this->consul));
    }
   
}
