<?php 

require 'function.php';

error_reporting(E_ALL ^ (E_NOTICE | E_WARNING));

session_start();

if(!isset($_SESSION['loginakun']))
{
  header("location:logingallery.php");
  exit;
}

   ?>



  <!DOCTYPE html>
  <html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>CKBLOGISTICS</title>
    <link rel="stylesheet" href="styles/bootstrap-337.min.css">
    <link rel="stylesheet" href="font-awsome/css/font-awesome.min.css">
    <link rel="stylesheet" href="style.css">
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
           <a href="logout1.php">Logout</a>
         </li>

       </ul>

     </div>
   </div>

 </div>

 <div id="navbar" class="navbar navbar-default">

   <div class="container">

     <div class="navbar-header">

       <a href="index.php" class="navbar-brand home">

       <img src="images/ckb3.jpg" alt="yuansandra Logo" class="hidden-xs">
          <img src="images/ckb3.jpg" alt="yuansandra Logo Mobile" class="visible-xs">

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

         <li class="">
              <a href="index.php">BERANDA</a>
            </li>
            
            <li  class="active">
           <a href="gallery.php">GALERI</a>
         </li>

            <li>
              <a href="admin.php">ADMIN</a>
            </li>

            <li>
              <a href="pesanan.php">PESANAN</a>
            </li>
            <li>
              <a href="loc.php">LOC</a>
            </li>
            <li>
              <a href="formcheck.php">FORM CHECK</a>
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
        <li class="li">Galeri</li>
      </ul>
    </div>

    <div class="col-md-3">
      <?php 
      include('customer/includes/sidebar.php');
      ?>
    </div>
  
    
    <div class="col-md-9">
      <div class="row">
        <div class="col-sm-6 col-md-4">
          <div class="thumbnail">
            <?php
              
             $gambar = query("SELECT * FROM lokasi")[0]; ?>
           <img id="zoom_01" class="img-fluid img-thumbnail" src="img/<?php echo $gambar['images']; ?>" >
           <div class="caption">
            <?php
              $id_lokasi = query("SELECT id_lokasi FROM lokasi")[0];
              $storagebin = query("SELECT storagebin FROM lokasi")[0];
            ?>
            <h4>Storagebin: <?php echo $storagebin['storagebin']; ?></h4>
            <p>Id_lokasi: <?php echo $id_lokasi['id_lokasi']; ?></p>            
          </div>
        </div>
      </div>

      <div class="col-sm-6 col-md-4">
        <div class="thumbnail">
          <?php          
           $gambar1 = query("SELECT * FROM lokasi")[1]; ?>
         <img id="zoom_02" class="img-fluid img-thumbnail" src="img/<?php echo $gambar1['images']; ?>">
         <div class="caption">
         <?php
              $id_lokasi = query("SELECT id_lokasi FROM lokasi")[1];
              $storagbin = query("SELECT storagebin FROM lokasi")[1];
            ?>
            <h4>storagebin: <?php echo $storagbin['storagebin']; ?></h4>
            <P>Id_lokasi: <?php echo $id_lokasi['id_lokasi']; ?></P>
        </div>
      </div>
    </div>

    <div class="col-sm-6 col-md-4">
      <div class="thumbnail">
        <?php $gambar2 = query("SELECT * FROM lokasi")[2]; ?>
       <img id="zoom_03" class="img-fluid img-thumbnail" src="img/<?php echo $gambar2['images']; ?>">
       <div class="caption">
       <?php
        $id_lokasi = query("SELECT id_lokasi FROM lokasi")[2];
        $storagebin = query("SELECT storagebin FROM lokasi")[2];
        ?>
        <h4>Storagebin : <?php echo $storagebin['storagebin']; ?></h4>
        <p>Id_lokasi: <?= $storagebin['id_lokasi']; ?></p>

      </div>
    </div>
  </div>

  <div class="col-sm-6 col-md-4">
    <div class="thumbnail">
      <?php $gambar3 = query("SELECT * FROM lokasi")[3]; ?>
     <img id="zoom_04" class="img-fluid img-thumbnail" src="img/<?php echo $gambar3['images']; ?>" alt="product 4">
     <div class="caption">
     <?php 
     $id_lokasi = query("SELECT id_lokasi FROM lokasi")[3];
     $storagebin = query("SELECT storagebin FROM lokasi")[3];
     ?>
     <h4>Storagebin: <?= $storagebin['storagebin']; ?></h4>
     <p>Id_lokasi: <?= $id_lokasi['id_lokasi']; ?></p>

    </div>
  </div>
</div>

<div class="col-sm-6 col-md-4">
  <div class="thumbnail">
    <?php $gambar4 = query("SELECT * FROM lokasi")[4]; ?>
   <img id="zoom_05" class="img-fluid img-thumbnail" src="img/<?php echo $gambar4['images']; ?>" alt="product 4">
   <div class="caption">
   <?php
    $id_lokasi = query("SELECT id_lokasi FROM lokasi")[4];
    $storagebin = query("SELECT storagebin FROM lokasi")[4];
   ?>

   <h4>Storagebin: <?= $storagebin['storagebin']; ?></h4>
   <p>Id_lokasi: <?= $id_lokasi['id_lokasi']; ?></p>

  </div>
</div>
</div>

<div class="col-sm-6 col-md-4">
  <div class="thumbnail">
    <?php $gambar5 = query("SELECT * FROM lokasi")[5]; ?>
   <img id="zoom_06" class="img-fluid img-thumbnail" src="img/<?php echo $gambar5['images']; ?>" alt="product 4">
   <div class="caption">
   <?php
    $id_lokasi = query("SELECT id_lokasi FROM lokasi")[5];
    $storagebin = query("SELECT storagebin FROM lokasi")[5];
   ?>

   <h4>Storagebin: <?= $storagebin['storagebin']; ?></h4>
   <p>Id_lokasi: <?= $id_lokasi['id_lokasi']; ?></p>

  </div>
</div>
</div>

<div class="col-sm-6 col-md-4">
  <div class="thumbnail">
    <?php $gambar6 = query("SELECT * FROM lokasi")[6]; ?>
   <img id="zoom_08" class="img-fluid img-thumbnail" src="img/<?php echo $gambar6['images']; ?>">
   <div class="caption">
   <?php
    $id_lokasi = query("SELECT id_lokasi FROM lokasi")[6];
    $storagebin = query("SELECT storagebin FROM lokasi")[6];
   ?>

   <h4>Storagebin: <?= $storagebin['storagebin']; ?></h4>
   <p>Id_lokasi: <?= $id_lokasi['id_lokasi']; ?></p>

  </div>
</div>
</div>

<div class="col-sm-6 col-md-4">
  <div class="thumbnail">
    <?php $gambar7 = query("SELECT * FROM lokasi")[7]; ?>
   <img id="zoom_08" class="img-fluid img-thumbnail" src="img/<?php echo $gambar7['images']; ?>" alt="product 4">
   <div class="caption">
   <?php
    $id_lokasi = query("SELECT id_lokasi FROM lokasi")[7];
    $storagebin = query("SELECT storagebin FROM lokasi")[7];
   ?>

   <h4>Storagebin: <?= $storagebin['storagebin']; ?></h4>
   <p>Id_lokasi: <?= $id_lokasi['id_lokasi']; ?></p>

  </div>
</div>
</div>

<div class="col-sm-6 col-md-4">
  <div class="thumbnail">
    <?php $gambar8 = query("SELECT * FROM lokasi")[8]; ?>
   <img id="zoom_09" class="img-fluid img-thumbnail" src="img/<?php echo $gambar8['images']; ?>" alt="product 4">
   <div class="caption">
   <?php
    $id_lokasi = query("SELECT id_lokasi FROM lokasi")[8];
    $storagebin = query("SELECT storagebin FROM lokasi")[8];
   ?>

   <h4>Storagebin: <?= $storagebin['storagebin']; ?></h4>
   <p>Id_lokasi: <?= $id_lokasi['id_lokasi']; ?></p>

  </div>
</div>
</div>

<div class="col-sm-6 col-md-4">
  <div class="thumbnail">
    <?php $gambar9 = query("SELECT * FROM lokasi")[9]; ?>
   <img id="zoom_09" class="img-fluid img-thumbnail" src="img_produk/<?php echo $gambar9['images']; ?>" alt="product 4">
   <div class="caption">
   <?php
    $id_lokasi = query("SELECT id_lokasi FROM lokasi")[9];
    $storagebin = query("SELECT storagebin FROM lokasi")[9];
   ?>

   <h4>Storagebin: <?= $storagebin['storagebin']; ?></h4>
   <p>Id_lokasi: <?= $id_lokasi['id_lokasi']; ?></p>

  </div>
</div>
</div>

<div class="col-sm-6 col-md-4">
  <div class="thumbnail">
    <?php $gambar10 = query("SELECT * FROM lokasi")[10]; ?>
   <img id="zoom_09" class="img-fluid img-thumbnail" src="img/<?php echo $gambar10['images']; ?>" alt="product 4">
   <div class="caption">
   <?php
    $id_lokasi = query("SELECT id_lokasi FROM lokasi")[10];
    $storagebin = query("SELECT storagebin FROM lokasi")[10];
   ?>

   <h4>Storagebin: <?= $storagebin['storagebin']; ?></h4>
   <p>Id_lokasi: <?= $id_lokasi['id_lokasi']; ?></p>
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
<script src="js_zoom/jquery-1.8.3.min.js"></script>
<script src="js_zoom/jquery.elevatezoom.js"></script>
<script>
    //$("#zoom_01").elevateZoom({easing:true});
    // $("#zoom_01").elevateZoom({zoomType: 'inner', cursor:'crosshair'});
    // $("#zoom_01").elevateZoom({zoomWindowPosition:13});
    //$("#zoom_01").elevateZoom({zoomType:'lens',lensShape: 'round', lensSize:150, scrollZoom: true});
    $("#zoom_01").elevateZoom({easing:true,scrollZoom: true});
    $("#zoom_02").elevateZoom({easing:true,scrollZoom: true});
    $("#zoom_03").elevateZoom({easing:true,scrollZoom: true});
    $("#zoom_04").elevateZoom({easing:true,scrollZoom: true});
    $("#zoom_05").elevateZoom({easing:true,scrollZoom: true});
    $("#zoom_06").elevateZoom({easing:true,scrollZoom: true});
    $("#zoom_07").elevateZoom({easing:true,scrollZoom: true});
    $("#zoom_08").elevateZoom({easing:true,scrollZoom: true});
    $("#zoom_09").elevateZoom({easing:true,scrollZoom: true});
    //$("#zoom_01").elevateZoom({scrollZoom: true});
  </script>

  <!-- WhatsHelp.io widget -->
  <script async data-id="8642" src="https://cdn.widgetwhats.com/script.min.js"></script>
  <!-- /WhatsHelp.io widget --> 

</body>
</html>