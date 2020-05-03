//untuk hapus kartu yg diklik
    function hapusKartu(idx){
      var h = document.getElementsByClassName('kartu');
      var ch = document.getElementById(idx);
      id_kartu = Array.from(h[0].children).indexOf(ch);
      h[0].removeChild(h[0].children[id_kartu]);
    }

    function getSubTotal(){
      var arrNama = document.getElementsByName('nama[]');
      var arrKontak = document.getElementsByName('kontak[]');
      var arrHarga = document.getElementsByName('harga[]');
      var arrDiskon = document.getElementsByName('diskon[]');
      var nama =[];
      var kontak =[];
      var subtotal =[];
      var inHtml = "";

      if(arrNama[0].value != "" && arrKontak[0].value !=""){
        for(var i = 0 ; i < arrKontak.length ; i++){
          if(nama.length == 0 &&  i == 0){
            nama.push(arrNama[i].value);
            kontak.push(arrKontak[i].value);
            subtotal.push(parseInt(arrHarga[i].value)-parseInt(arrDiskon[i].value));
          }else{
            for(var j = 0 ; j < nama.length ; j++){
              if(arrNama[i].value == nama[j] && arrKontak[i].value == kontak[j]){
                subtotal[j] = subtotal[j] + parseInt(arrHarga[i].value) - parseInt(arrDiskon[i].value);
              }else{
                nama.push(arrNama[i].value);
                kontak.push(arrKontak[i].value);
                subtotal.push(parseInt(arrHarga[i].value)-parseInt(arrDiskon[i].value));
              }
            }
          }
        }

        if(document.getElementsByName('nama[]').length > 0 && document.getElementsByName('kontak[]').length > 0){
          for(var k = 0 ; k < nama.length ; k++){
            inHtml = inHtml + "Nama Penyewa: " + nama[k] +" Kontak: "+ kontak[k]+
            " Subtotal: " + subtotal[k] + "</br>";
          }
          document.getElementById('tampilsubtotal').innerHTML=inHtml;
        }else{
          document.getElementById('tampilsubtotal').innerHTML="";
        }
      }else{
        document.getElementById('tampilsubtotal').innerHTML="";
      }


    }
//untuk tambah kartu
    function tambahKartu(tanggal,kode_lapangan, lokasi, kode_jadwal ,jam, harga) {

      var div = document.createElement("DIV");
      var n_id = "k"+kode_lapangan;
      div.setAttribute('id',n_id);
      div.setAttribute('class','kartubaru');
      div.innerHTML =
      "<div class=\"card\">"+
      "<style>"+ "#"+kode_lapangan+"{background: #95a5a6; color:white; pointer-events: none; cursor: not-allowed;}" +"</style>"+
          "<div class=\"content\">"+
                  "<input type=\"text\" hidden name=\"tanggal_jadwal[]\" value=\"" + tanggal + "\" >"+
                  "<input type=\"text\" hidden name=\"kode_jadwal[]\" value=\"" + kode_jadwal + "\" >"+
                  "<input type=\"hidden\" name=\"kode_lapangan[]\" value=\"" + kode_lapangan + "\">"+
                  "<div class=\"row\">"+
                      "<div class=\"col-md-2\">"+
                          "<div class=\"form-group\">"+
                              "<label>Lokasi Lapangan</label>"+
                              "<input type=\"text\" class=\"form-control\" readonly name=\"lokasi[]\" value=\"" + lokasi + "\">"+
                          "</div>"+
                      "</div>"+
                      "<div class=\"col-md-2\">"+
                          "<div class=\"form-group\">"+
                              "<label for=\"exampleInputEmail1\">Waktu</label>"+
                              "<input type=\"text\" class=\"form-control\" readonly name=\"jam[]\" value=\"" + jam + "\">"+
                          "</div>"+
                      "</div>"+
                      "<div class=\"col-md-2\">"+
                          "<div class=\"form-group\">"+
                              "<label for=\"exampleInputEmail1\">Harga</label>"+
                              "<input type=\"text\" class=\"form-control\" name=\"harga[]\" value=\"" + harga + "\" required>"+
                          "</div>"+
                      "</div>"+
                      "<div class=\"col-md-2\">"+
                          "<div class=\"form-group\">"+
                              "<label for=\"exampleInputEmail1\">Diskon</label>"+
                              "<input type=\"number\" class=\"form-control\" name=\"diskon[]\" value=\"0\">"+
                          "</div>"+
                      "</div>"+
                      "<div class=\"col-md-2\">"+
                          "<div class=\"form-group\">"+
                              "<label for=\"exampleInputEmail1\">Nama Penyewa</label>"+
                              "<input type=\"text\" class=\"form-control\" name=\"nama[]\" placeholder=\"Contoh : Jefri Manurung\" onchange=\"getSubTotal()\" required>"+
                          "</div>"+
                      "</div>"+
                      "<div class=\"col-md-2\">"+
                          "<div class=\"form-group\">"+
                              "<label for=\"exampleInputEmail1\">Kontak Penyewa</label>"+
                              "<input type=\"text\" class=\"form-control\" name=\"kontak[]\" placeholder=\"Contoh : 085274715359\" onchange=\"getSubTotal()\" required>"+
                          "</div>"+
                      "</div>"+
                  "</div>"+
                  "<button type=\"button\" class=\"btn btn-danger btn-fill pull-right\" onclick =\"hapusKartu(\'" + n_id + "\');getSubTotal();\">Batal</button>"+

                  "<div class=\"clearfix\"></div>"+
          "</div>"+
      "</div>";

      kartu = document.getElementsByClassName('kartu')[0];

      kartu.appendChild(div);


    }


    function getDataLapangan(id_btn) {
          var tanggal = document.getElementById('date-picker').value;
          if(tanggal == ""){
            alert("Tanggal mohon diisi");
          }else{
            $.ajax({
               url: '/tambahsewa/datalapangan',
               type: 'get',
               dataType: 'json',
               success: function(response){

                  for(i = 0 ; i < response['data'].length ; i++){
                    if(response['data'][i].kode_lapangan == id_btn){
                    //  alert(response['data'][i].kode_lapangan);
                      tambahKartu(tanggal,response['data'][i].kode_lapangan,response['data'][i].lokasi,response['data'][i].kode_jadwal,response['data'][i].jadwal.jam, response['data'][i].jadwal.harga);
                    }
                  }
               }
            });
          }

    }
