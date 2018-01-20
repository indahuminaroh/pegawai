<?php
session_start();
include '../config/config.php';
$user = $_POST['user'];
$pass = md5($_POST['pass']);

$sql = "SELECT * FROM admin WHERE user='$user' AND pass='$pass'";
$query = mysqli_query($koneksi, $sql);
$hasil = mysqli_fetch_assoc($query);

if($hasil != null){
	if ($pass==$hasil['pass']){
		$_SESSION['user'] = $hasil;
		header("location: home.php");
	}else {
		header("location: login.php");
	}
}else {
	header("location: login.php");
}
?>  