<?php 

require 'function.php';

session_start();

if(!isset($_SESSION['login']))
{
  header("location:login.php");
  exit;
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

<style>
    .box {
        border-radius: 20px;
    }
</style>

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

                        <li class="active">
                            <a href="index.php">BERANDA</a>
                        </li>

                        <li>
                            <a href="record.php">DATA RECORD</a>
                        </li>
                        <li>
                            <a href="pegawai.php">DATA PEGAWAI</a>
                        </li>
                        <li>
                            <a href="gi.php">GI ALL ITEMS</a>
                        </li>
                        <li>
                            <a href="monitoring.php">MONITORING ST</a>
                        </li>



                    </ul>

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
        $run_slider = mysqli_query($conn,$get_slides);
        while($row_slides = mysqli_fetch_array($run_slider))
        {
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
        $run_slides = mysqli_query($conn,$get_slides);
        while($row_slides = mysqli_fetch_array($run_slides))
        {
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
        $run_slides = mysqli_query($conn,$get_slides);
        while($row_slides = mysqli_fetch_array($run_slides))
        {
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

                        <p>yuansandra1</p>

                    </div>

                </div>

                <div class="col-sm-4">

                    <div class="box same-height">

                        <div class="icon">



                        </div>

                        <h3><a href="#">WHATSAPP</a></h3>

                        <p>0895-3835-56258</p>

                    </div>

                </div>

                <div class="col-sm-4">

                    <div class="box same-height">

                        <div class="icon">



                        </div>

                        <h3><a href="#">ALAMAT</a></h3>

                        <p>Banjarmasin-Kalimantan Selatan</p>

                    </div>

                </div>

            </div>

        </div>

    </div>


    <div id="hot">
        <div class="box">
            <div class="container">
                <div class="col-md-12">
                    <h2>CKB LOGISTICS</h2>
                </div>
            </div>
        </div>
    </div>



    <div id="content" class="container">
        <div class="row">

            <div class="col-md-3">
                <?php 
  include('customer/includes/sidebar.php');
   ?>
            </div>

            <div class="col-md-9">
                <div class="box">
                    <div class="box-header">

                        <table class="table table-striped table-bordered">
                            <thead>
                                <tr class="info text-center">
                                    <th scope="col">No</th>
                                    <th scope="col">Delivery</th>
                                    <th scope="col">Ship-to party</th>
                                    <th scope="col">Name of the ship-to party</th>
                                    <th scope="col">Picking Date</th>
                                    <th scope="col">Status Doc Keluar</th>

                                </tr>
                            </thead>


                            <tbody>
                                <tr>
                                    <td>1</td>
                                    <td>3700592951</td>
                                    <td>0000001A10</td>
                                    <td>JAKARTA - TU</td>
                                    <td>29/11/2019</td>
                                    <td>V</td>
                                </tr>

                        </table>
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