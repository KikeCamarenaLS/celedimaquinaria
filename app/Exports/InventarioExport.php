<?php

namespace App\Exports;

use App\Invoice;
use Illuminate\Contracts\View\View;
use Maatwebsite\Excel\Concerns\FromView;
use Maatwebsite\Excel\Concerns\WithCustomCsvSettings;

class InventarioExport implements FromView, WithCustomCsvSettings
{

	public $data;

    public function __construct( $data ="")
    {

    	$this->data = $data;
    }

    public function getCsvSettings(): array
    {
        return [
            'use_bom' => 'true'
        ];
    }

    public function view(): View
    {
    	return view('inventario.Inventario.tablaFiltro', [
            'inventarios' => $this->data
        ]);
    }
}
