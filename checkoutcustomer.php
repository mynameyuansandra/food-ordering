<?php

require_once 'functionmakan.php';
session_start();
$nama = $_SESSION['username'];
$cart = query("SELECT * FROM pemesanan WHERE nama_pelanggan = '$nama'");
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>CHECKOUT</title>
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

                        <li>
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
                    <li class="li">Data Checkout</li>
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
                        <table class="table table-bordered">
                            <thead>
                                <tr>
                                    <th colspan="">Nama</th>
                                    <th>Kode</th>
                                    <th>Alamat</th>
                                    <th>Jumlah Pesan</th>
                                    <th>Harga</th>
                                    <th>Tanggal</th>
                                    <th>Nama Makanan</th>
                                    <th>Aksi</th>

                                </tr>
                            </thead>
                            <!-- looping php -->

                            <?php
                            $stok_sks = 0;
                            $stok_jumlah = 0;
                            $stok_angka = 0;
                            foreach ($cart as $row) :
                                $stok_sks += $row['harga'];
                                $stok_jumlah += $row['jumlah_pesan'];
                            ?>
                                <tbody>
                                    <tr>

                                        <td><a href="#"><?php echo $row['nama_pelanggan']; ?></a></td>
                                        <td><?php echo $row['id_order']; ?></td>
                                        <td><?php echo $row['alamat']; ?></td>
                                        <td><?php echo $row['jumlah_pesan']; ?></td>
                                        <td><?php echo $row['harga']; ?></td>
                                        <td><?php echo $row['tanggal']; ?></td>
                                        <td><?php echo $row['nama_makanan']; ?></td>
                                        <td>
                                            <a href="konfirmasipembayarancustomer.php?id=<?php echo $row['id_order']; ?>" class="btn btn-primary" style="margin-bottom:20px;" target="_blank">
                                                Pembayaran
                                            </a>
                                        </td>

                                    </tr>
                                <?php endforeach; ?>
                                <!-- tfoot -->
                                </tbody>

                                <tfoot>
                                    <tr class="active">
                                        <th colspan="6">Total :</th>
                                        <th><?php echo $stok_sks; ?></th>
                                    </tr>
                                </tfoot>
                                <!-- tfoot -->
                                <div class="pull-right">
                                    <a href="cetakcheckoutcustomer.php" class="btn btn-primary" style="margin-bottom:20px;" target="_blank">
                                        Cetak <i class="fa fa-chevron-right"></i>
                                    </a>


                                </div>
                        </table>


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