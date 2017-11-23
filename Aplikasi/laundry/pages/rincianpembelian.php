<div class="row">
            <div class="col-xs-12">
              <div class="box box-primary">
                <div class="box-header">
                  <h3 class="box-title">Rincian Pembelian Barang</h3>
                </div><!-- /.box-header -->
                <div class="box-body table-responsive no-padding">
                  <table class="table table-hover">
                    <tr>
                      <th>ID</th>
                      <th>Jumlah</th>
                      <th>Detil</th>
                    </tr>
                    <?php
					include('koneksi.php');
					$query = mysqli_query($connection, 'SELECT * FROM rincianpembelian');
					if($query)
					{
						while($row = mysqli_fetch_row($query))
						{
							?>
							<tr>
							<td><?php echo $row[0]; ?></td>
							<td><?php echo "Rp ".number_format ($row[1], 2, ',', '.'); ?></td>
							<td><button class="btn btn-primary" data-toggle="modal" data-target="#modal<?php echo $row[0]; ?>">Detil</button></td>
<div class="modal fade" id="modal<?php echo $row[0]; ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">Detail Pembelian</h4>
      </div>
      <div class="modal-body">
			<h4>Nama Supplier : <?php echo $row[5]; ?></h4>
			<h4>Tanggal Pembelian : <?php echo $row[3]; ?></h4>
			<h4>Nama Barang : <?php echo $row[2]; ?></h4>
			<h4>Jumlah Barang Yang Dibeli : <?php echo $row[4]; ?></h4>
      </div>
    </div>
  </div>
</div>
							</tr>
							<?php
						}
					}
					mysqli_close($connection)
					?>
                  </table>
                </div><!-- /.box-body -->
              </div><!-- /.box -->
            </div>
          </div>