<div class="row">
            <!-- left column -->
            <div class="col-md-6">
              <!-- general form elements -->
              <div class="box box-primary">
                <div class="box-header with-border">
                  <h3 class="box-title">Tambah Karyawan</h3>
                </div><!-- /.box-header -->
                <!-- form start -->
                <form role="form" action="pages/processtambah.php" method="post">
                  <div class="box-body">
				  <div class="form-group">
                      <label for="nama">NIK</label>
                      <input type="text" name="nik" class="form-control" id="nik" placeholder="NIK" required>
                    </div>
					<div class="form-group">
                      <label for="nama">Nama Karyawan</label>
                      <input type="text" name="nama" class="form-control" id="nama" placeholder="Nama Karyawan" required>
                    </div>
					<div class="form-group">
                      <label for="alamat">Alamat</label>
                      <input type="text" name="alamat" class="form-control" id="alamat" placeholder="Alamat" required>
                    </div>
					<div class="form-group">
                      <label for="telepon">Telepon</label>
					  <script>
					  function isNumberKey(evt){
    var charCode = (evt.which) ? evt.which : event.keyCode
    if (charCode > 31 && (charCode < 48 || charCode > 57))
        return false;
    return true;
}
					  </script>
					  <input type="text" name="telepon" class="form-control" id="telepon" onkeypress="return isNumberKey(event)">
                    </div>
					<div class="form-group">
                    <label>Gender</label>
                    <select name="gender" class="form-control select2" style="width: 100%;">
                      <option value="L">Laki-Laki</option>
					  <option value="P">Perempuan</option>
                    </select>
                  </div><!-- /.form-group -->
                  </div><!-- /.box-body -->
                  <div class="box-footer">
                    <button type="submit" class="btn btn-primary">Submit</button>
                  </div>
                </form>
              </div><!-- /.box -->
            </div><!--/.col (left) -->
          </div>   <!-- /.row -->