<?php

require_once 'functionmakan.php';

if (isset($_POST['btncustomer'])) {
    if (customer($_POST) > 0) {
        echo "<script>
            alert('Data Anda Berhasil Di Input !');
            window.location.href='customer.php';
        </script>";
    } else {

        echo "<script>
            alert(''Data Anda Gagal Di Input !');
            window.location.href='customer.php';
        </script>";
    }
}

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>CUSTOMER</title>
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
                            <a href="supplier.php">Data Gudang</a>
                        </li>

                        <li class="active">
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
                    <li class="li">Data Customer</li>
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
                        <div class="form-group">
                            <div class="input-group">

                                <div class="pull-right">
                                    <a href="#" id="cetak_keuntungan" class="btn btn-primary" style="margin-bottom:20px;" target="_blank">
                                        Cetak <i class="fa fa-chevron-right"></i>
                                    </a>
                                </div>
                            </div>
                        </div>

                        <form action="" method="post" enctype="multipart/form-data">

                            <div class="form-group">
                                <div class="input-group">
                                    <?php
                                    $con = mysqli_connect("localhost","root","","skripsimakanan");
                                    ?>
                                    <div class="input-group-addon btn-primary">menu_makanan :</div>
                                    <select name="menumakanan" id="stok_menu_makanan" class="form-control" onchange='changeValue(this.value)' required>
                                        <option value="">--pilih--</option>
                                        <?php
                                        $query = mysqli_query($con, "select * from stok_makanan_masuk order by stok_menu_makanan esc");
                                        $result = mysqli_query($con, "select * from stok_makanan_masuk");
                                        $a          = "var makanan = new Array();\n;";


                                        while ($row = mysqli_fetch_array($result)) {
                                            $pesanan = query("SELECT * FROM pemesanan WHERE id_stok_makanan = " . $row['id_stok_makanan'] . " ORDER BY jumlah_pesan DESC LIMIT 1");
                                            $jumlah = 0;
                                            if (count($pesanan) > 0) {
                                                $jumlah = $pesanan[0]['jumlah_pesan'];
                                            }

                                            $harga = $row['harga'];
                                            $modal = $row['modal'];
                                            $keuntungan = $jumlah * ($harga - $modal);
                                            echo '<option name="stok_menu_makanan" value="' . $row['id_stok_makanan'] . '">' . $row['nama_makanan'] . '</option>';
                                            $a .= "makanan['" . $row['id_stok_makanan'] . "'] = {harga:'" . addslashes($row['harga']) . "',modal: " . addslashes($row['modal']) . ", laku: " . $jumlah . ", keuntungan: " . $keuntungan . "};\n";
                                        }
                                        ?>
                                    </select>
                                </div>
                            </div>



                            <div class="form-group">
                                <div class="input-group">
                                    <div class="input-group-addon btn-primary">Harga Jual :</div>
                                    <input type="text" class="form-control" name="harga" id="harga" placeholder="Masukkan nomor telepon anda">
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="input-group">
                                    <div class="input-group-addon btn-primary">Harga Modal :</div>
                                    <input type="text" class="form-control" name="modal" id="modal" placeholder="Masukkan nomor telepon anda">
                                </div>
                            </div>


                            <div class="form-group">
                                <div class="input-group">
                                    <div class="input-group-addon btn-primary">Makanan Laku :</div>
                                    <input type="text" class="form-control" name="laku" id="laku" placeholder="Masukkan nomor telepon anda">
                                </div>
                            </div>

                            <div class="form-group">
                                <div class="input-group">
                                    <div class="input-group-addon btn-primary">Keuntungan :</div>
                                    <input type="text" class="form-control" name="keuntungan" id="keuntungan" placeholder="Masukkan nomor telepon anda">
                                </div>
                            </div>



                            <!-- <button type="submit" name="btncustomer" class="btn btn-success">Input Data</button> -->
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
    <script type="text/javascript" src="js/colonias.js">

    </script>
    <script type="text/javascript" src="js/jquery-3.4.1.min.js"></script>
    <script type="text/javascript" src="js/chosen.jquery.js"></script>
    <!-- /WhatsHelp.io widget -->

    <script>

    </script>

    <script type="text/javascript">
        <?php
        echo $a;

        ?>

        function changeValue(id) {
            document.getElementById('harga').value = makanan[id].harga;
            document.getElementById('modal').value = makanan[id].modal;
            document.getElementById('laku').value = makanan[id].laku;
            document.getElementById('keuntungan').value = makanan[id].keuntungan;
            document.getElementById('cetak_keuntungan').href = `cetakkeuntunganone.php?id=${id}`;
        };
    </script>


</body>

</html>