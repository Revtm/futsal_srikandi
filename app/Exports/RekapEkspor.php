<?php

namespace App\Exports;

use App\RekapPenghasilan;
use Maatwebsite\Excel\Concerns\FromCollection;

class RekapEkspor implements FromCollection
{
  private $dari;
  private $ke;

  public function __construct($d, $k){
    $this->dari = $d;
    $this->ke = $k;
  }
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return RekapPenghasilan::where([['tanggal','>=', $this->dari],
        ['tanggal','<=', $this->ke]])->get();
    }

}
