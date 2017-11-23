<?php
include('koneksi.php');
$id = $_GET['id'];
$query = mysqli_query($connection, "DELETE FROM konsumen WHERE KodeKonsumen='$id'");
if($query)
{
header('Location: ../index.php?pages=konsumen');
}
else
{
echo '<script type="text/javascript">alert("Data Gagal Dihapus.");window.location="../index.php?pages=hapuskonsumen"</script>';
}
mysqli_close($connection);
?>