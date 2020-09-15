
<?php
    require_once 'functionmakan.php';
    $cart = query("SELECT * FROM pemesanan");
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>CART</title>
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
          
            <li class="active">
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
  
    <!-- cart -->
  <div id="content">
      <div class="container">
          <div class="col-md-12">
              <ul class="breadcrumb">
                  <li class="li"><a href="index.php">Home</a></li>
                  <li class="li"> Cart</li>
              </ul>
          </div>
            <!-- table -->
            <div id="cart" class="col-md-9">
                <div class="box">
                    <form action="cart.php" method="post" enctype="multipart/form-data">
                        <h1></h1>
                        <p class="text-muted"></p>
                        <div class="table-responsive">
                            <table class="table" id="order_data">
                                <thead>
                                    <tr>
                                    
                                        <th colspan="">Nama</th>
                                        <th>Kode</th> 
                                        <th>Nama Makanan</th>    
                                        <th>Alamat</th>
                                        <th>Jumlah Pesan</th>
                                        <th >Harga</th>
                                        <th >Tanggal</th>
                                     
                                  
                                    </tr>
                                </thead>
                                <!-- looping php -->
                                
                                    <?php 
                                        $stok_sks = 0;
                                        $stok_jumlah = 0;
                                        $stok_angka = 0;
                                    foreach($cart as $row) : 
                                        $stok_sks += $row['harga'];
                                        $stok_jumlah += $row['jumlah_pesan']; 
                                    ?>
                                <tbody>
                                    <tr>
                                        
                                        <td><a href="#"><?php echo $row['nama_pelanggan']; ?></a></td>
                                        <td><?php echo $row['id_order']; ?></td>
                                        <td><?php echo $row['nama_makanan']; ?></td>
                                        <td><?php echo $row['alamat']; ?></td>
                                        <td><?php echo $row['jumlah_pesan']; ?></td>
                                        <td><?php echo $row['harga']; ?></td>
                                        <td><?php echo $row['tanggal']; ?></td>
                                        
                                        
                                    </tr>
                                    <?php endforeach; ?>
                                </tbody>

                                <!-- tfoot -->
                                <tfoot>
                                    <tr>
                                        <th colspan="5">Total</th>
                                        <th><?php echo $stok_sks; ?></th>
                                    </tr>
                                </tfoot>
                                <!-- tfoot -->
                            </table>
                        </div>
                        <div class="box-footer">
                            <div class="pull-left">
                                <a href="makanan.php" class="btn btn-default">
                                    <i class="fa fachevron-left"></i>
                                    Kembali Pesanan
                                </a>
                            </div>

                            <div class="pull-right">
                                

                                <a href="checkout.php" class="btn btn-primary">
                                    Proceed Checkout <i class="fa fa-chevron-right"></i>
                                </a>
                            </div>
                        </div>
                    </form>
                </div>

                <!-- product you maybe like -->
             <!-- div#row#same-height-row>.col-md-3.col-sm-6>.box.same-height.headline>h3.text-center -->
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
                         <h3><a href="">Sate Lilit Momen</a></h3>
                         <p class="price">$50</p>
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
                         <h3><a href="">Sate Lilit Momen</a></h3>
                         <p class="price">$50</p>
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
                         <h3><a href="">Sate Lilit Momen</a></h3>
                         <p class="price">$50</p>
                     </div>

                     </div>
                 </div>
                 <!-- img -->
             </div>
             <!-- product you maybe like -->
             <!-- div#row#same-height-row>.col-md-3.col-sm-6>.box.same-height.headline>h3.text-center -->
            </div>
            <!-- col-md-3 -->
            <div class="col-md-3">
                <div id="order-summary" class="box">
                    <div class="box-header">
                        <h3>total Pembayaran</h3>
                    </div>
                    
                    <div class="table-responsive">
                        <table class="table">
                            <tbody>
                                <tr>
                                    <td>Jumlah Pesan</td>
                                    <th><?php echo $stok_jumlah; ?></th>
                                </tr>
                               
                                <tr class="total">
                                    <td>Total</td>
                                    <th><?php echo $stok_sks; ?></th>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
                <!-- col-md-3 -->

            </div>
            <!-- table -->
          </div>
  </div>
    <!-- cart -->
  <?php 
include("includes/footer.php");
?>

  <script src="js/jquery-331.min.js"></script>
  <script src="js/bootstrap-337.min.js"></script>
  <!-- WhatsHelp.io widget -->
  <script async data-id="8642" src="https://cdn.widgetwhats.com/script.min.js"></script>
  <!-- /WhatsHelp.io widget -->

  <script type="text/javascript">
    $("#harga").keyup(function(){
      var a = parseFloat($("#harga").val());
      var b = parseFloat($("#total_order").val());
     
      var c = a + b;
      $("#total_order").val(c);

      $("#total_order").keyup(function(){
      var a = parseFloat($("#harga").val());
      var b = parseFloat($("#total_order").val());
     
      var c = a + b;
      $("#total_order").val(c);
    });
</script>
  
  

</body>

</html>