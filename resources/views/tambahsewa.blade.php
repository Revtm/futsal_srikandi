<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Schedule for Srikandi Futsal</title>
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
                <input id="datepicker" width="270" value="<?php echo date("Y-m-d"); ?>" onchange="getJSON()" />

                <br>
            </div>
            <ul v-for="lapangan in jadwal">
                <li>Lapangan @{{ lapangan.lapangan }}</li>
                <li v-for="jam in lapangan.urutan">

                    <button class="tombol-pilihjadwal"  onclick="getDataLapangan(this.id)">

                        @{{ jam.nomor }}
                    </button>
                </li>
            </ul>
        </div>
    </div>

    <div class="container">
      <h2>Detail jadwal</h2>
      <form method="post" action="\tambahsewa\input">
        {{csrf_field()}}
        <label>Nama Penyewa: </label> <input type="text" name="nama"> 
        <label>Kontak Penyewa: </label> <input type="text" name="kontak">
        <button type="submit" name="button btn">Submit</button>
        <div class="kartu">
        </div>
      </form>
    </div>

    <!-- datepicker from gijgo -->
    <script src="https://cdn.rawgit.com/atatanasov/gijgo/master/dist/combined/js/gijgo.min.js" type="text/javascript"></script>
    <link href="https://cdn.rawgit.com/atatanasov/gijgo/master/dist/combined/css/gijgo.min.css" rel="stylesheet" type="text/css" />


    <script src="js/schedule-script.js"></script>
    <script src="js/schedule-back-script.js"></script>
    <script src="js/tambahsewa-back-script.js"></script>

</body>
</html>