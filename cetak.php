<?php

require_once __DIR__ . '/vendor/autoload.php';

require 'function.php';

$monitoring = query("SELECT * FROM adminis");

$mpdf = new \Mpdf\Mpdf();
$laporan = '
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Daftar Mahasiswa</title>
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
  padding: 8px;
}

#customers tr:nth-child(even){background-color: #f2f2f2;}

#customers tr:hover {background-color: #ddd;}

#customers th {
  padding-top: 12px;
  padding-bottom: 12px;
  text-align: left;
  background-color: #4CAF50;
  color: white;
}
</style>
</head>
<body>
<img src="images/ckb3.jpg" alt="M-dev-Store Logo" class="hidden-xs">
<img src="images/ckb3.jpg" alt="M-dev-Store Logo Mobile" class="visible-xs">
<h4 class="text-center">PT. Cipta Krida Bahari Logistics</h4>
     <p class="text-center">Laporan pegawaian</p>

    <br><br>

    <table id="customers">
    
      <tr> 
        <th class="col">No</th>
        <th class="col">Nama</th>
        <th class="col">Posisi</th>
        <th class="col">Images</th>
        
      </tr>
    ';
    $numb = 1;
    foreach($monitoring as $row) 
    {
        $laporan .= '<tr>
        <td>'. $numb++ .'</td>
        <td>'. $row["nama"] .'</td>
        <td>'. $row["posisi"] .'</td>
        <td> <img src="img/'. $row["images"].'" width="50"> </td>
        </tr>';
    }

   $laporan .= '</table>
   
</body>
</html>
';
$mpdf->WriteHTML($laporan);
$mpdf->Output('detailpegawai.pdf',\Mpdf\Output\Destination::INLINE);
?>
