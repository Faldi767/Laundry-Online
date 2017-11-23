<?php
include('koneksi.php');
$id = $_GET['id'];
$query = mysqli_query($connection, "DELETE FROM karyawan WHERE NIK='$id'");
if($query)
{
header('Location: ../index.php?pages=karyawan');
}
else
{
echo '<script type="text/javascript">alert("Data Gagal Dihapus.");window.location="../index.php?pages=hapuskaryawan"</script>';
}
mysqli_close($connection);
?>