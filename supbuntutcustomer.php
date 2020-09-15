<?php
session_start();
require_once 'functionmakan.php';
if (isset($_POST['bakso'])) {
    if (baksoaja($_POST) > 0) {
        echo "<script>
            alert('Data berhasil di input');
            window.location.href='bakso.php';
        </script>";
    } else {
        echo "<script>
        alert('Data gagal di input');
        window.location.href='bakso.php';
        </script>";
    }
}
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
                    <li class="li">Sup Buntut</li>
                </ul>
            </div>

            <div class="col-md-3">
                <?php
                include('customer/includes/sidebarcustomer.php');
                ?>
            </div>

            <!-- order -->
            <div class="col-md-9">
                <div id="productMain" class="row">
                    <div class="col-sm-6">
                        <div id="mainImage">
                            <div id="myCarousel" class="carousel slide" data-ride="carousel">
                                <ol class="carousel-indicators">
                                    <li data-target="#myCarousel" class="active" data-slide-to="0"></li>
                                    <li data-target="#myCarousel" data-slide-to="1"></li>
                                    <li data-target="#myCarousel" data-slide-to="2"></li>
                                </ol>

                                <div class="carousel-inner">
                                    <div class="item active">
                                        <center><img class="img-responsive" src="imagesmakanan/supbuntut.jpg" alt="Product 3-a"></center>
                                    </div>
                                    <div class="item">
                                        <center><img class="img-responsive" src="imagesmakanan/supbuntut.jpg" alt=""></center>
                                    </div>
                                    <div class="item">
                                        <center><img class="img-responsive" src="imagesmakanan/supbuntut.jpg" alt=""></center>
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
                            <h1 class="text-center">Sup Buntut</h1>
                            <form action="" class="form-horizontal" method="post">

                                <div class="form-group">
                                    <label for="" class="col-md-5 control-label">Id Customer</label>
                                    <!-- div.col-md-7>select.form-control>option*5 -->
                                    <div class="col-md-7">
                                        <select name="id_customer" id="" class="form-control">
                                            <?php
                                            $stokmakanan = mysqli_query($conn, "SELECT * FROM customer");
                                            while ($row = mysqli_fetch_assoc($stokmakanan)) {
                                                echo "<option value ='" . $row['id_customer'] . "'>" . $row['id_customer'] . "</option>";
                                            }
                                            ?>
                                        </select>
                                    </div>
                                    <!-- div.col-md-7>select.form-control>option*5 -->
                                </div>

                                <!-- div.form-group>.col-md-5.control-panel -->
                                <div class="form-group">
                                    <label for="" class="col-md-5 control-label">Menu Makanan
                                    </label>
                                    <?php $gambar = query("SELECT * FROM stok_makanan_masuk")[10] ?>
                                    <div class="col-md-7">
                                        <input type="text" class="form-control" name="namamakanan" id="namamakanan" value="<?php echo $gambar['stok_menu_makanan']; ?>" readonly="">

                                    </div>
                                </div>
                                <!-- div.form-group>.col-md-5.control-panel -->


                                <div class="form-group">
                                    <label for="" class="col-md-5 control-label">Nama Pelanggan
                                    </label>

                                    <div class="col-md-7">
                                        <input type="text" class="form-control" name="nama_pelanggan" id="namapelanggan" value="<?php echo $_SESSION['username']; ?>" readonly>

                                    </div>
                                </div>

                                <div class="form-group">
                                    <label for="" class="col-md-5 control-label">Alamat
                                    </label>


                                    <div class="col-md-7">
                                        <input type="text" class="form-control" name="alamat" id="alamat" autocomplete="off">


                                    </div>
                                </div>


                                <!-- div.form-group>.col-md-5.control-panel -->
                                <div class="form-group">
                                    <label for="" class="col-md-5 control-label">jumlah
                                    </label>
                                    <div class="col-md-7">
                                        <input type="number" class="form-control" name="jumlah" id="jumlah" value="0">

                                    </div>
                                </div>
                                <!-- div.form-group>.col-md-5.control-panel -->

                                <div class="form-group">
                                    <label for="" class="col-md-5 control-label">Harga</label>
                                    <!-- div.col-md-7>select.form-control>option*5 -->
                                    <div class="col-md-7">
                                        <input type="number" class="form-control" name="harga" id="harga" value="0" readonly="">
                                    </div>
                                    <!-- div.col-md-7>select.form-control>option*5 -->
                                </div>

                                <div class="form-group">
                                    <label for="" class="col-md-5 control-label">tanggal</label>
                                    <!-- div.col-md-7>select.form-control>option*5 -->
                                    <div class="col-md-7">
                                        <input type="date" class="form-control" name="tanggal">
                                    </div>
                                    <!-- div.col-md-7>select.form-control>option*5 -->
                                </div>

                                <!-- div.form-group>.col-md-5.control-panel -->
                                <div class="form-group">
                                    <label for="" class="col-md-5 control-label">Gambar
                                    </label>
                                    <?php $gambar = query("SELECT * FROM stok_makanan_masuk")[10] ?>
                                    <div class="col-md-7">
                                        <input type="text" class="form-control" name="gambar" id="gambar" value="<?php echo $gambar['gambar']; ?>" readonly="">

                                    </div>
                                </div>
                                <!-- div.form-group>.col-md-5.control-panel -->

                                <p class="text-center buttons control-label"><button type="submit" name="bakso" class="btn btn-primary ">Pesan</button></p>
                            </form>
                        </div>

                        <!-- img thumbnails -->
                        <div class="row" id="thumbs">

                            <div class="col-xs-4">
                                <a data-target="#myCarousel" data-slide-to="0" href="#" class="thumb">
                                    <img src="imagesmakanan/supbuntut.jpg" alt="product 1" class="img-responsive"></a>
                            </div>

                            <div class="col-xs-4">
                                <a data-target="#myCarousel" data-slide-to="1" href="#" class="thumb">
                                    <img src="imagesmakanan/supbuntut.jpg" alt="product 1" class="img-responsive"></a>
                            </div>

                            <div class="col-xs-4">
                                <a data-target="#myCarousel" data-slide-to="2" href="#" class="thumb">
                                    <img src="imagesmakanan/supbuntut.jpg" alt="product 1" class="img-responsive"></a>
                            </div>


                        </div>
                        <!-- img thumbnails-->



                    </div>
                    <!-- form -->

                </div>

                <div class="box" id="details">
                    <h4>Product Makanan</h4>
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
                            <h3 class="text-center">RM BUFAT</h3>
                        </div>
                    </div>
                    <!-- img -->
                    <div class="col-md-3 col-sm-6 center-responsive">
                        <div class="product same-height">
                            <a href="details.php">
                                <img class="img-responsive" src="images/satelilit.jpg" alt="product 6">
                            </a>

                            <div class="text">
                                <h3><a href="">Sate Lilit</a></h3>
                                <p class="price">12000</p>
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
                                <h3><a href="">Sate Lilit </a></h3>
                                <p class="price">12000`</p>
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
                                <h3><a href="">Sate Lilit</a></h3>
                                <p class="price">12000</p>
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

    <script type="text/javascript">
        <?php
        echo $a;
        ?>

        function changeValue(id) {
            document.getElementById('alamat').value = alamat[id].alamat;

        };
    </script>

    <script type="text/javascript">
        $("#jumlah").keyup(function() {
            var a = parseFloat($("#jumlah").val());

            var c = a * 15000;
            $("#harga").val(c);
        });
    </script>
</body>

</html>