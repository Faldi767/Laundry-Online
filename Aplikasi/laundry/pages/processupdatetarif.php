<?php
include('koneksi.php');
$id = $_POST['ID'];
$nama = $_POST['nama'];
$tarif = $_POST['tarif'];
$query = mysqli_query($connection, "UPDATE tarif SET NmPakaian='$nama', Tarif='$tarif' WHERE IDJenisPakaian='$id'");
if($query)
{
	header('Location: ../index.php?pages=tarif');
	mysqli_close($connection);
}
else
{
	echo '<script type="text/javascript">alert("Data Gagal di Update");window.location="../index.php?pages=formupdatetarif&id='.$id.'"</script>';
	mysqli_close($connection);
}
?>