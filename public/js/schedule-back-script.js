//fungsi untuk mengganti warna
function gantiWarna(kode){

    //ambil tanggal
    var date = $('#datepicker').datepicker().value();
    //ubah warna
      if(date == kode.tanggal){
        document.getElementById(kode.kode_lapangan).style.background = "black";
        document.getElementById(kode.kode_lapangan).style.color = "black";
      }else{
        document.getElementById(kode.kode_lapangan).style.background = "#dadada";
        document.getElementById(kode.kode_lapangan).style.color = "#35495e";
      }
}

//get json dari tabel transaksi db srikandi via ajax
function getJSON() {
      $.ajax({
         url: 'schedule/getdata',
         type: 'get',
         dataType: 'json',
         success: function(response){
            for(i = 0 ; i < response['data'].length ; i++){
              gantiWarna(response['data'][i]);
            }
         }
      });
}


//fungsi untuk membuat id otomatis di semua tombol jadwal
//nantinya id tombol akan berhubungan langsung dengan
//id lapangan yang ada di tabel transaksi
function buatId() {
  var jadwal = document.querySelectorAll('.tombol-pilihjadwal');
  var j = 8;

// set id pertombol
  for (var i = 0; i < jadwal.length; i++){
    if(i < 16){
        if(j < 10) jadwal[i].id = "LA-0" + j;
        else jadwal[i].id = "LA-" + j;
        j++;
        if(j == 24){
          j = 8;
        }
    }else if(i < 32){
      if(j < 10) jadwal[i].id = "LT-0" + j;
      else jadwal[i].id = "LT-" + j;
        j++;
        if(j == 24){
          j = 8;
        }
    }else{
      if(j < 10) jadwal[i].id = "LB-0" + j;
      else jadwal[i].id = "LB-" + j;
        j++;
        if(j == 24){
          j = 8;
        }
    }
  }
  getJSON();
}
