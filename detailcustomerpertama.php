<?php


require 'functionmakan.php';

// $monitoring = query("SELECT * FROM pegawai ORDER BY id_pegawai DESC");
$customer = query("SELECT * FROM customer ORDER BY id_customer DESC");




if (isset($_POST['cari'])) {
    $customer = caricustomer($_POST['search']);
}

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>DETAIL CUSTOMER</title>
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


                        <form class="navbar-form navbar-left" method="post">
                            <div class="form-group">
                                <input type="text" class="form-control" name="search" placeholder="Search" autocomplete="off" autofocus>
                            </div>
                            <button type="submit" name="cari" class="btn btn-info">Search</button>
                        </form>
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
                include('customer/includes/sidebarcustomer.php');
                ?>
            </div>


            <div class="col-md-9">
                <div class="box">
                    <div class="box-header">

                        <table class="table table-striped table-bordered">
                            <thead>
                                <tr class="info text-center">

                                    <th class="col">No</th>
                                    <th class="col">Nama Pelanggan</th>
                                    <th class="col">Alamat</th>
                                    <th class="col">hp</th>
                                    <th class="col">Aksi</th>

                                </tr>
                            </thead>
                            <?php $numb = 1; ?>
                            <?php foreach ($customer as $row) : ?>

                                <tbody>
                                    <tr>
                                        <td><?php echo $numb; ?></td>
                                        <td><?= $row['nama_pelanggan']; ?></td>
                                        <td><?= $row['alamat']; ?></td>
                                        <td><?= $row['hp']; ?></td>
                                        <td>
                                            <a href="deletecustomer.php?id=<?php echo $row['id_customer']; ?>" onclick="return confirm('Apakah anda yakin ingin menghapus')" ; class="btn btn-danger btn-xs" style="margin-right:0;"><i class="fa fa-trash-o" aria-hidden="true"></i>
                                            </a> |

                                            <a href="updatecustomer.php?id=<?php echo $row['id_customer']; ?>" class="btn btn-info btn-xs" style="margin-right:0;"><i class="fa fa-trash-o" aria-hidden="true"></i>
                                            </a>
                                            |
                                            <a href="cetakcustomer.php" target="_blank" class="btn btn-primary btn-xs" style="margin-right:0;"><i class="fa fa-print" aria-hidden="true"></i></i>
                                            </a>
                                        </td>


                                    </tr>
                                </tbody>
                                <?php $numb++; ?>
                            <?php endforeach; ?>
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