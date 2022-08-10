<?php

namespace App\Exports;

use Maatwebsite\Excel\Concerns\FromCollection;
use DB;

use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\Concerns\WithCustomCsvSettings;
use Maatwebsite\Excel\Concerns\WithTitle;
use Maatwebsite\Excel\Concerns\ShouldAutoSize;

class tablaReporteFichaTecnicaInventario implements FromCollection,WithHeadings,WithCustomCsvSettings,WithTitle,ShouldAutoSize
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public $consul;
    public $arraisito;
    public function __construct($consul="",$arraisito="")
    {
         $this->consul=$consul;
         $this->arraisito=$arraisito;
    }
    public function headings(): array
    {	
    	$arra=[];
    	 for($i=0; count($this->arraisito) > $i ; $i++ ){
		     $arra[$i]=$this->arraisito[$i];
		   }
		   $arra[count($this->arraisito)]='ID EN BASE DE DATOS';
        return $arra;
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
