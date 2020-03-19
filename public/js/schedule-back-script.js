function hapusCSS(){
	var h = document.head;
  var ch = document.head.childNodes;

    for(i = 0; i < ch.length ; i++){
    	if(ch[i].nodeName == "STYLE"){
        	h.removeChild(ch[i]);
      }
    }
}

function tombolHitam(kode){
  var css = "#" + kode.kode_lapangan + "{background:black; color: black;}";
  var style = document.createElement('style');

   if (style.styleSheet) {
      style.styleSheet.cssText = css;
   } else {
        style.appendChild(document.createTextNode(css));
   }

   document.getElementsByTagName('head')[0].appendChild(style);
}

function tombolBiru(){
  var css =
  ".tombol-pilihjadwal { background:#dadada; color: #35495e;} " +
  ".tombol-pilihjadwal:hover { background:#41b883; color: white;}";

  var style = document.createElement('style');

   if (style.styleSheet) {
      style.styleSheet.cssText = css;
   } else {
        style.appendChild(document.createTextNode(css));
   }

   document.getElementsByTagName('head')[0].appendChild(style);
}

//fungsi untuk mengganti warna
function gantiWarna(kode){

    //ambil tanggal
    var date = $('#datepicker').datepicker().value();
    //ubah warna
      if(date == kode.tanggal){
        tombolHitam(kode);
      }
}

//get json dari tabel transaksi db srikandi via ajax
function getJSON() {
      $.ajax({
         url: 'schedule/getdata',
         type: 'get',
         dataType: 'json',
         success: function(response){
           hapusCSS();
           tombolBiru();
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
