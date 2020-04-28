<?php

namespace App\Exports;

use App\Transaksi;
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

        return Transaksi::with('jadwal')->where([['tanggal','>=', $this->dari],
        ['tanggal','<=', $this->ke]])->orderBy('tanggal', 'ASC')->get();
    }

}
