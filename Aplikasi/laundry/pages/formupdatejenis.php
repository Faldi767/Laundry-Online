<?php
include('koneksi.php');
$id = $_GET['id'];
$query = mysqli_query($connection, "SELECT * FROM jenislaundry WHERE IDJenisLaundry='$id'");
$row = mysqli_fetch_row($query);
?>
<div class="row">
            <!-- left column -->
            <div class="col-md-6">
              <!-- general form elements -->
              <div class="box box-primary">
                <div class="box-header with-border">
                  <h3 class="box-title">Update Jenis</h3>
                </div><!-- /.box-header -->
                <!-- form start -->
                <form role="form" action="pages/processupdatejenis.php" method="post">
                  <div class="box-body">
				  <div class="form-group">
                      <label for="nik">ID</label>
                      <input type="text" name="ID" class="form-control" id="nik" placeholder="Jenis" value="<?php echo $row[0]; ?>" required>
                    </div>
				  <div class="form-group">
                      <label for="nik">Nama Jenis</label>
                      <input type="text" name="jenis" class="form-control" id="nik" placeholder="Jenis" value="<?php echo $row[1]; ?>" required>
                    </div>
                  </div><!-- /.box-body -->
                  <div class="box-footer">
                    <button type="submit" class="btn btn-primary">Submit</button>
                  </div>
                </form>
              </div><!-- /.box -->
            </div><!--/.col (left) -->
          </div>   <!-- /.row -->