<div class="row">
            <div class="col-xs-12">
              <div class="box box-primary">
                <div class="box-header">
                  <h3 class="box-title">Tarif</h3>
                </div><!-- /.box-header -->
                <div class="box-body table-responsive no-padding">
                  <table class="table table-hover">
                    <tr>
                      <th>ID</th>
                      <th>Nama Pakaian</th>
                      <th>Tarif</th>
                    </tr>
                    <?php
					include('koneksi.php');
					$query = mysqli_query($connection, 'SELECT * FROM tarif');
					if($query)
					{
						while($row = mysqli_fetch_row($query))
						{
							?>
							<tr>
							<td><?php echo $row[0]; ?></td>
							<td><?php echo $row[1]; ?></td>
							<td><?php echo $row[2]; ?></td>
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
			  <a class="btn btn-primary" href="?pages=tambahtarif"><span class="glyphicon glyphicon-plus"></span> Tambah Tarif</a>
			  <a class="btn btn-primary" href="?pages=hapustarif"><span class="glyphicon glyphicon-minus"></span> Hapus Tarif</a>
			  <a class="btn btn-primary" href="?pages=updatetarif"><span class="glyphicon glyphicon-pencil"></span> Update Tarif</a>
			  <?php
			  }
			  ?>
            </div>
          </div>