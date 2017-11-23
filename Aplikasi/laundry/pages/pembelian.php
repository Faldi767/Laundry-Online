<div class="row">
            <!-- left column -->
            <div class="col-md-6">
              <!-- general form elements -->
              <div class="box box-primary">
                <div class="box-header with-border">
                  <h3 class="box-title">Pembelian Barang</h3>
                </div><!-- /.box-header -->
                <!-- form start -->
                <form role="form" action="pages/processpembelian.php" method="post">
                  <div class="box-body">
                    <div class="form-group">
                      <label for="exampleInputEmail1">Nama Barang</label>
                      <input type="text" name="namabarang" class="form-control" id="exampleInputEmail1" placeholder="Nama Barang" required>
                    </div>
                    <div class="form-group">
                      <label for="stock">Stock Yang Dibeli</label>
                      <input type="text" name="jumlah" class="form-control" id="stock" placeholder="Jumlah Stock" required>
                    </div>
					<div class="form-group">
                      <label for="total">Total Biaya</label>
                      <input type="text" name="total" class="form-control" id="total" placeholder="Total" required>
                    </div>
					<div class="form-group">
					<label for="namasupplier">Nama Supplier</label>
					<select name="namasupplier" class="form-control select2" id="namasupplier" style="width: 100%;">
					<?php
					include ('koneksi.php');
					$loadsupplier = mysqli_query($connection, "SELECT * FROM supplier");
					if($loadsupplier)
					{
						while($row2 = mysqli_fetch_row($loadsupplier))
						{
						?>
                      <option value="<?php echo $row2[1]; ?>"><?php echo $row2[1]; ?></option>
					  <?php
					  }
					}
					?>
                    </select>
					</div>
                  </div><!-- /.box-body -->
                  <div class="box-footer">
                    <button type="submit" class="btn btn-primary">Submit</button>
                  </div>
                </form>
              </div><!-- /.box -->
            </div><!--/.col (left) -->
          </div>   <!-- /.row -->