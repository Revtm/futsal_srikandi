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

</head>
<body onload="buatId()">

    <div class="container">
      <div class="container isi-jadwal">
        <div class="jadwal">
            <div class="search">
                <input id="datepicker" width="270" value="<?php echo date("Y-m-d"); ?>" onchange="getJSON()" />

                <br>
            </div>
            <ul v-for="lapangan in jadwal">
                <li>Lapangan @{{ lapangan.lapangan }}</li>
                <li v-for="jam in lapangan.urutan">

                    <button class="tombol-pilihjadwal" @click="pilihJadwal(lapangan.label, jam.nomor)">

                        @{{ lapangan.label }}@{{ jam.nomor }}
                    </button>
                </li>
            </ul>
        </div>
      </div>

      <div class="container pilihan-jadwal">
        <div class="tombol-sewa" align="right">
          <input type="text" name="namaPenyewa" id="namaPenyewa" value="Budi">
        </div>
        <p>Anda memilih:</p>
        <div class="kartu" style="padding:10px; background:#dadada; border-radius:5px;">
          <form method="post">
            <input type="text" name="nama" value="A08">
            <br>
            <input type="text" name="pukul" value="08.00">
            <br>
            <input type="text" name="harga" value="110000">
            <br>
            <input type="text" name="tanggal" value="2020-04-01">
            <br>

            <button type="button" class="btn btn-success" id="btn-sewa" align="right">Sewa!</button>
          </form>

        </div>
        <br>

      </div>

    </div>

    <!-- datepicker from gijgo -->
    <script src="https://cdn.rawgit.com/atatanasov/gijgo/master/dist/combined/js/gijgo.min.js" type="text/javascript"></script>
    <link href="https://cdn.rawgit.com/atatanasov/gijgo/master/dist/combined/css/gijgo.min.css" rel="stylesheet" type="text/css" />


    <script src="js/schedule-script.js"></script>
    <script src="js/schedule-back-script.js"></script>
    <scriptsrc="js/op-back-script.js"></script>
</body>
</html>
