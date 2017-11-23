<?php
include('koneksi.php');
$nama = $_POST['nama'];
$alamat = $_POST['alamat'];
$telepon = $_POST['telepon'];
$query = mysqli_query($connection, "INSERT INTO supplier (NmSupplier, AlmtSupplier, TelpSupplier) VALUES ('$nama','$alamat','$telepon')");
if($query)
{
	header('Location: ../index.php?pages=supplier');
}
else
{
	echo '<script type="text/javascript">alert("Data Gagal Disimpan");window.location="../index.php?pages=tambahsupplier"</script>';
}
mysqli_close($connection);
?>