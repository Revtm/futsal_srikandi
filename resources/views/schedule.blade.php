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

    <style>
    .tombol-pilihjadwal { background:#dadada; color: #35495e;}
    .tombol-pilihjadwal:hover { background:#41b883; color: white;}
    </style>
</head>
<body onload="buatId()">

    <div class="container">
        <div class="jadwal">
            <div class="search">
                <input id="datepicker" width="270" value="2020-03-16" onchange="getJSON()" />

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

    <!-- datepicker from gijgo -->
    <script src="https://cdn.rawgit.com/atatanasov/gijgo/master/dist/combined/js/gijgo.min.js" type="text/javascript"></script>
    <link href="https://cdn.rawgit.com/atatanasov/gijgo/master/dist/combined/css/gijgo.min.css" rel="stylesheet" type="text/css" />


    <script src="js/schedule-script.js"></script>
    <script src="js/schedule-back-script.js"></script>
</body>
</html>
