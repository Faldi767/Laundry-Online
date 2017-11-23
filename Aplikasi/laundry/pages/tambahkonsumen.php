<div class="row">
            <!-- left column -->
            <div class="col-md-6">
              <!-- general form elements -->
              <div class="box box-primary">
                <div class="box-header with-border">
                  <h3 class="box-title">Tambah Konsumen</h3>
                </div><!-- /.box-header -->
                <!-- form start -->
                <form role="form" action="pages/processtambahkonsumen.php" method="post">
                  <div class="box-body">
				  <div class="form-group">
                      <label for="nama">Nama</label>
                      <input type="text" name="nama" class="form-control" id="nik" placeholder="Nama" required>
                    </div>
					<div class="form-group">
                      <label for="nama">Alamat</label>
                      <input type="text" name="alamat" class="form-control" id="nama" placeholder="Alamat" required>
                    </div>
					<div class="form-group">
                      <label for="alamat">Telepon</label>
					  <script>function isNumberKey(evt){
    var charCode = (evt.which) ? evt.which : event.keyCode
    if (charCode > 31 && (charCode < 48 || charCode > 57))
        return false;
    return true;
}</script>
                      <input type="text" name="telepon" class="form-control" id="alamat" placeholder="Telepon" onkeypress="return isNumberKey(event)" required>
                    </div>
                  </div><!-- /.box-body -->
                  <div class="box-footer">
                    <button type="submit" class="btn btn-primary">Submit</button>
                  </div>
                </form>
              </div><!-- /.box -->
            </div><!--/.col (left) -->
          </div>   <!-- /.row -->