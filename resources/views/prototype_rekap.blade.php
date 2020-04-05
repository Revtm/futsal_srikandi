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
        <a href="/rekap/excel" class="btn btn-primary">Ekspor Excel</a>
        <br>
        <br>
        <table border="1">
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
        {{$rekap->links()}}
    </div>

  </body>
</html>
