
function gantiWarna(id){
  document.getElementById(id).style.background = "black";
}


function buatId() {
  var jadwal = document.querySelectorAll('.tombol-pilihjadwal');
  var j = 1;
// set id pertombol
  for (var i = 0; i < jadwal.length; i++)
    if(i < 16){
        if(j < 10) jadwal[i].id = "A0" + j;
        else jadwal[i].id = "A" + j;
        j++;
        if(j == 17){
          j = 1;
        }
    }else if(i < 32){
      if(j < 10) jadwal[i].id = "T0" + j;
      else jadwal[i].id = "T" + j;
        j++;
        if(j == 17){
          j = 1;
        }
    }else{
      if(j < 10) jadwal[i].id = "B0" + j;
      else jadwal[i].id = "A" + j;
        j++;
        if(j == 17){
          j = 1;
        }
    }
  }
