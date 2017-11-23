<?php
include('koneksi.php');
$namakonsumen = $_POST['namakonsumen'];
$alamatkonsumen = $_POST['alamatkonsumen'];
$telpkonsumen = $_POST['telpkonsumen'];
$tgl = date('Y-m-d');
$tglambil = $_POST['tanggal'];
$jenispakaian = $_POST['jenispakaian'];
$jenislaundry = $_POST['jenislaundry'];
$diskon = $_POST['diskon'];
$jumlahpakaian = $_POST['jumlahpakaian'];
$beratpakaian = $_POST['beratpakaian'];
mysqli_query($connection, "INSERT INTO transaksi (TglTransaksi,TglAmbil,Diskon) VALUES ('$tgl','$tglambil','$diskon')");
$pakaianquery = mysqli_query($connection, "SELECT * FROM tarif WHERE IDJenisPakaian='$jenispakaian'");
if($pakaianquery)
{
	$pakaianrow = mysqli_fetch_row($pakaianquery);
	$totalharga = $beratpakaian * $pakaianrow[2];
	$diskonharga = $totalharga - ($totalharga * $diskon/100);
	mysqli_query($connection, "INSERT INTO rinciantransaksi (Jumlah, Berat, JumlahPakaian, NamaKonsumen, JenisLaundry, Diskon, IDJenisPakaian) VALUES ('$diskonharga', '$beratpakaian', '$jumlahpakaian', '$namakonsumen', '$jenislaundry', '$diskon', '$jenispakaian')");
	header('Location: ../index.php?pages=rinciantransaksi');
}
mysqli_close($connection);
?>