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
					  <th>Aktif</th>
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
							<td><?php
							if($row[5] == 0)
							{
							?>
							<a href="pages/setaktif.php?id=<?php echo $row[0]; ?>">Tidak Aktif</a>
							<?php
							}
							else
							{
							?>
							<a href="pages/setinaktif.php?id=<?php echo $row[0]; ?>">Aktif</a>
							<?php
							}
							?>
							</td>
							</tr>
							<?php
						}
					}
					mysqli_close($connection)
					?>
                  </table>
                </div><!-- /.box-body -->
              </div><!-- /.box -->
			  <a class="btn btn-primary" href="?pages=tambahkaryawan"><span class="glyphicon glyphicon-plus"></span> Tambah Karyawan</a>
			  <a class="btn btn-primary" href="?pages=hapuskaryawan"><span class="glyphicon glyphicon-minus"></span> Hapus Karyawan</a>
			  <a class="btn btn-primary" href="?pages=updatekaryawan"><span class="glyphicon glyphicon-pencil"></span> Update Karyawan</a>
            </div>
          </div>