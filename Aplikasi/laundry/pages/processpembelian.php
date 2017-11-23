<?php
include('koneksi.php');
$namabarang = $_POST['namabarang'];
$jumlah = $_POST['jumlah'];
$total = $_POST['total'];
$tgl = date('Y-m-d');
$namasupplier = $_POST['namasupplier'];
$query = mysqli_query($connection, "SELECT * FROM barang where NmBarang='$namabarang'");
if($query)
{
	if(mysqli_num_rows($query) > 0)
	{
		$row = mysqli_fetch_row($query);
		$stockbaru = $row[2] + $jumlah;
		$updatequery = mysqli_query($connection, "UPDATE barang SET NmBarang='$namabarang', Stok='$stockbaru', TglUpdateStok='$tgl' WHERE NmBarang='$namabarang'");
	}
	else
	{
		$insertquery = mysqli_query($connection, "INSERT INTO barang (NmBarang, Stok, TglUpdateStok) VALUES ('$namabarang', '$jumlah', '$tgl')");
	}
	mysqli_query($connection, "INSERT INTO rincianpembelian (Jumlah, NmBarang, TglStok, Barang, NamaSupplier) VALUES ('$total', '$namabarang', '$tgl', '$jumlah', '$namasupplier')");
	mysqli_query($connection, "INSERT INTO pembelian (TglPembelian, TotalBiaya) VALUES ('$tgl', '$total')");
	header('Location: ../index.php?pages=barang');
	}
mysqli_close($connection);
?>