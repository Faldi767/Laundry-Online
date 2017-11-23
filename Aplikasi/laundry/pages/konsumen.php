<div class="row">
            <div class="col-xs-12">
              <div class="box box-primary">
                <div class="box-header">
                  <h3 class="box-title">Konsumen</h3>
                </div><!-- /.box-header -->
                <div class="box-body table-responsive no-padding">
                  <table class="table table-hover">
                    <tr>
                      <th>Kode</th>
                      <th>Nama</th>
                      <th>Alamat</th>
                      <th>Telpon</th>
                    </tr>
					<?php
					include('koneksi.php');
					$query = mysqli_query($connection, 'SELECT * FROM konsumen');
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
							</tr>
							<?php
						}
					}
					mysqli_close($connection)
					?>
                  </table>
                </div><!-- /.box-body -->
              </div><!-- /.box -->
			  <a class="btn btn-primary" href="?pages=tambahkonsumen"><span class="glyphicon glyphicon-plus"></span> Tambah Konsumen</a>
			  <a class="btn btn-primary" href="?pages=hapuskonsumen"><span class="glyphicon glyphicon-minus"></span> Hapus Konsumen</a>
			  <a class="btn btn-primary" href="?pages=updatekonsumen"><span class="glyphicon glyphicon-pencil"></span> Update Konsumen</a>
            </div>
          </div>