<?php 



session_start();

if(!isset($_SESSION['login']))
{
  header("location:login.php");
  exit;
}


require 'functionmakan.php';

$pesanan = query("SELECT * FROM pemesanan ORDER BY id_order DESC");

if(isset($_POST['submit']))
{
	$pesanan = caripesanan($_POST['search']);
}


?>


<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>PEMESANAN MAKANAN</title>
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

                  <li class="active">
              <!-- <a href="pesanan.php">PESANAN</a> -->
              <a href="supplier.php">SUPPLIER</a>   
            </li>
          <li >
              <a href="index.php">HOME</a>
              
            </li>
          
            <li>
              <!-- <a href="admin.php">MENU</a> -->
              <a href="makanan.php">MAKANAN</a>
            </li>

            <li>
              <!-- <a href="pesanan.php">PESANAN</a> -->
              <a href="minuman.php">MINUMAN</a>   
            </li>
            <li>
              <!-- <a href="loc.php">LOC</a> -->
              
            </li>
            <li>
              <!-- <a href="formcheck.php">FORM CHECK</a> -->
              <a href="tracker.php">TRACKER</a>  
            </li>

            <li>
              <!-- <a href="formcheck.php">FORM CHECK</a> -->
              <a href="pengiriman.php">PENGIRIMAN</a>  
            </li>
            
            <form class="navbar-form navbar-left" method="post">
            <div class="form-group">
		<input type="text" class="form-control" name="search" placeholder="Search" autocomplete="off" autofocus>
    </div>
		<button type="submit" name="submit" class="btn btn-info">Search</button>
	</form>
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
                  <li class="li">Data Nasi Goreng</li>
              </ul>
          </div>

          <div class="col-md-3">
              <?php 
include('customer/includes/sidebar.php');
?>
          </div>


          <div class="col-md-9">
              <div class="box">
                  <div class="box-header">
                  <div class="row">
                    <div class="col-md-4 col-sm-6 center-responsive">
                    <div class="product">
                        <a href="details.php">
                        <?php
                            $gambar1 = query("SELECT * FROM stok_makanan_masuk")[1];
                        ?>
                        <img src="img/<?php echo $gambar1['gambar']; ?>" class="img-responsive" alt="product">
                        </a>
                        
                        </div>
                        </div>
        
                        <div class="col-sm-6">
                    <div class="box">
                        <?php $nama = query("SELECT * FROM detail_order")[1] ?>
                        <h2 class="text-center"><?php echo $nama['menu']; ?></h2>
                        <br>
                            <h4 style="font-weight: bold; font-style:italic">Harga : <?php echo $nama['harga']; ?></h4>
                            <h4 style="font-weight: bold; font-style:italic">Stok : In Stok (<?php echo $nama['stok']; ?>)</h4>
                            <h4 style="font-weight: bold; font-style:italic">Keterangan : <?php echo $nama['keterangan']; ?></h4>
                        </div>
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


</body>

</html>