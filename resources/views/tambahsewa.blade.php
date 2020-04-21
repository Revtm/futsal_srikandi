@include('partials.headertambahsewa')

@extends('layouts.operator')

@section('content')
    <div class="col-md-12">
        <div class="card">
            <div class="header">
                <h4 class="title">Daftar Penyewa</h4>
                <input id="datepicker" width="270" value="<?php echo date("Y-m-d"); ?>" onchange="getJSON()"/>
            </div>
            <div class="content table-responsive table-full-width">
                <div class="jadwal">
                    <div class="baris" v-for="lapangan in jadwal">
                        <div class="lapangan">
                            <p>Lapangan @{{ lapangan.lapangan }}</p>
                        </div>
                        <a v-for="jam in lapangan.urutan" class="cards credentialing tombol-pilihjadwal" onclick="getDataLapangan(this.id)">
                            <div class="overlay"></div>
                            <div class="jam">@{{ jam.nomor }}</div>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    <form method="post" action="\tambahsewa\input">
        {{csrf_field()}}
        <div class="col-md-12">
            <div class="kartu"></div>
        </div>
    </form>
      
    <script type="text/javascript">
        window.onload = function() {
            buatId();
        }
    </script>
@endsection