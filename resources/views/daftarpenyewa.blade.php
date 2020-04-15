<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Penyewa</title>
    <link rel="stylesheet" href="css/schedule-style.css">

    <!-- Vue JS -->
    <script type="text/javascript" src="js/vue/vue.js"></script>

    <!-- bootstrap css -->
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">

    <!-- jquery -->
    <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>

    <!-- bootstrap js -->
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>

    <link rel="stylesheet" href="css/tambahsewa-style.css">
</head>

<body onload="buatId()">

    <div class="container">
        <div class="jadwal">
            <div class="search">
                <input id="datepicker" width="270" value="<?php echo date("Y-m-d"); ?>" onchange="getJSON()"/>
                <br>
            </div>
        </div>
    </div>

    <div class="container">
        <div class="row">
            <div class="col-10">
                <h1 class="mt-3">Daftar Penyewa</h1>
                <table class="table">
                    <thead class="thead-dark">
                    
                        <tr>
                            <th scope="col">No</th>
                            <th scope="col">Nama</th>
                            <th scope="col">Kontak</th>
                            <th scope="col">Kode Transaksi</th>
                            <th scope="col">Operator</th>
                            <th scope="col">Kode Lapangan</th>
                            <th scope="col">Kode Jadwal</th>
                            <th scope="col">Diskon</th>
                            <th scope="col">Tanggal</th>
                        </tr>
                    </thead>
                    <tbody>
                    
                    @foreach($transaksi as $trs)
                        <tr>
                            <th scope="row">{{$loop->iteration}}</th>
                            <td>{{$trs->user->nama}}</td>
                            <td>{{$trs->user->telepon}}</td>
                            <td>{{$trs->kode_transaksi}}</td>
                            <td>{{$trs->operator->nama}}</td>
                            <td>{{$trs->kode_lapangan}}</td>
                            <td>{{$trs->kode_jadwal}}</td>
                            <td>{{$trs->diskon}}</td>
                            <td>{{$trs->tanggal}}</td>
                            <td>
                                <form action="daftarpenyewa/{{$trs->kode_transaksi}}" method="post">
                                    @method('delete');
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

    

    <!-- datepicker from gijgo -->
    <script src="https://cdn.rawgit.com/atatanasov/gijgo/master/dist/combined/js/gijgo.min.js" type="text/javascript"></script>
    <link href="https://cdn.rawgit.com/atatanasov/gijgo/master/dist/combined/css/gijgo.min.css" rel="stylesheet" type="text/css" />


    <script src="js/schedule-script.js"></script>
    <script src="js/schedule-back-script.js"></script>
    <script src="js/tambahsewa-back-script.js"></script>

</body>

</html>