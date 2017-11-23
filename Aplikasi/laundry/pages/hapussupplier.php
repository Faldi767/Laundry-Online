<?php
include('koneksi.php');
$id = $_GET['id'];
$query = mysqli_query($connection, "DELETE FROM supplier WHERE IDSupplier='$id'");
if($query)
{
header('Location: ../index.php?pages=supplier');
}
else
{
echo '<script type="text/javascript">alert("Data Gagal Dihapus.");window.location="../index.php?pages=hapussupplier"</script>';
}
mysqli_close($connection);
?>