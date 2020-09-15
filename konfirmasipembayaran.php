<?php 

require_once 'functionmakan.php';

error_reporting(E_ALL ^ (E_NOTICE | E_WARNING));

$idorder = $_GET['id'];
$pembayaran = query("SELECT * FROM pemesanan WHERE id_order = $idorder")[0];



if(isset($_POST['btnpembayaran']))
{
    if(konfirmasipembayaran($_POST) > 0)
    {
        echo "<script>
            alert('Terimakasih sudah mengirimkan bukti pembayaran !');
            window.location.href='checkout.php';
        </script>";
    } 

    else {
        
        echo "<script>
            alert('Input Data Gagal !');
            window.location.href='konfirmasipembayaran.php';
        </script>";
    }
}

?>





<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>KONFIRMASI PEMBAYARAN</title>
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
            </li>
            <li>
              <!-- <a href="pesanan.php">PESANAN</a> -->
              <a href="customer.php">CUSTOMER</a>   
            </li>
          <li >
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
                  <li class="li">Pembayaran</li>
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
                    <h2>Konfirmasi Pembayaran</h2>
                    <p>Bukti pembayaran anda disini</p>
                    <div class="alert alert-info">Total Tagihan Anda <strong><?php echo number_format($pembayaran['harga']); ?></strong></div>

                    <form action="" method="post" enctype="multipart/form-data">
                    
                    <div class="form-group">
                              
                    <div class="form-group">
                              <div class="input-group">
                                <div class="input-group-addon btn-primary">Id order :</div>
                                <select name="id_order" id="" class="form-control">
                                    <?php
                                            $idorder = mysqli_query($conn,"SELECT * FROM pemesanan");
                                            while($row = mysqli_fetch_assoc($idorder))
                                            {
                                                echo "<option value ='".$row['id_order']."'>".$row['id_order']."</option>";
                                            }
                                        ?>
                                    </select>
                              </div>
                          </div>

                          <div class="form-group">
                              <div class="input-group">
                                <div class="input-group-addon btn-primary">Nama penyetor:</div>
                              <input type="text" class="form-control" id="namapenyetor" name="namapenyetor" 
                                  placeholder="" >
                              </div>
                          </div>

                          <div class="form-group">
                              <div class="input-group">
                                <div class="input-group-addon btn-primary">Bank:</div>
                              <input type="text" class="form-control" id="bank" name="bank" 
                                  placeholder="" >
                              </div>
                          </div>
                         

                          <div class="form-group">
                              <div class="input-group">
                                <div class="input-group-addon btn-primary">Harga:</div>
                              <input type="text" class="form-control" id="harga" name="harga" 
                                  placeholder="" readonly="" value="<?php echo number_format($pembayaran['harga']); ?>">
                              </div>
                          </div>

                          <div class="form-group">
                              <div class="input-group">
                                <div class="input-group-addon btn-primary">Tanggal:</div>
                              <input type="date" class="form-control" id="tanggal" name="tanggal" 
                                  placeholder="">
                              </div>
                          </div>

                          <div class="form-group">
                              <div class="input-group">
                                <div class="input-group-addon btn-primary">Foto Bukti Pembayaran:</div>
                              <input type="file" class="form-control" id="gambar" name="gambar" 
                                  placeholder=" ">
                              </div>
                          </div>

                          <button type="submit" name="btnpembayaran" class="btn btn-success">Input Data</button>
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