<?php
include('koneksi.php');
$nik = $_POST['nik'];
$nama = $_POST['nama'];
$alamat = $_POST['alamat'];
$telepon = $_POST['telepon'];
$gender = $_POST['gender'];
$query = mysqli_query($connection, "INSERT INTO karyawan (NIK, NmKaryawan, AlmtKaryawan, TelpKaryawan, GenderKaryawan) VALUES ('$nik','$nama','$alamat','$telepon','$gender')");
if($query)
{
	header('Location: ../index.php?pages=karyawan');
}
else
{
	echo '<script type="text/javascript">alert("Data Gagal Disimpan");window.location="../index.php?pages=tambahkaryawan"</script>';
}
mysqli_close($connection);
?>