<?php 

session_start();

if(!isset($_SESSION['login']))
{
  header("location:login.php");
  exit;
}


require 'function.php';

$lokasi = query("SELECT * FROM lokasi ORDER BY id_lokasi DESC");


if(isset($_POST['submit']))
{
	$lokasi = carilokasi($_POST['search']);
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
            <li>
              <a href="formcheck.php">FORM CHECK</a>
            </li>

            <form class="navbar-form navbar-left" method="post">
            <div class="form-group">
		<input type="text" class="form-control" name="search" placeholder="Search" autocomplete="off" autofocus>
    </div>
		<button type="submit" name="submit" class="btn btn-info">Search</button>
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
                  <li class="li">Data Administrasi</li>
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

                  <table class="table table-striped table-bordered">
              <thead>
                <tr class="info text-center">

                  <th class="col">No</th>
                  <th class="col">Storagebin</th>
                  <th class="col">Images</th>
                  <th class="col">Aksi</th>
                  

                </tr>
              </thead>
              <?php $numb=1; ?>
              <?php foreach($lokasi as $row) : ?>

              <tbody>
                <tr>
                    <td><?php echo $numb; ?></td>
                  <td><?= $row['storagebin']; ?></td>
                  <td><img src="img/<?php echo $row['images']; ?>" width="50"  alt=""></td>
                  
                  <td> 
                    <a href="deletelokasi.php?id=<?php echo $row['id_lokasi']; ?>"
                      onclick="return confirm('Apakah anda yakin ingin menghapus')" class="btn btn-danger btn-xs"
                      style="margin-right:0;"><i class="fa fa-trash-o" aria-hidden="true"></i>
                    </a> |
                    
                    <a href="updatelokasi.php?id=<?php echo $row['id_lokasi']; ?>"
                      class="btn btn-info btn-xs"
                      style="margin-right:0;"><i class="fa fa-trash-o" aria-hidden="true"></i>
                    </a> |

                    <a href="cetaklokasi.php"  target="_blank"
                      class="btn btn-primary btn-xs"
                      style="margin-right:0;"><i class="fa fa-print" aria-hidden="true"></i></i>
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