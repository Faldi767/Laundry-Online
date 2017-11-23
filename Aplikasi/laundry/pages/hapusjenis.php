<?php
include('koneksi.php');
$id = $_GET['id'];
$query = mysqli_query($connection, "DELETE FROM jenislaundry WHERE IDJenisLaundry='$id'");
if($query)
{
header('Location: ../index.php?pages=jenis');
}
else
{
echo '<script type="text/javascript">alert("Data Gagal Dihapus.");window.location="../index.php?pages=hapusjenis"</script>';
}
mysqli_close($connection);
?>