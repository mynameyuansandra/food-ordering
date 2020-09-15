<?php 

require_once 'functionmakan.php';

if(isset($_POST['inputmakan']))
{
    if(inputmakanan($_POST) > 0)
    {
       echo "<script>
        alert('Data berhasil di input');
        windows.location.href='makanan.php';
       </script>";
    }
    else {
        echo "<script>
            alert('Data gagal di input');
            windows.location.href='inputmakanan.php';
        </script>";
    }
}

?>


<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>CKB LOGISTICS</title>
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

                  <img src="images/logo1.png" alt="M-dev-Store Logo" class="hidden-xs">
                  <img src="images/logo1.png" alt="M-dev-Store Logo Mobile" class="visible-xs">
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
              <a href="admin.php">TRACKER</a>  
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
                  <li class="li">Data Pesanan</li>
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

                      <form action="" method="post" enctype="multipart/form-data">
                       

                       

                      <div class="form-group">
                              <div class="input-group">
                                <div class="input-group-addon btn-primary">Menu Makan :</div>
                              <input type="text" class="form-control" name="menumakan" 
                                  placeholder="Masukkan Nama Makanan">
                              </div>
                          </div>

                          <div class="form-group">
                              <div class="input-group">
                                <div class="input-group-addon btn-primary">Images  :</div>
                              <input type="file" class="form-control" name="images">
                              </div>
                          </div>

                          <div class="form-group">
                              <div class="input-group">
                                <div class="input-group-addon btn-primary">Harga :</div>
                              <input type="number" class="form-control" name="harga" 
                                  placeholder="Harga">
                              </div>
                          </div>


                          <button type="submit" name="inputmakan" class="btn btn-success">Input Data</button>
                      </form>

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