<?php

session_start();

if (!isset($_SESSION['login'])) {
  header("location:login.php");
  exit;
}


require 'functionmakan.php';

// $monitoring = query("SELECT * FROM pegawai ORDER BY id_pegawai DESC");
$monitoring = query("SELECT * FROM konf_pengiriman ORDER BY id_konf DESC");




if (isset($_POST['cari'])) {
  $monitoring = caripengiriman($_POST['search']);
}

?>


<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>DETAIL PENGIRIMAN</title>
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
              <a href="supplier.php">SUPPLIER</a>
              </>
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

            <li>
              <!-- <a href="formcheck.php">FORM CHECK</a> -->
              <a href="pengiriman.php">PENGIRIMAN</a>
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
          <li class="li">Data Detail Pengiriman</li>
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
                  <a href="cetaksemuapengiriman.php" class="btn btn-primary" style="margin-bottom:20px;" target="_blank">
                    Cetak <i class="fa fa-chevron-right"></i>
                  </a>


                </div>
              </div>
            </div>

            <table class="table table-striped table-bordered">
              <thead>
                <tr class="info text-center">

                  <th class="col">No</th>
                  <th class="col">Nama Pelanggan</th>
                  <th class="col">Jumlah Pesan</th>
                  <th class="col">Harga</th>
                  <th class="col">Alamat</th>
                  <th>Status</th>
                  <th class="col">Aksi</th>


                </tr>
              </thead>
              <?php $numb = 1; ?>
              <?php foreach ($monitoring as $row) : ?>

                <tbody>
                  <tr>
                    <td><?php echo $numb; ?></td>
                    <td><?= $row['nama_pelanggan']; ?></td>
                    <td><?= $row['jumlah_pesan']; ?></td>
                    <td><?= $row['harga']; ?></td>
                    <td><?= $row['alamat']; ?></td>
                    <td><?= $row['status'] ?></td>
                    <td>
                      <a href="deletepengiriman.php?id=<?php echo $row['id_konf']; ?>" onclick="return confirm('Apakah anda yakin ingin menghapus')" ; class="btn btn-danger btn-xs" style="margin-right:0;"><i class="fa fa-trash-o" aria-hidden="true"></i>
                      </a> |

                      <a href="updatepengiriman.php?id=<?php echo $row['id_konf']; ?>" class="btn btn-info btn-xs" style="margin-right:0;"><i class="fa fa-trash-o" aria-hidden="true"></i>
                      </a>
                      |
                      <a href="cetakpengiriman.php?id=<?php echo $row['id_konf']; ?>" target="_blank" class="btn btn-primary btn-xs" style="margin-right:0;"><i class="fa fa-print" aria-hidden="true"></i></i>
                      </a> |
                      <button class="btn btn-warning btn-xs" data-toggle="modal" data-target="#modal-status-<?= $row['id_konf'] ?>"><i class="fa fa-cog"></i></button>

                      <div class="modal fade" id="modal-status-<?= $row['id_konf'] ?>" tabindex="-1" role="dialog" aria-labelledby="modal-status-<?= $row['id_konf'] ?>-label" aria-hidden="true">
                        <div class="modal-dialog" role="document">
                          <div class="modal-content">
                            <div class="modal-header">
                              <h5 class="modal-title" id="modal-status-<?= $row['id_konf'] ?>-label">Ubah Status Pengiriman</h5>
                              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                              </button>
                            </div>

                            <form action="process_status_kirim.php" method="post">
                              <div class="modal-body">
                                <input type="hidden" name="id" value="<?= $row['id_konf'] ?>">
                                <div class="form-group">
                                  <label for="status">Status</label>
                                  <input type="text" name="status" id="status" class="form-control" required value="<?= $row['status'] ?>">
                                </div>
                              </div>

                              <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                <input type="submit" class="btn btn-primary" value="Simpan">
                              </div>
                            </form>
                          </div>
                        </div>
                      </div>
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