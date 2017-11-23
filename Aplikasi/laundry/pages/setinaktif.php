<?php
include('koneksi.php');
$id = $_GET['id'];
$query = mysqli_query($connection,"UPDATE karyawan SET aktif='0' WHERE NIK='$id'");
if($query)
{
header('Location: ../index.php?pages=karyawan');
}
mysqli_close($connection);
?>