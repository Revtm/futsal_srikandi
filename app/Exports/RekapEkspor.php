<?php

namespace App\Exports;

use App\RekapPenghasilan;
use Maatwebsite\Excel\Concerns\FromCollection;

class RekapEkspor implements FromCollection
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return RekapPenghasilan::all();
    }
}
