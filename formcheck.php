<?php 

require_once 'function.php';

if(isset($_POST['check']))
{
    if(formcheck($_POST) > 0)
    {
        echo "<script>
            alert('Input Data Success !');
            window.location.href='index.php';
        </script>";
    } 

    else {
        
        echo "<script>
            alert('Input Data Gagal !');
            window.location.href='formcheck.php';
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

            <li>
              <a href="pesanan.php">PESANAN</a>
            </li>
            <li>
              <a href="loc.php">LOC</a>
            </li>
            <li  class="active">
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
                  <li class="li">Data Formcheck</li>
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
                                <div class="input-group-addon">Id admin :</div>
                                <select name="idadmin" class="form-control" id="">
                                    <?php
                                        $idpegawai = mysqli_query($conn, "SELECT * FROM adminis");
                                        while($row = mysqli_fetch_assoc($idpegawai))
                                        {
                                            echo "<option value='". $row['id_pegawai_admin']."'>".$row['id_pegawai_admin']."</option>";
                                        }
                                    ?>
                                </select>
                            </div>
                        </div>

                        <div class="form-group">
                         <div class="input-group">
                          <div class="input-group-addon">Id pesanan :</div>
                         <select name="idpesanan" class="form-control" id="">
                         <?php
                            $idpesanan = mysqli_query($conn, "SELECT * FROM pesanan");
                            while($row = mysqli_fetch_assoc($idpesanan))
                            {
                                echo "<option value ='". $row['id_pesanan'] ."'>". $row['id_pesanan'] ."</option>";
                            }
                          ?>
                         </select>
                         </div>
                        </div>

                        <div class="form-group">
                            <div class="input-group">
                                <div class="input-group-addon">Id barang :</div>
                               <select name="idbarang" class="form-control" id="">
                               <?php
                                    $idbarang = mysqli_query($conn,"SELECT * FROM barang");
                                    while($row = mysqli_fetch_assoc($idbarang))
                                    {
                                        echo "<option value='". $row['id_barang'] ."'>".$row['id_barang']."</option>";
                                    }
                                ?>
                               </select>
                            </div>
                            </div>

                            
                        <div class="form-group">
                            <div class="input-group">
                                <div class="input-group-addon">Id lokasi :</div>
                               <select name="idlokasi" class="form-control" id="">
                               <?php
                                    $idbarang = mysqli_query($conn,"SELECT * FROM lokasi");
                                    while($row = mysqli_fetch_assoc($idbarang))
                                    {
                                        echo "<option value='". $row['id_lokasi'] ."'>".$row['id_lokasi']."</option>";
                                    }
                                ?>
                               </select>
                            </div>
                            </div>
                            

                          <div class="form-group">
                             <div class="input-group">
                              <div class="input-group-addon btn-primary">Nama pemesanan :</div>
                             <select name="nama" class="form-control" id="nama">
                             <option value="">-- Nama pemesanan --</option>
                                        <?php 
                                            $pesanan = mysqli_query($conn, "SELECT * FROM pesanan");
                                            while($row = mysqli_fetch_assoc($pesanan))
                                            {
                                                echo "<option value ='".$row['mfr']."'>".$row['mfr']."</option>";
                                            }
                                            ?>
                             </select>
                             </div>
                          </div>
                                            
                        <div class="form-group">
                         <div class="input-group">
                        <div class="input-group-addon btn-primary">Part number :</div>
                        <input type="number" name="partnumber" class="form-control" id="partnumber">
                         </div>
                         </div>

                          <div class="form-group">
                            <div class="input-group">
                             <div class="input-group-addon btn-primary">Storagebin :</div>
                            <select name="storagebin" class="form-control" id="storagebin">
                                <option value="">-- storagebin --</option>
                                <?php
                                    $formcheck = mysqli_query($conn, "SELECT * FROM lokasi");
                                    while($rows = mysqli_fetch_assoc($formcheck))
                                    {
                                        echo "<option value ='".$rows['storagebin']."'>".$rows['storagebin']."</option>";
                                    }
                                ?>
                            </select>
                            </div>
                          </div>

                          <div class="form-group">
                             <div class="input-group">
                              <div class="input-group-addon btn-primary">Qty :</div>
                             <select name="qty" class="form-control" id="qty">
                             <option value="">-- Qty --</option>
                             <?php
                                $pesanan = mysqli_query($conn, "SELECT * FROM pesanan");
                                while($row = mysqli_fetch_assoc($pesanan))
                                {
                                    echo "<option value ='".$row['qty']."'>".$row['qty']."</option>";
                                }
                             ?>
                             </select>
                             </div>
                          </div>
                          <button type="submit" name="check" class="btn btn-success">Input Data</button>
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