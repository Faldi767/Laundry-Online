<?php
include('koneksi.php');
$id = $_GET['id'];
$query = mysqli_query($connection, "SELECT * FROM tarif WHERE IDJenisPakaian='$id'");
$row = mysqli_fetch_row($query);
?>
<div class="row">
            <!-- left column -->
            <div class="col-md-6">
              <!-- general form elements -->
              <div class="box box-primary">
                <div class="box-header with-border">
                  <h3 class="box-title">Tambah Tarif</h3>
                </div><!-- /.box-header -->
                <!-- form start -->
                <form role="form" action="pages/processupdatetarif.php" method="post">
                  <div class="box-body">
				  <div class="form-group">
                      <label for="nik">ID Pakaian</label>
                      <input type="text" name="ID" class="form-control" id="nik" placeholder="ID" value="<?php echo $row[0]; ?>" required>
                    </div>
				  <div class="form-group">
                      <label for="nik">Nama Pakaian</label>
                      <input type="text" name="nama" class="form-control" id="nik" placeholder="Nama" value="<?php echo $row[1]; ?>" required>
                    </div>
					<div class="form-group">
                      <label for="nama">Tarif</label>
                      <input type="text" name="tarif" class="form-control" id="nama" placeholder="Tarif" value="<?php echo $row[2]; ?>" required>
                    </div>
                  </div><!-- /.box-body -->
                  <div class="box-footer">
                    <button type="submit" class="btn btn-primary">Submit</button>
                  </div>
                </form>
              </div><!-- /.box -->
            </div><!--/.col (left) -->
          </div>   <!-- /.row -->