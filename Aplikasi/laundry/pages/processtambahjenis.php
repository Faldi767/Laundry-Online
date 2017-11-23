<?php
include('koneksi.php');
$nama = $_POST['jenis'];
$query = mysqli_query($connection, "INSERT INTO jenislaundry (NmJenisLaundry) VALUES ('$nama')");
if($query)
{
	header('Location: ../index.php?pages=jenis');
}
else
{
	echo '<script type="text/javascript">alert("Data Gagal Disimpan");window.location="../index.php?pages=tambahjenis"</script>';
}
mysqli_close($connection);
?>