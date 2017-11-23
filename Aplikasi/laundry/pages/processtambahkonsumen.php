<?php
include('koneksi.php');
$nama = $_POST['nama'];
$alamat = $_POST['alamat'];
$telepon = $_POST['telepon'];
$query = mysqli_query($connection, "INSERT INTO konsumen (NmKonsumen, AlmKonsumen, TelpKonsumen) VALUES ('$nama','$alamat','$telepon')");
if($query)
{
	header('Location: ../index.php?pages=konsumen');
}
else
{
	echo '<script type="text/javascript">alert("Data Gagal Disimpan");window.location="../index.php?pages=tambahkonsumen"</script>';
}
mysqli_close($connection);
?>