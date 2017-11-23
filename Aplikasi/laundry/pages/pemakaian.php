<div class="row">
            <!-- left column -->
            <div class="col-md-6">
              <!-- general form elements -->
              <div class="box box-primary">
                <div class="box-header with-border">
                  <h3 class="box-title">Pemakaian Barang</h3>
                </div><!-- /.box-header -->
                <!-- form start -->
                <form role="form" action="pages/processpemakaian.php" method="post">
                  <div class="box-body">
				  <div class="form-group">
                    <label>Nama Barang</label>
                    <select name="namabarang" class="form-control select2" style="width: 100%;">
					<?php
					include ('koneksi.php');
					$loadbarang = mysqli_query($connection, "SELECT * FROM barang");
					if($loadbarang)
					{
						while($row2 = mysqli_fetch_row($loadbarang))
						{
						?>
                      <option value="<?php echo $row2[0]; ?>"><?php echo $row2[1]; ?></option>
					  <?php
					  }
					}
					?>
                    </select>
                  </div><!-- /.form-group -->
					<div class="form-group">
                      <label for="alamat">Stock Yang Digunakan</label>
                      <input type="text" name="stock" class="form-control" id="alamat" placeholder="Stock" required>
                    </div>
                  </div><!-- /.box-body -->
                  <div class="box-footer">
                    <button type="submit" class="btn btn-primary">Submit</button>
                  </div>
                </form>
              </div><!-- /.box -->
            </div><!--/.col (left) -->
          </div>   <!-- /.row -->