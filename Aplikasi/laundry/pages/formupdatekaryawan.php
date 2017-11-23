<?php
include('koneksi.php');
$id = $_GET['id'];
$query = mysqli_query($connection, "SELECT * FROM karyawan WHERE NIK='$id'");
$row = mysqli_fetch_row($query);
?>
<div class="row">
            <!-- left column -->
            <div class="col-md-6">
              <!-- general form elements -->
              <div class="box box-primary">
                <div class="box-header with-border">
                  <h3 class="box-title">Pemakaian Barang</h3>
                </div><!-- /.box-header -->
                <!-- form start -->
                <form role="form" action="pages/processupdate.php" method="post">
                  <div class="box-body">
				  <div class="form-group">
                      <label for="nama">NIK</label>
                      <input type="text" name="nik" class="form-control" id="nik" placeholder="NIK" value="<?php echo $row[0]; ?>" required>
                    </div>
					<div class="form-group">
                      <label for="nama">Nama Karyawan</label>
                      <input type="text" name="nama" class="form-control" id="nama" placeholder="Nama Karyawan" value="<?php echo $row[1]; ?>" required>
                    </div>
					<div class="form-group">
                      <label for="alamat">Alamat</label>
                      <input type="text" name="alamat" class="form-control" id="alamat" placeholder="Alamat" value="<?php echo $row[2]; ?>" required>
                    </div>
					<div class="form-group">
                      <label for="telepon">Telepon</label>
					  <script>function isNumberKey(evt){
    var charCode = (evt.which) ? evt.which : event.keyCode
    if (charCode > 31 && (charCode < 48 || charCode > 57))
        return false;
    return true;
}</script>
					  <input type="text" name="telepon" class="form-control" id="telepon" value="<?php echo $row[3]; ?>" onkeypress="return isNumberKey(event)">
                    </div>
					<div class="form-group">
                    <label>Gender</label>
                    <select name="gender" id="gender" class="form-control select2" style="width: 100%;">
                      <option value="L">Laki-Laki</option>
					  <option value="P">Perempuan</option>
                    </select>
					<?php
					echo "<script>document.getElementById('gender').value = '".$row[4]."'</script>";
					mysqli_close($connection);
					?>​​​​​​​​​​
                  </div><!-- /.form-group -->
                  </div><!-- /.box-body -->
                  <div class="box-footer">
                    <button type="submit" class="btn btn-primary">Submit</button>
                  </div>
                </form>
              </div><!-- /.box -->
            </div><!--/.col (left) -->
          </div>   <!-- /.row -->