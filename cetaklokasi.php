<?php
require_once __DIR__ . '/vendor/autoload.php';

require 'function.php';

$lokasi = query("SELECT * FROM lokasi");

$mpdf = new \Mpdf\Mpdf();
$cetaklokasi = '
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>CKB LOGISTICS</title>
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

<body><img src="images/ckb3.jpg" alt="M-dev-Store Logo" class="hidden-xs">
<img src="images/ckb3.jpg" alt="M-dev-Store Logo Mobile" class="visible-xs">
<h4 class="text-center">PT. Cipta Krida Bahari Logistics</h4>
     <p class="text-center">Laporan lokasi</p>  <br><br>

<table id="customers">
<thead>
  <tr class="info text-center">

    <th class="col">No</th>
    <th class="col">Storagebin</th>
    <th class="col">Images</th>
  </tr>
</thead>';

foreach($lokasi as $row)
{
    $numb = 1;
    $cetaklokasi .= '<tr>
    <td>'.$numb++ .'</td>
    <td>'. $row["storagebin"] .'</td>
    <td><img src="img/' . $row['images'] . '" width="50"></td>
    </tr>';
}

$cetaklokasi .= '</table>
<script src="js/jquery-331.min.js"></script>
  <script src="js/bootstrap-337.min.js"></script>
  <!-- WhatsHelp.io widget -->
  <script async data-id="8642" src="https://cdn.widgetwhats.com/script.min.js"></script>
  <!-- /WhatsHelp.io widget -->


</body>

</html>';
$mpdf->WriteHTML($cetaklokasi);
$mpdf->Output('cetaklokasi.pdf',\Mpdf\Output\Destination::INLINE);
?>