<?php 

require_once 'functionmakan.php';
$id = $_GET['id'];
$menumakan = query("SELECT * FROM menu_makan WHERE id_menu = $id")[0];

if(isset($_POST['btnupdatemenumakan']))
{
    if(updatemenumakan($_POST) > 0)
    {
        echo "<script>
            alert('Input Data Success !');
            window.location.href='detailmenumakanan.php';
        </script>";
    } 

    else {
        
        echo "<script>
            alert('Input Data Gagal !');
            window.location.href='inputmenumakanan.php';
        </script>";
    }
}

?>


<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>MENU MAKAN</title>
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

                  <li class="active">
              <!-- <a href="pesanan.php">PESANAN</a> -->
              <a href="supplier.php">SUPPLIER</a>   
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
              <a href="admin.php">TRACKER</a>  
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
                  <li class="li">Data Supplier</li>
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
                      <input type="hidden" readonly="" name="id" id="id" value="<?php echo $menu_makan['id_menu']; ?>">
                      <div class="form-group">
                              <div class="input-group">
                                <div class="input-group-addon btn-primary">id_menu_makanan :</div>
                                <select name="idmenumakanan" id="" class="form-control">
                        <?php
                                $stokmakanan = mysqli_query($conn,"SELECT * FROM stok_makanan_masuk");
                                while($row = mysqli_fetch_assoc($stokmakanan))
                                {
                                    echo "<option value ='".$row['id_stok_makanan']."'>".$row['id_stok_makanan']."</option>";
                                }
                            ?>
                        </select>
                              </div>
                          </div>

                          

                      <div class="form-group">
                              <div class="input-group">
                              <?php   
                          $con = mysqli_connect("localhost","root","","skripsimakanan");  
                      ?>  
                                <div class="input-group-addon btn-primary">menu_makanan :</div>
                                <select name="menumakanan" id="stok_menu_makanan" class="form-control" onchange='changeValue(this.value)' required >  
                          <option value="">--pilih--</option>
                          <?php   
                          $query = mysqli_query($con, "select * from stok_makanan_masuk order by stok_menu_makanan esc");  
                          $result = mysqli_query($con, "select * from stok_makanan_masuk");  
                          $a          = "var harga = new Array();\n;";
                         
                            
                          while ($row = mysqli_fetch_array($result)) {  
                               echo '<option name="stok_menu_makanan" value="'.$row['stok_menu_makanan'] . '">' . $row['stok_menu_makanan'] . '</option>';   
                          $a .= "harga['" . $row['stok_menu_makanan'] . "'] = {harga:'" . addslashes($row['harga'])."'};\n";  
                          
                          }  
                          ?>  
                     </select>
                              </div>
                          </div>

                          <div class="form-group">
                              <div class="input-group">
                                <div class="input-group-addon btn-primary">Harga:</div>
                              <input type="text" class="form-control" id="harga" name="harga" 
                                  placeholder="" readonly="">
                              </div>
                          </div>

                          <button type="submit" name="btnupdatemenumakan" class="btn btn-success">Input Data</button>
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
                           
                           ?>  
                          function changeValue(id){  
                            document.getElementById('harga').value = harga[id].harga;  
                           
                          };  
                          </script>

</body>

</html>