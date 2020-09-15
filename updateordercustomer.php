<?php

require_once 'functionmakan.php';

$id = $_GET['id'];
$updateorder = query("SELECT * FROM pemesanan WHERE id_order = $id")[0];

if (isset($_POST['btnupdateorder'])) {
    if (updateorder($_POST) > 0) {
        echo "<script>
            alert('Input Data Success !');
            window.location.href='detailpesanancustomer.php';
        </script>";
    } else {

        echo "<script>
            alert('Input Data Gagal !');
            window.location.href='detailpesanancustomer.php';
        </script>";
    }
}

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Order</title>
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
                    <li class="li">Data Pesanan</li>
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

                        <form action="" method="post" enctype="multipart/form-data">
                            <input type="hidden" name="id" readonly="" id="id" class="form-control" value="<?php echo $updateorder['id_order']; ?>">
                            <input type="hidden" name="gambarubah" readonly="" id="gambarubah" class="form-control" value="<?php echo $updateorder['id_order']; ?>">
                            <div class="form-group">
                                <div class="input-group">
                                    <div class="input-group-addon btn-primary">Nama Pelanggan :</div>
                                    <input type="text" class="form-control" name="namapelanggan" placeholder="" value="<?php echo $updateorder['nama_pelanggan']; ?>">
                                </div>
                            </div>


                            <div class="form-group">
                                <div class="input-group">
                                    <div class="input-group-addon btn-primary">Alamat :</div>
                                    <textarea name="alamat" class="form-control" id="alamat" cols="20" rows="5"><?php echo $updateorder['alamat']; ?></textarea>
                                </div>
                            </div>

                            <div class="form-group">
                                <div class="input-group">
                                    <div class="input-group-addon btn-primary">Jumlah Pesan :</div>
                                    <input type="number" class="form-control" name="jumlahpesan" placeholder="" readonly="" value="<?php echo $updateorder['jumlah_pesan']; ?>">
                                </div>
                            </div>

                            <div class="form-group">
                                <div class="input-group">
                                    <div class="input-group-addon btn-primary">Harga :</div>
                                    <input type="number" class="form-control" name="harga" placeholder="" readonly="" value="<?php echo $updateorder['harga']; ?>">
                                </div>
                            </div>

                            <div class="form-group">
                                <div class="input-group">
                                    <div class="input-group-addon btn-primary">Tanggal :</div>
                                    <input type="date" class="form-control" name="tanggal" placeholder="Masukkan nama pemesan" value="<?php echo $updateorder['tanggal']; ?>">
                                </div>
                            </div>

                            <div class="form-group">
                                <img src="img/<?php echo $updateorder['gambar']; ?>" width="100" alt=""><br><br>
                                <div class="input-group">
                                    <div class="input-group-addon btn-primary">Gambar :</div>
                                    <input type="file" class="form-control" name="gambar" id="gambar" placeholder="">
                                </div>
                            </div>


                            <button type="submit" name="btnupdateorder" class="btn btn-success">Input Data</button>
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