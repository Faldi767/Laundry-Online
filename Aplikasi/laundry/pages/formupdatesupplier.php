<?php
include('koneksi.php');
$id = $_GET['id'];
$query = mysqli_query($connection, "SELECT * FROM supplier WHERE IDSupplier='$id'");
$row = mysqli_fetch_row($query);
?>
<div class="row">
            <!-- left column -->
            <div class="col-md-6">
              <!-- general form elements -->
              <div class="box box-primary">
                <div class="box-header with-border">
                  <h3 class="box-title">Tambah Supplier</h3>
                </div><!-- /.box-header -->
                <!-- form start -->
                <form role="form" action="pages/processupdatesupplier.php" method="post">
                  <div class="box-body">
				  <div class="form-group">
                      <label for="nama">ID</label>
                      <input type="text" name="ID" class="form-control" id="nik" placeholder="ID Supplier" value="<?php echo $row[0]; ?>" required>
                    </div>
				  <div class="form-group">
                      <label for="nama">Nama</label>
                      <input type="text" name="nama" class="form-control" id="nik" placeholder="Nama" value="<?php echo $row[1]; ?>" required>
                    </div>
					<div class="form-group">
                      <label for="nama">Alamat</label>
                      <input type="text" name="alamat" class="form-control" id="nama" placeholder="Alamat" value="<?php echo $row[2]; ?>" required>
                    </div>
					<div class="form-group">
                      <label for="alamat">Telepon</label>
					  <script>function isNumberKey(evt){
    var charCode = (evt.which) ? evt.which : event.keyCode
    if (charCode > 31 && (charCode < 48 || charCode > 57))
        return false;
    return true;
}</script>
                      <input type="text" name="telepon" class="form-control" id="alamat" placeholder="Telepon" value="<?php echo $row[3]; ?>" onkeypress="return isNumberKey(event)" required>
                    </div>
                  </div><!-- /.box-body -->
                  <div class="box-footer">
                    <button type="submit" class="btn btn-primary">Submit</button>
                  </div>
                </form>
              </div><!-- /.box -->
            </div><!--/.col (left) -->
          </div>   <!-- /.row -->