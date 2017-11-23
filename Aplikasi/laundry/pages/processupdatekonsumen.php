<?php
include('koneksi.php');
$id = $_POST['kode'];
$nama = $_POST['nama'];
$alamat = $_POST['alamat'];
$telepon = $_POST['telepon'];
$query = mysqli_query($connection, "UPDATE konsumen SET NmKonsumen='$nama', AlmKonsumen='$alamat', TelpKonsumen='$telepon' WHERE KodeKonsumen='$id'");
if($query)
{
	header('Location: ../index.php?pages=konsumen');
	mysqli_close($connection);
}
else
{
	echo '<script type="text/javascript">alert("Data Gagal di Update");window.location="../index.php?pages=formupdatekonsumen&id='.$id.'"</script>';
	mysqli_close($connection);
}
?>