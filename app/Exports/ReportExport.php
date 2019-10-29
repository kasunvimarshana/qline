<?php

namespace App\Exports;

use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\FromArray;
use Maatwebsite\Excel\Concerns\WithCustomStartCell;
use Maatwebsite\Excel\Concerns\WithDrawings;
use PhpOffice\PhpSpreadsheet\Worksheet\Drawing;

class ReportExport implements FromArray{
    /**
    * @return \Illuminate\Support\Collection
    */
    /*
    public function collection(){
        //
    }
    */
    protected $data;

    public function __construct(array $data){
        $this->data = $data;
    }

    public function array(): array{
        return $this->data;
    }
    
    public function startCell(){
        return 'A1';
    }
}
