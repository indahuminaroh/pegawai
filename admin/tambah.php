<?php
include "../config/config.php";
if (isset($_POST['submit'])){
	$ni 	= $_POST['ni'];
	$nama 	= $_POST['nama'];
	$alamat = $_POST['alamat'];
	$jk 	= $_POST['jk'];
	$tgllahir = $_POST['tanggallahir'];
	$image = $_POST['image'];

$sql = "INSERT INTO pegawai(ni, nama, alamat, jk, tanggallahir, image) VALUES ('$ni', '$nama', '$alamat', '$jk', '$tgllahir', '$image')";
$query = mysqli_query($koneksi, $sql);
header("location: home.php");

var_dump($query);
	if ($query) {
		echo "Berhasil";
	}else{
		echo "gagal";
		echo mysqli_error($koneksi);
	}
}
?>
<!DOCTYPE html>
<html> 
<head>
	<title>Tambah Data</title>
	<link rel="stylesheet" type="text/css" href="../bootstrap/css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="../bootstrap/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="../bootstrap/css/bootstrap.theme.min.css">
	<link href="../../jquery/jqueryui/jquery-ui.min.css" rel="stylesheet">
	<link href="../../jquery/jqueryui/jquery-ui.structure.min.css" rel="stylesheet">
	<link href="../../jquery/jqueryui/jquery-ui.theme.css" rel="stylesheet">
	<script type="text/javascript" src="../../jquery/jQuery/jquery.js"></script>
	<script type="text/javascript" src="../../jquery/jqueryui/jquery-ui.min.js"></script>
	<script type="text/javascript" src="../JS/jquery.ui.datepicker-id.js"></script>
	<link href="../../jquery/jqueryui/jquery-ui.css" rel="stylesheet">
	<script type="text/javascript">
		$(document).ready(function(){
			$("#tanggal"). datepicker({
				dateFormat : "dd MM yy",
				showOn : "button",
				buttonImage : "../img/date.png",
				buttonImageOnly: true,
				changeMonth : true,
				changeYear: true,
			});
		});
	</script>
</head>
<body>
	<div class="col-sm-5">
	<h2>Tambahkan Data Pegawai Baru</h2>
	<a href="home.php" class="btn btn-info">>Kembali</a>
	<br>
	<form method="POST">
		<table class="table table-striped">
			<tr>
				<td><label>No Induk</label></td>
				<td>:<input type="text" name="ni" style="width: 90%; height: 35px;"></td>
			</tr>
			<tr>
				<td><label>Nama</label></td>
				<td>:<input type="text" name="nama" style="width: 90%; height: 35px;"></td>
			</tr>
			<tr>
				<td><label>Alamat</label></td>
				<td>:<textarea name="alamat" style="width: 90%; height: 60px;"></textarea></td>
			</tr>
			<tr>
				<td><label>Jenis Kelamin</label></td>
				<td>:
					<select name="jk">
						<option value="Perempuan">Perempuan</option>
						<option value="Laki-Laki">Laki-Laki</option>
					</select>
				</td>
			</tr>
			<tr>
				<td><label>Tanggal Lahir</label></td>
				<td>:<input id="tanggal" type="text" name="tanggallahir" style="width: 50%; height: 35px;" /></td>
			</tr>
		</table>
			<input type="submit" name="submit" value="Tambahkan" class="btn btn-success" style="float: right;">
	</form>
	</div>
</body>
</html>
