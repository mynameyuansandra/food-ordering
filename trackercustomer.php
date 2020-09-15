<?php 
require 'functionmakan.php';

?>


<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>TRACKER</title>
  <link rel="stylesheet" href="styles/bootstrap-337.min.css">
  <link rel="stylesheet" href="font-awsome/css/font-awesome.min.css">
  <link rel="stylesheet" href="style.css">
  <link rel="stylesheet" href="https://unpkg.com/leaflet@1.6.0/dist/leaflet.css"
   integrity="sha512-xwE/Az9zrjBIphAcBb3F6JVqxf46+CDLwfLMHloNu6KEQCAWi6HcDUbeOfBIptF7tcCzusKFjFw2yuvEpDL9wQ=="
   crossorigin=""/>

   <style>
    #mapid { height: 100vh; }
   </style>
</head>

<body>

  <div id="top">

      <div class="container">

          <div class="col-md-6 offer">

              <a href="#" class="btn btn-success btn-sm">Welcome</a>


          </div>

          <div class="col-md-6">

              <ul class="menu">
                  <li>
                      <a href="registrasi.php">Daftar</a>
                  </li>
                  <li>
                      <a href="logout.php">Logout</a>
                  </li>

              </ul>

          </div>

      </div>

  </div>

  <div id="navbar" class="navbar navbar-default">

      <div class="container">

          <div class="navbar-header">

              <a href="index.php" class="navbar-brand home">

                  <img src="images/logo2.png" alt="M-dev-Store Logo" class="hidden-xs">
                  <img src="images/logo2.png" alt="M-dev-Store Logo Mobile" class="visible-xs">


              </a>

              <button class="navbar-toggle" data-toggle="collapse" data-target="#navigation">

                  <span class="sr-only">Toggle Navigation</span>

                  <i class="fa fa-align-justify"></i>

              </button>

              <button class="navbar-toggle" data-toggle="collapse" data-target="#search">

                  <span class="sr-only">Toggle Search</span>

                  <i class="fa fa-search"></i>

              </button>

          </div>

          <div class="navbar-collapse collapse" id="navigation">

              <div class="padding-nav">

                  <ul class="nav navbar-nav left">

                  
                  <li>
              <!-- <a href="pesanan.php">PESANAN</a> -->
              <a href="homecustomer.php">CUSTOMER</a>   
            </li>
          <li>
              <a href="indexcustomer.php">HOME</a>
              
            </li>
          
            <li >
              <!-- <a href="admin.php">MENU</a> -->
              <a href="makanancustomer.php">MAKANAN</a>
            </li>

            <li >
              <!-- <a href="pesanan.php">PESANAN</a> -->
              <a href="minumancustomer.php">MINUMAN</a>   
            </li>
            <li>
              <!-- <a href="loc.php">LOC</a> -->
              
            </li>

            <li class="active">
              <!-- <a href="formcheck.php">FORM CHECK</a> -->
              <a href="trackercustomer.php">TRACKER</a>  
            </li>

            <li>
              <!-- <a href="formcheck.php">FORM CHECK</a> -->
              <a href="pengirimancustomer.php">PENGIRIMAN</a>  
            </li>

            
            
                  </ul>

              </div>


          </div>

      </div>
  </div>

  <div id="content">
      <div class="container">
          <div class="col-md-12">
              <ul class="breadcrumb">
                  <li class="li"><a href="index.php">Home</a></li>
                  <li class="li">Data Tracker</li>
              </ul>
          </div>

          <div class="col-md-3">
              <?php 
include('customer/includes/sidebarcustomer.php');
?>
          </div>


          <div class="col-md-9">
              <div class="box">
                  <div class="box-header">
                  
                  <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d880.6458635979062!2d114.83865451466092!3d-3.4426050847083847!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2de6810e0dd24655%3A0x2215ddf913489f76!2sRumah%20Makan%20Top%20Koki!5e0!3m2!1sid!2sid!4v1596855773256!5m2!1sid!2sid" width="770" height="450" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>

                </div>

                  </div>
              </div>
          </div>




      </div>
  </div>

  <?php 
include("includes/footer.php");
?>




  <script src="js/jquery-331.min.js"></script>
  <script src="js/bootstrap-337.min.js"></script>
  <!-- WhatsHelp.io widget -->
  <script async data-id="8642" src="https://cdn.widgetwhats.com/script.min.js"></script>
  <!-- /WhatsHelp.io widget -->
  <!-- <script src="jquery.min.js"></script>
  <script src="https://unpkg.com/leaflet@1.6.0/dist/leaflet.js" integrity="sha512-gZwIG9x3wUXg2hdXF6+rVkLF/0Vi9U8D2Ntg4Ga5I5BZpVkVxlJWbSQtXPSiUTtC0TjtGOmxa1AJPuV0CPthew=="
   crossorigin=""></script>
   <script type="text/javascript">
    var mymap = L.map('mapid').setView([-3.3172208,114.559193], 10);
    L.tileLayer('https://api.mapbox.com/styles/v1/{id}/tiles/{z}/{x}/{y}?access_token={accessToken}', {
    attribution: 'Map data &copy; <a href="https://www.openstreetmap.org/">OpenStreetMap</a> contributors, <a href="https://creativecommons.org/licenses/by-sa/2.0/">CC-BY-SA</a>, Imagery © <a href="https://www.mapbox.com/">Mapbox</a>',
    maxZoom: 18,
    id: 'mapbox/streets-v11',
    tileSize: 512,
    zoomOffset: -1,
    accessToken: 'pk.eyJ1IjoibWFwYm94IiwiYSI6ImNpejY4NXVycTA2emYycXBndHRqcmZ3N3gifQ.rJcFIG214AriISLbB6B5aw'
}).addTo(mymap);

var geojsonFeature = {
            "type": "Feature",
            "properties": {
                "name": "Coors Field",
                "amenity": "Baseball Stadium",
                "popupContent": "This is where the Rockies play!"
            },
            "geometry": {
                "type": "Point",
                "coordinates": [114.839579, -3.442869]
            }

// function popUp(f,l){
//     var out = [];
//     if (f.properties){
//         for(key in f.properties){
//             out.push(key+": "+f.properties[key]);
//         }
//         l.bindPopup(out.join("<br />"));
//     }
// }
// var jsonTest = new L.GeoJSON.AJAX(["colleges.geojson","counties.geojson"],{onEachFeature:popUp}).addTo(m);
};
            L.geoJSON(geojsonFeature).addTo(mymap);
   </script> -->

</body>

</html>