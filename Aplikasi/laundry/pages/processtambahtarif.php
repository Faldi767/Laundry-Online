<?php
include('koneksi.php');
$nama = $_POST['nama'];
$tarif = $_POST['tarif'];
$query = mysqli_query($connection, "INSERT INTO tarif (NmPakaian, Tarif) VALUES ('$nama','$tarif')");
if($query)
{
	header('Location: ../index.php?pages=tarif');
}
else
{
	echo '<script type="text/javascript">alert("Data Gagal Disimpan");window.location="../index.php?pages=tambahtarif"</script>';
}
mysqli_close($connection);
?>