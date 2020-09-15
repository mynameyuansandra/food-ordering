<?php 

require_once 'function.php';

if(isset($_POST['pesanan']))
{
    if(pesananya($_POST) > 0)
    {
        echo "<script>
            alert('Input Data Success !');
            window.location.href='loc.php';
        </script>";
    } 

    else {
        
        echo "<script>
            alert('Input Data Gagal !');
            window.location.href='pesanan.php';
        </script>";
    }
}

?>


<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>CKB LOGISTICS</title>
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

                  <img src="images/ckb3.jpg" alt="M-dev-Store Logo" class="hidden-xs">
                  <img src="images/ckb3.jpg" alt="M-dev-Store Logo Mobile" class="visible-xs">


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
              <a href="index.php">BERANDA</a>
            </li>

            <li>
              <a href="admin.php">ADMIN</a>
            </li>

            <li class="active">
              <a href="pesanan.php">PESANAN</a>
            </li>
            <li>
              <a href="loc.php">LOC</a>
            </li>
            <li>
              <a href="formcheck.php">FORM CHECK</a>
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
include('customer/includes/sidebar.php');
?>
          </div>


          <div class="col-md-9">
              <div class="box">
                  <div class="box-header">

                      <form action="" method="post" enctype="multipart/form-data">
                        <div class="form-group">
                            <div class="input-group">
                                
                                <input type="text" class="form-control" style="left:580px;" width="50" readonly="" name="stok"
                                 value="
                                 <?php $stok = mysqli_query($conn,"SELECT * FROM barang"); 
                                    while($row = mysqli_fetch_assoc($stok))
                                    {
                                        echo $row['stock_barang'];
                                    }
                                 ?>
                                 ">
                            </div>
                        </div>

                       <div class="form-group">
                        <div class="input-group">
                         <div class="input-group-addon btn-primary">Id admin :</div>
                         <select name="idpegawai" class="form-control" id="">
                            <?php
                                $idpegawai = mysqli_query($conn,"SELECT * FROM pegawai");
                                while($row = mysqli_fetch_assoc($idpegawai))
                                {
                                    echo "<option value ='".$row['id_pegawai']."'>".$row['id_pegawai']."</option>";
                                }
                            ?>
                         </select>
                        </div>
                       </div>

                      <div class="form-group">
                              <div class="input-group">
                                <div class="input-group-addon btn-primary">Orders :</div>
                              <input type="number" class="form-control" name="order" 
                                  placeholder="Masukkan order">
                              </div>
                          </div>

                          <div class="form-group">
                              <div class="input-group">
                                <div class="input-group-addon btn-primary">Qty :</div>
                              <input type="number" class="form-control" name="qty" 
                                  placeholder="Masukkan Qty">
                              </div>
                          </div>

                          <div class="form-group">
                              <div class="input-group">
                                <div class="input-group-addon btn-primary">Part number :</div>
                              <input type="number" class="form-control" name="partnumber" 
                                  placeholder="Masukkan part number">
                              </div>
                          </div>

                          <div class="form-group">
                              <div class="input-group">
                                <div class="input-group-addon btn-primary">Mfr :</div>
                                    <select name="mfr" class="form-control" id="mfr">
                                        <option value="">-- Nama pemesanan --</option>
                                        <?php 
                                            $pesanan = mysqli_query($conn, "SELECT * FROM barang");
                                            while($row = mysqli_fetch_assoc($pesanan))
                                            {
                                                echo "<option value ='".$row['nama_barang']."'>".$row['nama_barang']."</option>";
                                            }
                                        ?>
                                    </select>
                              </div>
                          </div>

                          <div class="form-group">
                              <div class="input-group">
                                <div class="input-group-addon btn-primary">Nama pemesan :</div>
                              <input type="text" class="form-control" name="namapemesan" 
                                  placeholder="Masukkan nama pemesan">
                              </div>
                          </div>


                          <button type="submit" name="pesanan" class="btn btn-success">Input Data</button>
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