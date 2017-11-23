<?php
include('koneksi.php');
$id = $_POST['ID'];
$nama = $_POST['nama'];
$alamat = $_POST['alamat'];
$telepon = $_POST['telepon'];
$query = mysqli_query($connection, "UPDATE supplier SET NmSupplier='$nama', AlmtSupplier='$alamat', TelpSupplier='$telepon' WHERE IDSupplier='$id'");
if($query)
{
	header('Location: ../index.php?pages=supplier');
	mysqli_close($connection);
}
else
{
	echo '<script type="text/javascript">alert("Data Gagal di Update");window.location="../index.php?pages=formupdatesupplier&id='.$id.'"</script>';
	mysqli_close($connection);
}
?>