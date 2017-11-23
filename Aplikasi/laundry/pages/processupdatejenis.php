<?php
include('koneksi.php');
$id = $_POST['ID'];
$nama = $_POST['jenis'];
$query = mysqli_query($connection, "UPDATE jenislaundry SET NmJenisLaundry='$nama' WHERE IDJenisLaundry='$id'");
if($query)
{
	header('Location: ../index.php?pages=jenis');
	mysqli_close($connection);
}
else
{
	echo '<script type="text/javascript">alert("Data Gagal di Update");window.location="../index.php?pages=formupdatejenis&id='.$id.'"</script>';
	mysqli_close($connection);
}
?>