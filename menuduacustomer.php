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
                    <div class="col-md-4 col-sm-6 center-responsive">
                        <div class="product">
                            <a href="details.php">
                                <?php
                                $gambar1 = query("SELECT * FROM stok_makanan_masuk")[6];
                                ?>
                                <img src="img/<?php echo $gambar1['gambar']; ?>" class="img-responsive" alt="product">
                            </a>
                            <div class="text">
                                <h3>
                                    <a href="">Kerang</a>
                                </h3>
                                <p href="price">

                                    <?php
                                    $makanbakso = query("SELECT harga FROM detail_order")[6];
                                    ?>
                                    <h4>Rp : <?php echo $makanbakso['harga']; ?></h4>
                                    <?php $detailskerang = query("SELECT * FROM detail_order")[6]; ?>

                                </p>
                                <a href="detailskerangcustomer.php?id=<?php echo $detailskerang['id_detail']; ?>" class="btn btn-default">View Details</a>
                                <a href="kerangcustomer.php" class="btn btn-primary">
                                    Pesan
                                </a>
                            </div>
                        </div>
                    </div>


                    <div class="col-md-4 col-sm-6 center-responsive">
                        <div class="product">
                            <a href="details.php">
                                <?php
                                $gambar2 = query("SELECT * FROM stok_makanan_masuk")[7];
                                ?>
                                <img src="img/<?php echo $gambar2['gambar']; ?>" class="img-responsive" alt="product">
                            </a>
                            <div class="text">
                                <h3>
                                    <a href="">Nasi Kuning</a>
                                </h3>
                                <p href="price">
                                    <?php
                                    $cumi = query("SELECT harga FROM detail_order")[7];
                                    ?>
                                    <h4>Rp : <?php echo $cumi['harga']; ?></h4>
                                    <?php $detailskerang = query("SELECT * FROM detail_order")[7]; ?>
                                </p>
                                <a href="detailsnasikuningcustomer.php?id=<?php echo $detailskerang['id_detail']; ?>" class="btn btn-default">View Details</a>
                                <a href="nasikuningcustomer.php" class="btn btn-primary">
                                    Pesan
                                </a>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-4 col-sm-6 center-responsive">
                        <div class="product">
                            <a href="details.php">
                                <?php
                                $gambar3 = query("SELECT * FROM stok_makanan_masuk")[8];
                                ?>
                                <img src="img/<?php echo $gambar3['gambar']; ?>" class="img-responsive" alt="product">
                            </a>
                            <div class="text">
                                <h3>
                                    <a href="">Nasi Padang</a>
                                </h3>
                                <p href="price">
                                    <?php
                                    $gadogado = query("SELECT * FROM detail_order")[8];
                                    ?>

                                    <h4>Rp : <?php echo $gadogado['harga']; ?></h4>
                                    <?php $detailskerang = query("SELECT * FROM detail_order")[8]; ?>
                                </p>
                                <a href="detailsnasipadangcustomer.php?id=<?php echo $detailskerang['id_detail']; ?>" class="btn btn-default">View Details</a>
                                <a href="nasipadangcustomer.php" class="btn btn-primary">
                                    Pesan
                                </a>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-4 col-sm-6 center-responsive">
                        <div class="product">
                            <a href="details.php">
                                <?php $gambar4 = query("SELECT * FROM stok_makanan_masuk")[9]; ?>
                                <img src="img/<?php echo $gambar4['gambar']; ?>" class="img-responsive" alt="product">
                            </a>
                            <div class="text">
                                <h3>
                                    <a href="">Rawon</a>
                                </h3>
                                <p href="price">
                                    <?php
                                    $kerang = query("SELECT harga FROM detail_order")[9];

                                    ?>

                                    <h4>Rp : <?php echo $kerang['harga']; ?></h4>
                                    <?php $detailskerang = query("SELECT * FROM detail_order")[9]; ?>
                                </p>
                                <a href="detailsrawoncustomer.php?id=<?php echo $detailskerang['id_detail']; ?>" class="btn btn-default">View Details</a>
                                <a href="rawoncustomer.php" class="btn btn-primary">
                                    Pesan
                                </a>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-4 col-sm-6 center-responsive">
                        <div class="product">
                            <a href="details.php">
                                <?php $gambar5 = query("SELECT * FROM stok_makanan_masuk")[10]; ?>
                                <img src="img/<?php echo $gambar5['gambar']; ?>" class="img-responsive" alt="product">
                            </a>
                            <div class="text">
                                <h3>
                                    <a href="">Sup Buntut</a>
                                </h3>
                                <p href="price">
                                    <?php $rendang = query("SELECT harga FROM detail_order")[10]; ?>
                                </p>

                                <h4>Rp : <?php echo $rendang['harga']; ?></h4>
                                <?php $detailskerang = query("SELECT * FROM detail_order")[10]; ?>
                                <a href="detailsbuntutcustomer.php?id=<?php echo $detailskerang['id_detail']; ?>" class="btn btn-default">View Details</a>
                                <a href="supbuntutcustomer.php" class="btn btn-primary">
                                    pesan
                                </a>
                            </div>
                        </div>
                    </div>


                    <div class="col-md-4 col-sm-6 center-responsive">
                        <div class="product">
                            <a href="details.php">
                                <?php $gambar6 = query("SELECT * FROM stok_makanan_masuk")[11]; ?>
                                <img src="img/<?php echo $gambar6['gambar']; ?>" class="img-responsive" alt="product">
                            </a>
                            <div class="text">
                                <h3>
                                    <a href="">Sate Ayam</a>
                                </h3>
                                <p href="price">
                                    <?php $nasikuning = query("SELECT harga FROM detail_order")[11]; ?>
                                </p>

                                <h4>Rp : <?php echo $nasikuning['harga']; ?></h4>
                                <?php $detailskerang = query("SELECT * FROM detail_order")[11]; ?>
                                <a href="detailssateayamcustomer.php?id=<?php echo $detailskerang['id_detail']; ?>" class="btn btn-default">View Details</a>
                                <a href="sateayamcustomer.php" class="btn btn-primary">
                                    pesan
                                </a>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
            <!-- order end -->

            <center>
                <ul class="pagination">
                    <li><a href="#">First Page</a></li>
                    <li><a href="makanancustomer.php">1</a></li>
                    <li><a href="menuduacustomer.php">2</a></li>

                    <li><a href="menuenam.php">Last Page</a></li>
                </ul>
            </center>
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