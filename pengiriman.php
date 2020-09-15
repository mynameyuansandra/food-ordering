<?php

require_once 'functionmakan.php';

if (isset($_POST['btnpengiriman'])) {
    if (pengiriman($_POST) > 0) {
        echo "<script>
            alert('Pengiriman Data Berhasil !');
            window.location.href='pengiriman.php';
        </script>";
    } else {

        echo "<script>
            alert('Pengiriman Data Gagal !');
            window.location.href='pengiriman.php';
        </script>";
    }
}

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>PENGIRIMAN</title>
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

                        <li class="active">
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
                    <li class="li">Data Pengiriman</li>
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
                                    <div class="input-group-addon btn-primary">id pengiriman :</div>
                                    <select name="idorder" id="" class="form-control">
                                        <?php
                                        $stoksupplier = mysqli_query($conn, "SELECT * FROM pemesanan");
                                        while ($row = mysqli_fetch_assoc($stoksupplier)) {
                                            echo "<option value ='" . $row['id_order'] . "'>" . $row['id_order'] . "</option>";
                                        }
                                        ?>
                                    </select>
                                </div>
                            </div>



                            <div class="form-group">
                                <div class="input-group">
                                    <?php
                                    $con = mysqli_connect("localhost", "root", "", "skripsimakanan");
                                    ?>
                                    <div class="input-group-addon btn-primary">menu_makanan :</div>
                                    <select name="namapelanggan" id="stok_menu_makanan" class="form-control" onchange='changeValue(this.value)' required>
                                        <option value="">--pilih--</option>
                                        <?php
                                        $query = mysqli_query($con, "select * from pemesanan order by nama_pelanggan esc");
                                        $result = mysqli_query($con, "select * from pemesanan");
                                        $a          = "var alamat = new Array();\n;";
                                        $b          = "var jumlah_pesan = new Array();\n;";
                                        $c          = "var harga = new Array();\n;";

                                        while ($row = mysqli_fetch_array($result)) {
                                            echo '<option name="nama_pelanggan" value="' . $row['nama_pelanggan'] . '">' . $row['nama_pelanggan'] . '</option>';
                                            $a .= "alamat['" . $row['nama_pelanggan'] . "'] = {alamat:'" . addslashes($row['alamat']) . "'};\n";
                                            $b .= "jumlah_pesan['" . $row['nama_pelanggan'] . "'] = {jumlah_pesan:'" . addslashes($row['jumlah_pesan']) . "'};\n";
                                            $c .= "harga['" . $row['nama_pelanggan'] . "'] = {harga:'" . addslashes($row['harga']) . "'};\n";
                                        }
                                        ?>
                                    </select>
                                </div>
                            </div>

                            <div class="form-group">
                                <div class="input-group">
                                    <div class="input-group-addon btn-primary">Alamat:</div>
                                    <input type="text" class="form-control" id="alamat" name="alamat" placeholder="" readonly="">
                                </div>
                            </div>

                            <div class="form-group">
                                <div class="input-group">
                                    <div class="input-group-addon btn-primary">Jumlah Pesan :</div>
                                    <input type="text" class="form-control" name="jumlah_pesan" id="jumlah_pesan" readonly="">
                                </div>
                            </div>

                            <div class="form-group">
                                <div class="input-group">
                                    <div class="input-group-addon btn-primary">Harga :</div>
                                    <input type="text" class="form-control" name="harga" id="harga" readonly="">
                                </div>
                            </div>

                            <button type="submit" name="btnpengiriman" class="btn btn-success">Input Data</button>
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
    <script type="text/javascript">
        <?php
        echo $a;
        echo $b;
        echo $c;
        ?>

        function changeValue(id) {
            document.getElementById('alamat').value = alamat[id].alamat;
            document.getElementById('jumlah_pesan').value = jumlah_pesan[id].jumlah_pesan;
            document.getElementById('harga').value = harga[id].harga;

        };
    </script>

</body>

</html>