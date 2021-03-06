<?php

    require_once 'functionmakan.php';

    if(isset($_POST['registrasi']))
    {
        if(registrasi($_POST) > 0 )
        {
            echo "<script>
                alert('Berhasil registrasi');
                window.location.href='loginsatebakar.php';
            </script>";
        } else {
            echo "<script>
                alert('gagal registrasi');
                window.location.href='registrasimakanan.php';
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

                  <img src="images/ckb3.jpg" alt="M-dev-Store Logo" class="hidden-xs">
                  <img src="images/ckb3.jpg" alt="M-dev-Store Logo Mobile" class="visible-xs">


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

                  <li >
              <a href="index.php">BERANDA</a>
            </li>
          
            <li class="active">
              <a href="admin.php">MENU</a>
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
                  <li class="li">Data Administrasi</li>
              </ul>
          </div>

          <div class="col-md-3">
              <?php 
include('customer/includes/sidebar.php');
?>
          </div>

<!-- order -->
         <div class="col-md-9">
             <div id="productMain" class="row">
                 <div class="col-sm-6">
                     <div id="mainImage">
                         <div id="myCarousel" class="carousel slide" data-ride="carousel">
                             <ol class="carousel-indicators">
                                 <li data-target="#myCarousel" class="active" data-slide-to="0" ></li>
                                 <li data-target="#myCarousel" data-slide-to="1"></li>
                                 <li data-target="#myCarousel" data-slide-to="2"></li>
                             </ol>

                             <div class="carousel-inner">
                                 <div class="item active">
                                     <center><img class="img-responsive" src="images/satelilit.jpg" alt="Product 3-a"></center>
                                 </div>
                                 <div class="item">
                                     <center><img class="img-responsive" src="images/satelilit.jpg" alt=""></center>
                                 </div>
                                 <div class="item">
                                     <center><img class="img-responsive" src="images/satelilit.jpg" alt=""></center>
                                 </div>
                             </div>

                             <a href="#myCarousel" class="left carousel-control" data-slide="prev">
                                <span class="glyphicon glyphicon-chevron-left"></span>
                                <span class="sr-only">Previous</span>
                             </a>

                             <a href="#myCarousel" class="right carousel-control" data-slide="next">
                                <span class="glyphicon glyphicon-chevron-right"></span>
                                <span class="sr-only">Previous</span>
                             </a>
                         </div>
                     </div>
                 </div>

                <!-- form -->
                <div class="col-sm-6">
                    <div class="box">
                        <h1>Selamat Datang</h1>
                        <div class="login-content">
                        <form action="" method="post">

                        <div class="form-group">
                        <label for="nama">Username :</label>
                            <input type="text" name="username" class="form-control" placeholder="Masukkan username">
                        </div>
                        <div class="form-group">
                        <label for="nama">Password :</label>
                            <input type="password" name="password" class="form-control" placeholder="Masukkan password">
                        </div>
                        <div class="form-group">
                        <label for="nama">Password Confirm :</label>
                            <input type="password" name="password2" class="form-control" placeholder="Masukkan password">
                        </div>

                        <div class="form-group">
                        <label for="nama">Alamat :</label>
                            <input type="text" name="alamat" class="form-control" placeholder="Masukkan alamat">
                        </div>

                        
                            
                            <p class="text-center buttons"><button type="submit" class="btn btn-primary" name="registrasi">Login</button></p>
                        </form>
                        </div>
                    </div>

                    <!-- img thumbnails -->
                    <div class="row" id="thumbs">
                        
                        <div class="col-xs-4">
                        <a data-target="#myCarousel" data-slide-to="0" href="#" class="thumb">
                        <img src="images/satelilit.jpg" alt="product 1" class="img-responsive"></a>
                        </div>

                        <div class="col-xs-4">
                        <a data-target="#myCarousel" data-slide-to="1" href="#" class="thumb">
                        <img src="images/satelilit.jpg" alt="product 1" class="img-responsive"></a>
                        </div>

                        <div class="col-xs-4">
                        <a data-target="#myCarousel" data-slide-to="2" href="#" class="thumb">
                        <img src="images/satelilit.jpg" alt="product 1" class="img-responsive"></a>
                        </div>

                        
                    </div>
                    <!-- img thumbnails-->

                    

                </div>
                <!-- form -->

             </div>

             <div class="box" id="details">
                    <h4>Product Details</h4>
                <p>
                    Lorem ipsum dolor, sit amet consectetur adipisicing elit. Officiis fuga, odio rem nisi quaerat voluptas sequi labore eveniet doloribus? Aliquid explicabo libero voluptatem delectus corrupti perspiciatis aut eum debitis a!
                </p>

                <h4>Size</h4>
                <ul>
                    <li>Small</li>
                    <li>Medium</li>
                    <li>Large</li>
                </ul>
                <hr>
             </div>
             <!-- div#row#same-height-row>.col-md-3.col-sm-6>.box.same-height.headline>h3.text-center -->
             <!-- product you maybe like -->
             <div id="row same-height-row">
                 <div class="col-md-3 col-sm-6">
                     <div class="box same-height headline">
                         <h3 class="text-center">Product You Maybe Like</h3>
                     </div>
                 </div>
                 <!-- img -->
                 <div class="col-md-3 col-sm-6 center-responsive">
                     <div class="product same-height">
                     <a href="details.php">
                     <img class="img-responsive" src="images/satelilit.jpg" alt="product 6">
                     </a>

                     <div class="text">
                         <h3><a href="">Sate Lilit Momen</a></h3>
                         <p class="price">$50</p>
                     </div>

                     </div>
                 </div>
                 <!-- img -->

                  <!-- img -->
                  <div class="col-md-3 col-sm-6 center-responsive">
                     <div class="product same-height">
                     <a href="details.php">
                     <img class="img-responsive" src="images/satelilit.jpg" alt="product 6">
                     </a>

                     <div class="text">
                         <h3><a href="">Sate Lilit Momen</a></h3>
                         <p class="price">$50</p>
                     </div>

                     </div>
                 </div>
                 <!-- img -->

                  <!-- img -->
                  <div class="col-md-3 col-sm-6 center-responsive">
                     <div class="product same-height">
                     <a href="details.php">
                     <img class="img-responsive" src="images/satelilit.jpg" alt="product 6">
                     </a>

                     <div class="text">
                         <h3><a href="">Sate Lilit Momen</a></h3>
                         <p class="price">$50</p>
                     </div>

                     </div>
                 </div>
                 <!-- img -->
             </div>
             <!-- product you maybe like -->
             <!-- div#row#same-height-row>.col-md-3.col-sm-6>.box.same-height.headline>h3.text-center -->
         </div>
         <!-- order -->
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