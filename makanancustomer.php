<?php

include 'functionmakan.php';



?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>MAKANAN</title>
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

                        <li>
                            <!-- <a href="pesanan.php">PESANAN</a> -->
                            <a href="homecustomer.php">CUSTOMER</a>
                        </li>
                        <li>
                            <a href="indexcustomer.php">HOME</a>

                        </li>

                        <li class="active">
                            <!-- <a href="admin.php">MENU</a> -->
                            <a href="makanancustomer.php">MAKANAN</a>
                        </li>

                        <li>
                            <!-- <a href="pesanan.php">PESANAN</a> -->
                            <a href="minumancustomer.php">MINUMAN</a>
                        </li>
                        <li>
                            <!-- <a href="loc.php">LOC</a> -->

                        </li>

                        <li>
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
                    <li class="li">Data Makanan</li>
                </ul>
            </div>

            <div class="col-md-3">
                <?php
                include('customer/includes/sidebarcustomer.php');
                ?>
            </div>

            <!-- order -->
            <div class="col-md-9">
                <div class="box">
                    <h1>Menu Makanan</h1>
                    <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Deleniti reiciendis corrupti quos maiores, repudiandae iste itaque ducimus beatae odio tempora magnam, dolores officia fugiat. Voluptate neque dolorem odit autem minima.</p>
                </div>
                <!-- order -->
                <div class="row">
                    <?php
                    $products = query("SELECT * FROM stok_makanan_masuk");

                    foreach ($products as $key => $product) {
                    ?>
                        <div class="col-md-4 col-sm-6 center-responsive">
                            <div class="product">
                                <a href="details.php">

                                    <img src="img/<?php echo $product['gambar']; ?>" class="img-responsive" alt="product">
                                </a>
                                <div class="text">
                                    <h3>
                                        <a href="#"><?= $product['nama_makanan'] ?></a>
                                    </h3>
                                    <p href="price">
                                        <h4>Rp : <?= $product['harga']; ?></h4>

                                    </p>

                                    <a href="detailmakanan.php?q=<?php echo $product['nama_makanan']; ?>&id=<?= $product['id_stok_makanan'] ?>" class="btn btn-default">View Details</a>
                                    <a href="pesanmakanancustomer.php?id=<?= $product['id_stok_makanan'] ?>" class="btn btn-primary">
                                        Pesan
                                    </a>
                                </div>
                            </div>
                        </div>
                    <?php
                    }
                    ?>

                </div>
            </div>
            <!-- order end -->
        </div>
    </div>
    </div>
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