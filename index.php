<?php
session_start();

if (!isset($_SESSION['login'])) {
  header("location:login.php");
  exit;
}


require 'function.php';

$monitoring = query("SELECT * FROM pesanan ORDER BY id_pesanan DESC");


if (isset($_POST['submit'])) {
  $monitoring = cariindex($_POST['search']);
}

?>



<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>HOME</title>
  <link rel="stylesheet" href="styles/bootstrap-337.min.css">
  <link rel="stylesheet" href="font-awsome/css/font-awesome.min.css">
  <link rel="stylesheet" href="style.css">

  <style>
    .box {
      border-radius: 20px;
    }
  </style>
</head>

<body>

  <div id="top">

    <div class="container">

      <div class="col-md-6 offer">

        <a href="#" class="btn btn-success btn-sm">Welcome</a>
        <a href="checkout.php"></a>

      </div>

      <div class="col-md-6">

        <ul class="menu">

          <li>
            <a href="logincustomer.php" class="customer">Login Customer</a>
          </li>

          <li>
            <a href="registrasi.php" class="registrasi">Daftar</a>
          </li>
          <li>
            <a href="logout.php" class="logout">Logout</a>
          </li>



          <li>

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
              <a href="supplier.php">DATA GUDANG</a>
            </li>

            <li>
              <!-- <a href="pesanan.php">PESANAN</a> -->
              <a href="customer.php">CUSTOMER</a>
            </li>
            <li class="active">
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





          </ul>

        </div>

        <a href="cart.php" class="btn navbar-btn btn-primary right">
          <i class="fa fa-shopping-cart mr-auto"></i>
          <span>4 Items in Your Cart</span>
        </a>



        <div class="collapse clearfix" id="search">
          <form method="get" action="results.php" class="navbar-form"></form>
          <div class="input-group">
            <input type="text" class="form-control" placehorder="Search" name="user_query" required>
            <button type="submit" name="search" value="search" class="btn btn-primary">
              <i class="fa fa-search"></i>
            </button>
          </div>
          <div class="collapse clearfix" id="search">
            <form method="get" action="results.php" class="navbar-form">
              <div class="input-group">
                <input type="text" class="form-control" placeholder="search" name="user_query" required>
                <span class="input-group-btn">
                  <button type="submit" name="search" value="search" class="btn btn-primary">
                    <i class="fab fa-search"></i>
                  </button>
                </span>
              </div>
            </form>
          </div>
        </div>


      </div>
    </div>
  </div>

  <div class="container" id="slider">

    <div class="col-md-12">

      <div class="carousel slide" id="myCarousel" data-ride="carousel">

        <ol class="carousel-indicators">

          <li class="active" data-target="#myCarousel" data-slide-to="0"></li>
          <li data-target="#myCarousel" data-slide-to="1"></li>
          <li data-target="#myCarousel" data-slide-to="2"></li>
          <li data-target="#myCarousel" data-slide-to="3"></li>

        </ol>

        <div class="carousel-inner">


          <?php

          $get_slides = "SELECT * FROM slider LIMIT 0,1";
          $run_slider = mysqli_query($conn, $get_slides);
          while ($row_slides = mysqli_fetch_array($run_slider)) {
            $slide_name = $row_slides['slide_name'];
            $slide_image = $row_slides['slide_image'];

            echo
              "
          <div class = 'item active'>
          <img src = './slides_images/$slide_image'>
          </div>

          ";
          }

          $get_slides = "SELECT * FROM slider LIMIT 1,3";
          $run_slides = mysqli_query($conn, $get_slides);
          while ($row_slides = mysqli_fetch_array($run_slides)) {
            $slide_name = $row_slides['slide_name'];
            $slide_image = $row_slides['slide_image'];

            echo
              "
          <div class = 'item'>
          <img src = './slides_images/$slide_image'>
          </div>
          ";
          }


          $get_slides = "SELECT * FROM slider LIMIT 1,3";
          $run_slides = mysqli_query($conn, $get_slides);
          while ($row_slides = mysqli_fetch_array($run_slides)) {
            $slide_name = $row_slides['slide_name'];
            $slide_image = $row_slides['slide_image'];

            echo
              "
          <div class = 'item'>
          <img src = './slides_images/$slide_image'>
          </div>
          ";
          }



          ?>

        </div>

        <a href="#myCarousel" class="left carousel-control" data-slide="prev">

          <span class="glyphicon glyphicon-chevron-left"></span>
          <span class="sr-only">Previous</span>

        </a>

        <a href="#myCarousel" class="right carousel-control" data-slide="next">

          <span class="glyphicon glyphicon-chevron-right"></span>
          <span class="sr-only">Next</span>

        </a>

      </div>

    </div>

  </div>

  <div id="advantages">

    <div class="container">

      <div class="same-height-row">

        <div class="col-sm-4">

          <div class="box same-height">

            <div class="icon">



            </div>

            <h3><a href="#">INSTAGRAM</a></h3>

            <p><a href="instagram.com" class="btn btn-primary">yuan.sandra1</a></p>

          </div>

        </div>

        <div class="col-sm-4">

          <div class="box same-height">

            <div class="icon">



            </div>

            <h3><a href="#">WHATSAPP</a></h3>


            <p><a href="#" class="btn btn-primary"> 0895-3835-56258</a></p>

          </div>

        </div>

        <div class="col-sm-4">

          <div class="box same-height">

            <div class="icon">



            </div>

            <h3><a href="#">ALAMAT</a></h3>

            <p><a href="#" class="btn btn-primary"> Banjarmasin-kalimantan selatan</a></p>

          </div>

        </div>

      </div>

    </div>

  </div>


  <div id="hot">
    <div class="box">
      <div class="container">
        <div class="col-md-12">
          <h2>ORDERS</h2>
        </div>
      </div>
    </div>
  </div>



  <div id="content" class="container">
    <div class="row">

      <div class="col-sm-4 col-sm-6 single">
        <div class="product">
          <a href="details.php">
            <img src="images/satelilit.jpg" class="img-responsive" alt="product">
          </a>
          <div class="text">
            <h3>
              <a href="">Sate Bakar</a>
            </h3>
            <p href="price">Rp. 20000</p>
            <a href="details.php" class="btn btn-default">View Details</a>
            <a href="details.php" class="btn btn-primary">
              Add to Cart
            </a>
          </div>
        </div>
      </div>

      <div class="col-sm-4 col-sm-6 single">
        <div class="product">
          <a href="details.php">
            <img src="images/satelilit.jpg" class="img-responsive" alt="product">
          </a>
          <div class="text">
            <h3>
              <a href="">Sate Bakar</a>
            </h3>
            <p href="price">Rp. 20000</p>
            <a href="details.php" class="btn btn-default">View Details</a>
            <a href="details.php" class="btn btn-primary">
              Add to Cart
            </a>
          </div>
        </div>
      </div>

      <div class="col-sm-4 col-sm-6 single">
        <div class="product">
          <a href="details.php">
            <img src="images/satelilit.jpg" class="img-responsive" alt="product">
          </a>
          <div class="text">
            <h3>
              <a href="">Sate Bakar</a>
            </h3>
            <p href="price">Rp. 20000</p>
            <a href="details.php" class="btn btn-default">View Details</a>
            <a href="details.php" class="btn btn-primary">
              Add to Cart
            </a>
          </div>
        </div>
      </div>

      <div class="col-sm-4 col-sm-6 single">
        <div class="product">
          <a href="details.php">
            <img src="images/satelilit.jpg" class="img-responsive" alt="product">
          </a>
          <div class="text">
            <h3>
              <a href="">Sate Bakar</a>
            </h3>
            <p href="price">Rp. 20000</p>
            <a href="details.php" class="btn btn-default">View Details</a>
            <a href="details.php" class="btn btn-primary">
              Add to Cart
            </a>
          </div>
        </div>
      </div>

      <div class="col-sm-4 col-sm-6 single">
        <div class="product">
          <a href="details.php">
            <img src="images/satelilit.jpg" class="img-responsive" alt="product">
          </a>
          <div class="text">
            <h3>
              <a href="">Sate Bakar</a>
            </h3>
            <p href="price">Rp. 20000</p>
            <a href="details.php" class="btn btn-default">View Details</a>
            <a href="details.php" class="btn btn-primary">
              Add to Cart
            </a>
          </div>
        </div>
      </div>

      <div class="col-sm-4 col-sm-6 single">
        <div class="product">
          <a href="details.php">
            <img src="images/satelilit.jpg" class="img-responsive" alt="product">
          </a>
          <div class="text">
            <h3>
              <a href="">Sate Bakar</a>
            </h3>
            <p href="price">Rp. 20000 </p>
            <a href="details.php" class="btn btn-default">View Details</a>
            <a href="details.php" class="btn btn-primary">
              Add to Cart
            </a>
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
  <script async data-id="23136" src="https://cdn.widgetwhats.com/script.min.js"></script>
  <!-- /WhatsHelp.io widget -->


</body>

</html>

<!-- <?php
      include('customer/includes/sidebar.php');
      ?> -->