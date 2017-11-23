<?php
include('koneksi.php');
session_start();
if(isset($_POST['submit']))
{
$username = $_POST['username'];
$password = $_POST['password'];
$query = mysqli_query($connection, "SELECT * FROM login JOIN karyawan ON login.NIK=karyawan.NIK WHERE UserName='$username' AND Password='$password'");
if($query)
{
	$row = mysqli_fetch_array($query);
	if(mysqli_num_rows($query) > 0)
	{
		$_SESSION['username'] = $username;
		header("Location: ../index.php");
	}
	else
	{
		echo '<script type="text/javascript">alert("Username / Password Tidak Valid");window.location="../index.php?pages=login"</script>';
	}
	mysqli_close($connection);
}
}
?>