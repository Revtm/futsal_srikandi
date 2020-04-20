function hapusCSS(){
	var h = document.head;
  var ch = document.head.childNodes;

    for(i = 0; i < ch.length ; i++){
    	if(ch[i].nodeName == "STYLE"){
        	h.removeChild(ch[i]);
      }
    }
}


//fungsi untuk mengganti warna
function gantiWarna(kode){
    //ubah warna
    var css = "#" + kode.kode_lapangan + "{background:black; color: black;}";
    var style = document.createElement('style');

     if (style.styleSheet) {
        style.styleSheet.cssText = css;
     } else {
          style.appendChild(document.createTextNode(css));
     }

     document.getElementsByTagName('head')[0].appendChild(style);
}

//get json dari tabel transaksi db srikandi via ajax
function getJSON() {
    hapusCSS();
    hapusCSS();
		hapusCSS();
    var date = $('#datepicker').datepicker().value();
      $.ajax({
         url: 'schedule/getdata',
         type: 'get',
         dataType: 'json',
         success: function(response){
            for(i = 0 ; i < response['data'].length ; i++){
              if(date == response['data'][i].tanggal){
                gantiWarna(response['data'][i]);
              }
            }
         }
      });
}


//fungsi untuk membuat id otomatis di semua tombol jadwal
//nantinya id tombol akan berhubungan langsung dengan
//id lapangan yang ada di tabel transaksi
function buatId() {
  var jadwal = document.querySelectorAll('.tombol-pilihjadwal');
  var j = 7;

// set id pertombol
  for (var i = 0; i < jadwal.length; i++){
    if(i < 16){
        if(j < 10) jadwal[i].id = "LA-0" + j;
        else jadwal[i].id = "LA-" + j;
        j++;
        if(j == 23){
          j = 7;
        }
    }else if(i < 32){
      if(j < 10) jadwal[i].id = "LT-0" + j;
      else jadwal[i].id = "LT-" + j;
        j++;
        if(j == 23){
          j = 7;
        }
    }else{
      if(j < 10) jadwal[i].id = "LB-0" + j;
      else jadwal[i].id = "LB-" + j;
        j++;
        if(j == 23){
          j = 7;
        }
    }
  }
  getJSON();
}
