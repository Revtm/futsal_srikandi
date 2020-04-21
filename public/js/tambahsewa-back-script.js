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
      "<div class=\"card\">"+
          "<div class=\"content\">"+
                  "<input type=\"text\" hidden name=\"kode_jadwal[]\" value=\"" + kode_jadwal + "\" >"+
                  "<div class=\"row\">"+
                      "<div class=\"col-md-2\">"+
                          "<div class=\"form-group\">"+
                              "<label>Kode Lapangan</label>"+
                              "<input type=\"text\" class=\"form-control\" readonly name=\"kode_lapangan[]\" value=\"" + kode_lapangan + "\">"+
                          "</div>"+
                      "</div>"+
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
                              "<input type=\"text\" class=\"form-control\" name=\"harga[]\" value=\"" + harga + "\">"+
                          "</div>"+
                      "</div>"+
                      "<div class=\"col-md-2\">"+
                          "<div class=\"form-group\">"+
                              "<label for=\"exampleInputEmail1\">Nama Penyewa</label>"+
                              "<input type=\"text\" class=\"form-control\" name=\"nama\" placeholder=\"Contoh : Jefri Manurung\">"+
                          "</div>"+
                      "</div>"+
                      "<div class=\"col-md-2\">"+
                          "<div class=\"form-group\">"+
                              "<label for=\"exampleInputEmail1\">Kontak Penyewa</label>"+
                              "<input type=\"text\" class=\"form-control\" name=\"kontak\" placeholder=\"Contoh : 085274715359\">"+
                          "</div>"+
                      "</div>"+
                  "</div>"+
                  "<button type=\"button\" class=\"btn btn-danger btn-fill pull-right\" onclick =\"hapusKartu(\'" + n_id + "\')\">Batal</button>"+
                  "<button type=\"submit\" class=\"btn btn-info btn-fill pull-right\" style=\"margin-right: 10px;\" name=\"button btn\">Tambah</button>"+
                  "<div class=\"clearfix\"></div>"+
          "</div>"+
      "</div>";

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
