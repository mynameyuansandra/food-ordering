<?php

require_once __DIR__ . '/vendor/autoload.php';

require 'function.php';


$lokasi = query("SELECT * FROM pesanan ORDER BY id_pesanan DESC");


if(isset($_POST['submit']))
{
	$lokasi = caripesanan($_POST['search']);
}

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
<form method="post">
            
		<input type="text" class="form-control" name="search" placeholder="Search" autocomplete="off" autofocus>
    
		<button type="submit" name="submit">Search</button>
	</form>
<h4 class="text-center">PT. Cipta Krida Bahari Logistics</h4>
     <p class="text-center">Laporan pegawaian</p>

    <br><br>

    <table id="customers">
    
      <tr> 
      <th class="col">Orders</th>
      <th class="col">Qty</th>
      <th class="col">Partnumber</th>
      <th class="col">Mfr</th>
      <th class="col">pemesanan</th>
  
      </tr>
    ';
    $numb = 1;
    foreach($lokasi as $row) 
    {
        $laporan .= '<tr>
        <td>'. $numb++ .'</td>
        <td>'. $row["order"] .'</td>
        <td>'. $row["qty"] .'</td>
        <td>'. $row["part_number"] .'</td>
        <td>'. $row["mfr"] .'</td>
        <td>'. $row["nama_pemesanan"] .'</td>
        </tr>';
    }

   $laporan .= '</table>
   
</body>
</html>
';
$mpdf->WriteHTML($laporan);
$mpdf->Output('detailpegawai.pdf',\Mpdf\Output\Destination::INLINE);
?>
