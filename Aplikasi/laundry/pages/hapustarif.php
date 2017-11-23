<?php
include('koneksi.php');
$id = $_GET['id'];
$query = mysqli_query($connection, "DELETE FROM tarif WHERE IDJenisPakaian='$id'");
if($query)
{
header('Location: ../index.php?pages=tarif');
}
else
{
echo '<script type="text/javascript">alert("Data Gagal Dihapus.");window.location="../index.php?pages=hapustarif"</script>';
}
mysqli_close($connection);
?>