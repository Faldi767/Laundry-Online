<?php
include('koneksi.php');
$namabarang = $_POST['namabarang'];
$jumlah = $_POST['stock'];
$tgl = date('Y-m-d');
$query = mysqli_query($connection, "SELECT * FROM barang WHERE KodeBarang='$namabarang'");
if($query)
{
	$row = mysqli_fetch_row($query);
	if($row[2] > $jumlah)
	{
	$totalupdate = $row[2] - $jumlah;
	mysqli_query($connection, "UPDATE barang SET Stok='$totalupdate', TglUpdateStok='$tgl' WHERE KodeBarang='$namabarang'");
	mysqli_query($connection, "INSERT pemakaianbarang (Jumlah) VALUES ('$jumlah')");
	header('Location: ../index.php?pages=barang');
	}
	elseif($row[2] == $jumlah)
	{
		mysqli_query($connection, "DELETE FROM barang WHERE KodeBarang='$namabarang'");
		mysqli_query($connection, "INSERT pemakaianbarang (Jumlah) VALUES ('$jumlah')");
		header('Location: ../index.php?pages=barang');
	}
	elseif($row[2] < $jumlah)
	{
		echo '<script type="text/javascript">alert("Jumlah Barang Tidak Valid");window.location="../index.php?pages=pemakaian"</script>';
	}
	mysqli_close($connection);
}
?>