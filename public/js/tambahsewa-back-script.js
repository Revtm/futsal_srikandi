//untuk hapus kartu yg diklik
    function hapusKartu(idx){
      var h = document.getElementsByClassName('kartu');
      var ch = document.getElementById(idx);
      id_kartu = Array.from(h[0].children).indexOf(ch);
      h[0].removeChild(h[0].children[id_kartu]);
    }
//untuk tambah kartu
    function tambahKartu(kode_lapangan, lokasi, kode_jadwal ,jam, harga) {

      var div = document.createElement("DIV");
      var n_id = "k"+kode_lapangan;
      div.setAttribute('id',n_id);
      div.setAttribute('class','kartubaru');
      div.innerHTML =
        "<input type=\"text\" hidden name=\"kode_jadwal[]\" value=\""+kode_jadwal+"\" >"+
        "<label> Kode: </label>" + "<input type=\"text\" readonly name=\"kode_lapangan[]\" value=\""+kode_lapangan+"\" >"+"<br>"+
        "<label> Lapangan: </label> " + "<input type=\"text\" readonly name=\"lokasi[]\" value=\""+lokasi+"\" >" +"<br>"+
        "<label> Waktu: </label> " + "<input type=\"text\" readonly name=\"jam[]\" value=\""+jam+"\" >" +"<br>"+
        "<label> Harga: </label> " + "<input type=\"text\" readonly name=\"harga[]\" value=\""+harga+"\" >" +"<br>"+
      "<br>"+
      "<button type=\"button\" class=\"btn btn-danger\" onclick =\"hapusKartu(\'" + n_id + "\')\">Batal</button>"
      ;

      kartu = document.getElementsByClassName('kartu')[0];

      kartu.appendChild(div);


    }

    function getDataLapangan(id_btn) {
          $.ajax({
             url: '/tambahsewa/datalapangan',
             type: 'get',
             dataType: 'json',
             success: function(response){

                for(i = 0 ; i < response['data'].length ; i++){
                  if(response['data'][i].kode_lapangan == id_btn){
                  //  alert(response['data'][i].kode_lapangan);
                    tambahKartu(response['data'][i].kode_lapangan,response['data'][i].lokasi,response['data'][i].kode_jadwal,response['data'][i].jam, response['data'][i].harga);
                  }
                }
             }
          });
    }
