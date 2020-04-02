function tambahKartu() {
  var div = document.createElement("DIV");
  div.setAttribute('class','kartu');
  div.innerHTML = "Hai";
  document.body.appendChild(div);
}

$("#btn-sewa").click(function(){
  var namaPenyewa = document.getElementById('nama-penyewa').value;
  var getKartu = document.getElementsByClassName('kartu');
  for (i=0; i < getKartu.length ; i++){

    var id_lap_var = getKartu[i].querySelector('#id-lap').val();
     var tanggal_var = getKartu[i].querySelector('#pukul').val();
     var harga_var = getKartu[i].querySelector('#harga').val();
    $.post("transaksi",{
        nama : namaPenyewa,
        id_lap : id_lap_var,
        harga : harga_var
    }, function(response,status){
        alert("*----Received Data----*nnResponse : " + response+"nnStatus : " + status);
    });
  }
});

function getID(){
	var id_kartu = document.getElementsByClassName('kartu');
    var isikartu= id_kartu[0].querySelector("#xxx");

    document.getElementById('isi').innerHTML = isikartu.innerHTML;

}
