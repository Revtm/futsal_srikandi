<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

    <title>Detail</title>
</head>

<body>
<div class="container">
    <div class="row">
        <div class="col-6">
            <h1 class="mt-3">Update Data Transaksi</h1>
            
            <form method="POST" action="/daftarpenyewa/{{$transaksi->kode_transaksi}}">
            @csrf
            @method('patch')
                <div class="form-group">
                    <label for="Nama">Nama</label>
                    <input type="text" class="form-control" id="Nama" placeholder="Masukkan Nama" name="nama">
                </div>

                <div class="form-group">
                    <label for="Kontak">Kontak</label>
                    <input type="text" class="form-control" id="Kontak" placeholder="Masukkan kontak" name="kontak">
                </div>

                <div class="form-group">
                    <label for="Jadwal">Jadwal</label>
                    <input type="text" class="form-control" id="Jadwal" placeholder="Masukkan Jadwal" name="jadwal">
                </div>

                <div class="form-group">
                    <label for="Diskon">Diskon</label>
                    <input type="text" class="form-control" id="Diskon" placeholder="Masukkan Diskon" name="diskon">
                </div>

                <div class="form-group">
                    <label for="Tangga;">Tanggal</label>
                    <input type="text" class="form-control" id="Tanggal" placeholder="Masukkan Tanggal" name="tanggal">
                </div>
                <button type="submit" class="btn btn-primary">Update Data</button>
            </form>
    </div>
</div>
</div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
</body>

</html>