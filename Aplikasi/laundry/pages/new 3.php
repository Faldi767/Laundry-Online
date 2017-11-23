<?php
include('koneksi.php');
$id = $_GET['id'];
$query = mysqli_query($connection,'UPDATE karyawan SET aktif=1 WHERE NIK="$id"');
header('Location: karyawan.php');
?>