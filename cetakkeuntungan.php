<?php
require_once __DIR__ . '/vendor/autoload.php';

require 'functionmakan.php';

session_start();

$nama = $_SESSION['username'];
$keuntungan = query("SELECT * FROM v_keuntungan");


$mpdf = new \Mpdf\Mpdf();

$cetaklaporan = '
    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Cetak laporan pesan</title>
        <link rel="stylesheet" href="styles/bootstrap-337.min.css">
      <link rel="stylesheet" href="font-awsome/css/font-awesome.min.css">
      <link rel="stylesheet" href="style.css">
      <link rel="stylesheet" href="print.css">
      <style>
    #customers {
      font-family: "Trebuchet MS", Arial, Helvetica, sans-serif;
      border-collapse: collapse;
      width: 100%;
    }
    
    #customers td, #customers th {
      border: 1px solid #ddd;
      padding: 10px;
    }
    
    #customers tr {
        padding: 10px;
    }
    
    #customers tr:nth-child(even){background-color: #f2f2f2;}
    
    #customers tr:hover {background-color: #ddd;}
    
    #customers th {
      padding-top: 12px;
      padding-bottom: 15px;
      text-align: left;
      background-color: #4CAF50;
      color: white;
    }

    hr .new1 {
      border-top:1px solid black;
    }

    .hidden-xs {
      margin-bottom:-70px !important;
      margin-top:40px !important;
      margin-right: 20px;
    }
    </style>

    </head>
    <body>
    <img src="images/logo2.png" alt="M-dev-Store Logo" class="hidden-xs">
    <h4 style="text-align:center;">CV RM SELERA BUFAT</h4>
    <p style="text-align:center;">Jl.A Yani No. 12, RT.03, Komet, Kec. Banjarbaru Utara, Kota BanjarBaru
    <br>Kalimantan Selatan 70714</p>
    <hr class="new1">
      <br>
    

    <table id="customers">
              <thead>
                <tr class="info text-center">
                <th class="col">Nama Makanan</th>
                  <th class="col">Harga</th>
                  <th class="col">Modal</th>
                  <th class="col">Laku</th>
                  <th class="col">Keuntungan</th>
                </tr>
              </thead> ';


foreach ($keuntungan as $row) {
    $cetaklaporan .= '<tr>
              
                <td>' . $row["nama_makanan"] . '</td>
                <td>' . $row["harga"] . '</td>
                <td>' . $row["modal"] . '</td>
                <td>' . $row["laku"] . '</td>
                <td>' . $row["keuntungan"] . '</td>
                  </tr>';
}

$cetaklaporan .= '</table> 
    <script src="js/jquery-331.min.js"></script>
    <script src="js/bootstrap-337.min.js"></script>
    <!-- WhatsHelp.io widget -->
    <script async data-id="8642" src="https://cdn.widgetwhats.com/script.min.js"></script>
    <!-- /WhatsHelp.io widget -->
  
  
  </body>
  </html> ';

$mpdf->WriteHTML($cetaklaporan);
$mpdf->Output('detailpesanan.pdf', \Mpdf\Output\Destination::INLINE);
