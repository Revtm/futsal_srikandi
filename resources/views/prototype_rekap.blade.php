<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Rekap</title>
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
  </head>
  <body>
    <div class="container">
        <h1>Halaman Rekap</h1>

        <form method="post" action="/rekap/filter">
        {{csrf_field()}}
        <label>Dari tanggal: </label> <input id="date-dari" width="270" name="dari" value="<?php echo date("Y-m-d"); ?>"/>
        <label>Hingga tanggal: </label> <input id="date-ke" width="270" name="ke" value="<?php echo date("Y-m-d"); ?>"/>
        <br>
        <button type="submit" class="btn" name="button">Filter Tanggal</button>
        </form>
        <br>

        <a href="{{route('excel.ekspor', ['dari'=> $tanggal['d'], 'ke'=> $tanggal['k']])}}" class="btn btn-primary">Ekspor Excel</a>

        <br>
        <br>
        <table class="table">
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
              <td> {{$t->jam}} </td>
              <td> {{$t->diskon}} </td>
              <td> {{$t->harga}} </td>
            </tr>
          @endforeach
        </table>
        
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
  </body>
</html>
