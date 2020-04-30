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

          <div id="rekap_chart"></div>

    </div>

    <div class="card" style="padding: 20px 20px 20px 20px">
      <div class="content table-responsive table-full-width">
        <table class="table table-hover table-striped">
          <tr>
            <th>Kode Transaksi</th>
            <th>Tanggal</th>
            <th>Lapangan</th>
            <th>Jam</th>
            <th>Penyewa</th>
            <th>Kontak</th>
            <th>Diskon</th>
            <th>Harga</th>
          </tr>

          @foreach($rekap as $t)
            <tr>
              <td> {{$t->kode_transaksi}} </td>
              <td> {{$t->tanggal}} </td>
              <td> {{$t->lapangan->nama}} </td>
              <td> {{$t->jadwal->jam}} </td>
              <td> {{$t->user->nama}} </td>
              <td> {{$t->user->telepon}} </td>
              <td> {{$t->diskon}} </td>
              <td> {{$t->jadwal->harga}} </td>
            </tr>
          @endforeach
        </table>

      </div>

    </div>

    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">
    google.charts.load('current', {'packages':['corechart']});
    google.charts.setOnLoadCallback(drawChart);

    function drawChart() {
      var dari = document.getElementById('date-dari').value;
      var ke = document.getElementById('date-ke').value;
      var url_lengkap = 'rekap/getDataRekap/'+dari+'/'+ke;
      var url_temp ='rekap/getDataRekap';
      var bayar = 0;
      var tanggalX;
      var tanggalY;
      var tanggalTemp;
      var trans;



      $.ajax({
             url: url_lengkap,
             type: 'get',
             dataType: 'json',
             success: function(response){
               var data = new google.visualization.DataTable();
               data.addColumn('string', 'Tanggal');
               data.addColumn('number', 'Pendapatan');

                trans = response['transaksi'];
                if(trans != null){
                  tanggalX = trans[0].tanggal;
                  for(i = 0 ; i < trans.length ; i++){
                    tanggalY = trans[i].tanggal;

                      if(tanggalX == tanggalY){

                        bayar += (trans[i].jadwal.harga - trans[i].diskon);

                      }else{

                        tanggalTemp = tanggalX;
                        tanggalX = tanggalY;
                        data.addRow([tanggalTemp, bayar]);


                        bayar = 0;
                        bayar += (trans[i].jadwal.harga - trans[i].diskon);
                      }

                  }
                  tanggalTemp = tanggalX;
                  data.addRow([tanggalTemp, bayar]);

                  bayar = 0;

                  var options = {
                    title: 'Rekap Pendapatan '+dari+' Sampai '+ke,
                    bars: 'horizontal',
                    legend: { position: 'bottom' }
                  };

                  var chart = new google.visualization.ColumnChart(document.getElementById('rekap_chart'));

                  chart.draw(data, options);

               }
              }

          });


    }

    </script>
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
