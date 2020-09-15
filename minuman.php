<?php

include 'functionmakan.php';



?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>MINUMAN</title>
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
                            <a href="supplier.php">DATA GUDANG</a>
                        </li>
                        <li>
                            <!-- <a href="pesanan.php">PESANAN</a> -->
                            <a href="customer.php">CUSTOMER</a>
                        </li>
                        <li>
                            <a href="index.php">HOME</a>

                        </li>

                        <li>
                            <!-- <a href="admin.php">MENU</a> -->
                            <a href="makanan.php">MAKANAN</a>
                        </li>

                        <li class="active">
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


            </div>

        </div>
    </div>

    <div id="content">
        <div class="container">
            <div class="col-md-12">
                <ul class="breadcrumb">
                    <li class="li"><a href="index.php">Home</a></li>
                    <li class="li">Data Minuman</li>
                </ul>
            </div>

            <div class="col-md-3">
                <?php
                include('customer/includes/sidebar.php');
                ?>
            </div>

            <!-- order -->
            <div class="col-md-9">
                <div class="box">
                    <h1>Menu Minuman</h1>
                    <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Deleniti reiciendis corrupti quos maiores, repudiandae iste itaque ducimus beatae odio tempora magnam, dolores officia fugiat. Voluptate neque dolorem odit autem minima.</p>
                </div>
                <!-- order -->
                <div class="row">
                    <div class="col-md-4 col-sm-6 center-responsive">
                        <div class="product">
                            <a href="details.php">
                                <?php
                                $gambar1 = query("SELECT * FROM stok_makanan_masuk")[12];
                                ?>
                                <img src="img/<?php echo $gambar1['gambar']; ?>" class="img-responsive" alt="product">
                            </a>
                            <div class="text">
                                <h3>
                                    <a href="">Ice Tea</a>
                                </h3>
                                <p href="price">

                                    <?php
                                    $makanbakso = query("SELECT harga FROM detail_order")[12];
                                    ?>
                                    <h4>Rp : <?php echo $makanbakso['harga']; ?></h4>
                                    <?php $detailscireng = query("SELECT * FROM detail_order")[12]; ?>

                                </p>
                                <a href="detailsicetea.php?id=<?php echo $detailscireng['id_detail']; ?>" class="btn btn-default">View Details</a>
                                <a href="icetea.php" class="btn btn-primary">
                                    Pesan
                                </a>
                            </div>
                        </div>
                    </div>


                    <div class="col-md-4 col-sm-6 center-responsive">
                        <div class="product">
                            <a href="details.php">
                                <?php
                                $gambar2 = query("SELECT * FROM stok_makanan_masuk")[13];
                                ?>
                                <img src="img/<?php echo $gambar2['gambar']; ?>" class="img-responsive" alt="product">
                            </a>
                            <div class="text">
                                <h3>
                                    <a href="">Ice Tea Strawberry</a>
                                </h3>
                                <p href="price">
                                    <?php
                                    $cumi = query("SELECT harga FROM detail_order")[13];
                                    ?>
                                    <h4>Rp : <?php echo $cumi['harga']; ?></h4>
                                    <?php $detailscireng = query("SELECT * FROM detail_order")[13]; ?>
                                </p>
                                <a href="detailsstrawberry.php?id=<?php echo $detailscireng['id_detail']; ?>" class="btn btn-default">View Details</a>
                                <a href="strawberry.php" class="btn btn-primary">
                                    Pesan
                                </a>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-4 col-sm-6 center-responsive">
                        <div class="product">
                            <a href="details.php">
                                <?php
                                $gambar3 = query("SELECT * FROM stok_makanan_masuk")[14];
                                ?>
                                <img src="img/<?php echo $gambar3['gambar']; ?>" class="img-responsive" alt="product">
                            </a>
                            <div class="text">
                                <h3>
                                    <a href="">Lemon Ice Tea</a>
                                </h3>
                                <p href="price">
                                    <?php
                                    $gadogado = query("SELECT * FROM detail_order")[14];
                                    ?>

                                    <h4>Rp : <?php echo $gadogado['harga']; ?></h4>
                                    <?php $detailscireng = query("SELECT * FROM detail_order")[14]; ?>
                                </p>
                                <a href="detailslemontea.php?id=<?php echo $detailscireng['id_detail']; ?>" class="btn btn-default">View Details</a>
                                <a href="lemonicetea.php" class="btn btn-primary">
                                    Pesan
                                </a>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-4 col-sm-6 center-responsive">
                        <div class="product">
                            <a href="details.php">
                                <?php $gambar4 = query("SELECT * FROM stok_makanan_masuk")[15]; ?>
                                <img src="img/<?php echo $gambar4['gambar']; ?>" class="img-responsive" alt="product">
                            </a>
                            <div class="text">
                                <h3>
                                    <a href="">Teh Tarik</a>
                                </h3>
                                <p href="price">
                                    <?php
                                    $kerang = query("SELECT harga FROM detail_order")[15];
                                    ?>

                                    <h4>Rp : <?php echo $kerang['harga']; ?></h4>
                                    <?php $detailscireng = query("SELECT * FROM detail_order")[15]; ?>
                                </p>
                                <a href="detailstehtarik.php?id=<?php echo $detailscireng['id_detail']; ?>" class="btn btn-default">View Details</a>
                                <a href="tehtarik.php" class="btn btn-primary">
                                    Pesan
                                </a>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-4 col-sm-6 center-responsive">
                        <div class="product">
                            <a href="details.php">
                                <?php $gambar5 = query("SELECT * FROM stok_makanan_masuk")[16]; ?>
                                <img src="img/<?php echo $gambar5['gambar']; ?>" class="img-responsive" alt="product">
                            </a>
                            <div class="text">
                                <h3>
                                    <a href="">Thai Tea Boba</a>
                                </h3>
                                <p href="price">
                                    <?php $rendang = query("SELECT harga FROM detail_order")[16]; ?>
                                </p>

                                <h4>Rp : <?php echo $rendang['harga']; ?></h4>
                                <?php $detailscireng = query("SELECT * FROM detail_order")[16]; ?>
                                <a href="detailsteaboba.php?id=<?php echo $detailscireng['id_detail']; ?>" class="btn btn-default">View Details</a>
                                <a href="thaiteaboba.php" class="btn btn-primary">
                                    pesan
                                </a>
                            </div>
                        </div>
                    </div>


                    <div class="col-md-4 col-sm-6 center-responsive">
                        <div class="product">
                            <a href="details.php">
                                <?php $gambar6 = query("SELECT * FROM stok_makanan_masuk")[17]; ?>
                                <img src="img/<?php echo $gambar6['gambar']; ?>" class="img-responsive" alt="product">
                            </a>
                            <div class="text">
                                <h3>
                                    <a href="">Es Campur</a>
                                </h3>
                                <p href="price">
                                    <?php $nasikuning = query("SELECT harga FROM  detail_order")[17]; ?>
                                </p>

                                <h4>Rp : <?php echo $nasikuning['harga']; ?></h4>
                                <?php $detailscireng = query("SELECT * FROM detail_order")[17]; ?>
                                <a href="detailsescampur.php?id=<?php echo $detailscireng['id_detail']; ?>" class="btn btn-default">View Details</a>
                                <a href="escampur.php" class="btn btn-primary">
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
                    <li><a href="minuman.php">1</a></li>


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