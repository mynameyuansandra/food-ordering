
<div class="form-group">
                            <label for="" class="col-md-5 control-label">Nama Pelanggan</label>
                            <?php   
                          $con = mysqli_connect("localhost","root","","skripsimakanan");  
                      ?>  
                            <!-- div.col-md-7>select.form-control>option*5 -->
                            <div class="col-md-7">
                            <select name="nama_pelanggan" id="nama_pelanggan" class="form-control" onchange='changeValue(this.value)' required >  
                          <option value="">--pilih--</option>
                          <?php   
                          $query = mysqli_query($con, "select * from customer order by nama_pelanggan esc");  
                          $result = mysqli_query($con, "select * from customer");  
                          $a          = "var alamat = new Array();\n;";  
                            
                          while ($row = mysqli_fetch_array($result)) {  
                               echo '<option name="nama_pelanggan" value="'.$row['nama_pelanggan'] . '">' . $row['nama_pelanggan'] . '</option>';   
                          $a .= "alamat['" . $row['nama_pelanggan'] . "'] = {alamat:'" . addslashes($row['alamat'])."'};\n";  
                           
                          }  
                          ?>  
                     </select>
                            </div>
                             <!-- div.col-md-7>select.form-control>option*5 -->
                            </div>

                            <div class="form-group">
                            <label for="" class="col-md-5 control-label">Alamat</label>
                            <!-- div.col-md-7>select.form-control>option*5 -->
                            <div class="col-md-7">
                                <input type="text" name="alamat" id="alamat" readonly="" class="form-control">
                            </div>
                             <!-- div.col-md-7>select.form-control>option*5 -->
                            </div> 