    @include('partials.headerrekap')

    @extends('layouts.operator')

    @section('content')

    <div class="card" style="padding:20px 20px 20px 20px;">
        <h3>Rekap Transaksi</h3>

        <form method="get" action="/rekap">
        {{csrf_field()}}
        <div class="row">
          <div class="col-sm-5">
            <label>Dari tanggal: </label>
            <input id="date-dari" width="270" name="dari" value="{{$tanggal['d']}}"/>
          </div>
          <div class="col-sm-5">
            <label>Hingga tanggal: </label>
            <input id="date-ke" width="270" name="ke" value="{{$tanggal['k']}}"/>
          </div>

        </div>

        <div class="row">
          <div class="col-sm-3">
            <button type="submit" class="btn" name="button">Filter Tanggal</button>
          </div>
        </div>
        </form>

        <div class="row">
          <div class="col-sm-3">
            <a href="{{route('excel.ekspor', ['dari'=> $tanggal['d'], 'ke'=> $tanggal['k']])}}" class="btn btn-primary">Ekspor Excel</a>
          </div>
        </div>
        <br>
        
        <div class="content table-responsive table-full-width">
          <table class="table table-hover table-striped">
            <tr>
              <th>Kode</th>
              <th>Tanggal</th>
              <th>Kode Lapangan</th>
              <th>Jam</th>
              <th>Diskon</th>
              <th>Harga</th>
            </tr>

            @foreach($rekap as $t)
              <tr>
                <td> {{$t->kode_transaksi}} </td>
                <td> {{$t->tanggal}} </td>
                <td> {{$t->kode_lapangan}} </td>
                <td> {{$t->jadwal->jam}} </td>
                <td> {{$t->diskon}} </td>
                <td> {{$t->jadwal->harga}} </td>
              </tr>
            @endforeach
          </table>

        </div>

    </div>

    <script src="https://cdn.rawgit.com/atatanasov/gijgo/master/dist/combined/js/gijgo.min.js" type="text/javascript"></script>
    <link href="https://cdn.rawgit.com/atatanasov/gijgo/master/dist/combined/css/gijgo.min.css" rel="stylesheet" type="text/css" />
    <script type="text/javascript">
    $(document).ready(function () {
        $('#date-dari').datepicker({

            uiLibrary: 'bootstrap', format: 'yyyy-mm-dd'

        });

        $('#date-ke').datepicker({

            uiLibrary: 'bootstrap', format: 'yyyy-mm-dd'

        });
    });
    </script>

@endsection
