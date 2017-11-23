<?php
include('koneksi.php');
$nik = $_POST['nik'];
$nama = $_POST['nama'];
$alamat = $_POST['alamat'];
$telepon = $_POST['telepon'];
$gender = $_POST['gender'];
$query = mysqli_query($connection, "UPDATE karyawan SET NmKaryawan='$nama', AlmtKaryawan='$alamat', TelpKaryawan='$telepon', GenderKaryawan='$gender' WHERE NIK='$nik'");
if($query)
{
	header('Location: ../index.php?pages=karyawan');
	mysqli_close($connection);
}
else
{
	echo '<script type="text/javascript">alert("Data Gagal di Update");window.location="../index.php?pages=formupdatekaryawan&id='.$nik.'"</script>';
	mysqli_close($connection);
}
?>