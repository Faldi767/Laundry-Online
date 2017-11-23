<div class="row">
            <!-- left column -->
            <div class="col-md-6">
              <!-- general form elements -->
              <div class="box box-primary">
                <div class="box-header with-border">
                  <h3 class="box-title">Transaksi</h3>
                </div><!-- /.box-header -->
                <!-- form start -->
                <form role="form" action="pages/processtransaksi.php" method="post">
                  <div class="box-body">
                    <div class="form-group">
                    <label>Nama Konsumen</label>
                    <select name="namakonsumen" class="form-control select2" style="width: 100%;">
					<?php
					include ('koneksi.php');
					$loadkonsumen = mysqli_query($connection, "SELECT * FROM konsumen");
					if($loadkonsumen)
					{
						while($row3 = mysqli_fetch_row($loadkonsumen))
						{
						?>
                      <option value="<?php echo $row3[1]; ?>"><?php echo $row3[1]; ?></option>
					  <?php
					  }
					}
					?>
                    </select>
                  </div><!-- /.form-group -->
					<div class="form-group">
                    <label>Tanggal Ambil:</label>
                    <div class="input-group">
                      <div class="input-group-addon">
                        <i class="fa fa-calendar"></i>
                      </div>
                      <input type="text" name="tanggal" class="form-control" data-inputmask="'alias': 'yyyy-mm-dd'" data-mask required>
                    </div><!-- /.input group -->
                  </div><!-- /.form group -->
				  <div class="form-group">
                    <label>Jenis Laundry</label>
                    <select name="jenislaundry" class="form-control select2" style="width: 100%;">
					<?php
					include ('koneksi.php');
					$loadjenis = mysqli_query($connection, "SELECT * FROM jenislaundry");
					if($loadjenis)
					{
						while($row2 = mysqli_fetch_row($loadjenis))
						{
						?>
                      <option value="<?php echo $row2[1]; ?>"><?php echo $row2[1]; ?></option>
					  <?php
					  }
					}
					?>
                    </select>
                  </div><!-- /.form-group -->
				  <div class="form-group">
                    <label>Jenis Pakaian</label>
                    <select name="jenispakaian" class="form-control select2" style="width: 100%;">
					<?php
					include ('koneksi.php');
					$loadpakaian = mysqli_query($connection, "SELECT * FROM tarif");
					if($loadpakaian)
					{
						while($row1 = mysqli_fetch_row($loadpakaian))
						{
						?>
                      <option value="<?php echo $row1[0]; ?>"><?php echo $row1[1]; ?></option>
					  <?php
					  	}
					}
					mysqli_close($connection);
					?>
                    </select>
                  </div><!-- /.form-group -->
					<div class="form-group">
					<script>function isNumberKey(evt){
    var charCode = (evt.which) ? evt.which : event.keyCode
    if (charCode > 31 && (charCode < 48 || charCode > 57))
        return false;
    return true;
}</script>
                      <label for="alamat">Diskon (%)</label>
                      <input type="text" name="diskon" class="form-control" id="alamat" placeholder="Diskon" onkeypress="return isNumberKey(event)" required>
                    </div>
					<div class="form-group">
                      <label for="telepon">Jumlah Pakaian</label>
                      <input type="text" name="jumlahpakaian" class="form-control" id="telepon" placeholder="Jumlah" onkeypress="return isNumberKey(event)" required>
                    </div>
					<div class="form-group">
                      <label for="telepon">Berat Pakaian (Kg)</label>
                      <input type="text" name="beratpakaian" class="form-control" id="telepon" placeholder="Berat" onkeypress="return isNumberKey(event)" required>
                    </div>
                  </div><!-- /.box-body -->
                  <div class="box-footer">
                    <button type="submit" class="btn btn-primary">Submit</button>
                  </div>
                </form>
              </div><!-- /.box -->
            </div><!--/.col (left) -->
          </div>   <!-- /.row -->