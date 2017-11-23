<div class="row">
            <div class="col-xs-12">
              <div class="box box-primary">
                <div class="box-header">
                  <h3 class="box-title">Karyawan</h3>
                </div><!-- /.box-header -->
                <div class="box-body table-responsive no-padding">
                  <table class="table table-hover">
                    <tr>
                      <th>NIK</th>
                      <th>Nama</th>
                      <th>Alamat</th>
                      <th>Telepon</th>
                      <th>Gender</th>
					  <th>Action</th>
                    </tr>
					<?php
					include('koneksi.php');
					$query = mysqli_query($connection, 'SELECT * FROM karyawan');
					if($query)
					{
						while($row = mysqli_fetch_row($query))
						{
							?>
							<tr>
							<td><?php echo $row[0]; ?></td>
							<td><?php echo $row[1]; ?></td>
							<td><?php echo $row[2]; ?></td>
							<td><?php echo $row[3]; ?></td>
							<td><?php echo $row[4]; ?></td>
							<td><a class="btn btn-primary" href="index.php?pages=formupdatekaryawan&id=<?php echo $row[0]; ?>">Update</button></td>
							</tr>
							<?php
						}
					}
					mysqli_close($connection)
					?>
                  </table>
                </div><!-- /.box-body -->
              </div><!-- /.box -->
			  <a class="btn btn-primary" href="?pages=karyawan"><span class="glyphicon glyphicon-arrow-left"></span> Back</a>
            </div>
          </div>