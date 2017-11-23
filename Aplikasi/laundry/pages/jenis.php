<div class="row">
            <div class="col-xs-12">
              <div class="box box-primary">
                <div class="box-header">
                  <h3 class="box-title">Jenis Laundry</h3>
                </div><!-- /.box-header -->
                <div class="box-body table-responsive no-padding">
                  <table class="table table-hover">
                    <tr>
                      <th>ID</th>
                      <th>Jenis Laundry</th>
                    </tr>
					<?php
					include('koneksi.php');
					$query = mysqli_query($connection, 'SELECT * FROM jenislaundry');
					if($query)
					{
						while($row = mysqli_fetch_row($query))
						{
							?>
							<tr>
							<td><?php echo $row[0]; ?></td>
							<td><?php echo $row[1]; ?></td>
							</tr>
							<?php
						}
					}
					mysqli_close($connection)
					?>
                  </table>
                </div><!-- /.box-body -->
              </div><!-- /.box -->
			  <?php
			  if(isset($_SESSION['username']))
			  {
			  ?>
			  <a class="btn btn-primary" href="?pages=tambahjenis"><span class="glyphicon glyphicon-plus"></span> Tambah Jenis</a>
			  <a class="btn btn-primary" href="?pages=hapusjenis"><span class="glyphicon glyphicon-minus"></span> Hapus Jenis</a>
			  <a class="btn btn-primary" href="?pages=updatejenis"><span class="glyphicon glyphicon-pencil"></span> Update Jenis</a>
			  <?php
			  }
			  ?>
            </div>
          </div>