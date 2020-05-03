google.charts.load('current', {'packages':['corechart']});
google.charts.setOnLoadCallback(drawChart);

function drawChart() {
  //var bulan = document.getElementById('pilihbulan').value;
  //var tahun = document.getElementById('pilihtahun').value;
  //var url_lengkap = 'rekap/getDataRekap/'+bulan+'/'+tahun;
  var url_temp ='rekap/getDataRekap';
  var bayar = 0;
  var tanggalX = '-';
  var tanggalY = '-';
  var tanggalTemp ='-';
  var trans;
  var arrayTrans =[['tanggal', 'pemasukan']];

  arrayTrans.push(['2020-04-15', 100000]);
  arrayTrans.push(['2020-04-16', 150000]);
  arrayTrans.push(['2020-04-17', 120000]);
  arrayTrans.push(['2020-04-18', 160000]);

  
  // $.ajax({
  //        url: url_temp,
  //        type: 'get',
  //        dataType: 'json',
  //        success: function(response){
  //           trans = response['transaksi'];
  //           for(i = 0 ; i < response['transaksi'].length ; i++){
  //             tanggalY = trans[i].tanggal;
  //
  //             if(tanggalX == '-'){
  //               tanggalX = trans[i].tanggal;
  //               bayar = bayar + (trans[i].jadwal.harga - trans[i].diskon);
  //             }else{
  //               if(tanggalX == tanggalY){
  //                 bayar = bayar + (trans[i].jadwal.harga - trans[i].diskon);
  //               }else{
  //                 tanggalTemp = tanggalX;
  //                 tanggalX = tanggalY;
  //
  //                 var arr = [tanggalTemp, bayar];
  //                 arrayTrans.push(arr);
  //
  //
  //                 bayar = 0;
  //                 bayar = bayar + (trans[i].jadwal.harga - trans[i].diskon);
  //               }
  //             }
  //           }
  //        }
  //     });

  var data = google.visualization.arrayToDataTable(arrayTrans);

  var options = {
    title: 'Company Performance',
    curveType: 'none',
    legend: { position: 'bottom' }
  };

  var chart = new google.visualization.LineChart(document.getElementById('rekap_chart'));

  chart.draw(data, options);
}
