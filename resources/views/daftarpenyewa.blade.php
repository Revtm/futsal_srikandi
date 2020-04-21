@include('partials.headerdaftarpenyewa')

@extends('layouts.operator')

@section('content')
    <div class="col-md-12">
        <div class="card">
            <div class="header">
                <h4 class="title">Daftar Penyewa</h4>
                        <input id="datepicker" width="270" value="<?php echo date("Y-m-d"); ?>" onchange="getJSON()"/>
            </div>
            <div class="content table-responsive table-full-width">
                <table class="table table-hover table-striped">
                    <thead>
                        <th>No</th>
                        <th>Nama</th>
                        <th>Kontak</th>
                        <th>Kode Transaksi</th>
                        <th>Operator</th>
                        <th>Kode Lapangan</th>
                        <th>Kode Jadwal</th>
                        <th>Diskon</th>
                        <th>Tanggal</th>
                        <th>Action</th>
                    </thead>
                    <tbody>
                        @foreach($transaksi as $trs)
                            <tr>
                                <th scope="row">{{$loop->iteration}}</th>
                                <td class="capitalize">{{$trs->user->nama}}</td>
                                <td>{{$trs->user->telepon}}</td>
                                <td>{{$trs->kode_transaksi}}</td>
                                <td class="capitalize">{{$trs->operator->nama}}</td>
                                <td>{{$trs->kode_lapangan}}</td>
                                <td>{{$trs->kode_jadwal}}</td>
                                <td>{{$trs->diskon}}</td>
                                <td>{{$trs->tanggal}}</td>
                                <td>
                                    <form action="daftarpenyewa/{{$trs->kode_transaksi}}" method="post">
                                        @method('delete')
                                        @csrf
                                        <button type="submit" class="btn btn-danger">Delete</button>
                                        <a href="daftarpenyewa/{{$trs->kode_transaksi}}/edit" class="btn btn-primary">Edit</a>
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>

            </div>
        </div>
    </div>

@endsection