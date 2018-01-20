<?php
include "../config/config.php";
$ni = $_GET['ni'];

if (isset($_POST['submit'])){
	$ni 	= $_POST['ni'];
	$nama 	= $_POST['nama'];
	$alamat = $_POST['alamat'];
	$jk 	= $_POST['jk'];
	$tgllahir = $_POST['tanggallahir'];

$sql = "UPDATE pegawai SET ni='$ni', nama='$nama', alamat='$alamat', jk='$jk', tanggallahir='$tgllahir' WHERE ni='$ni'";
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

$sql = "SELECT ni, nama, alamat, jk, tanggallahir FROM pegawai WHERE ni='$ni'";
$query = mysqli_query($koneksi, $sql);
$hasil = mysqli_fetch_assoc($query);


?>
<!DOCTYPE html>
<html>
<head>
	<title>Input Data</title>
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
				buttonText : "Tgl"
			});
		});
	</script>
</head>
<body>
	<div class="col-sm-5">
	<h2><u>Ubah Data yang Ada</u></h2>
	<a href="home.php" class="btn btn-warning">>Kembali</a>
	<form method="POST">
		<table class="table table-striped">
			<tr>
				<td><label>Nomer Induk</label></td>
				<td>:<input type="text" name="ni" value="<?php echo $hasil['ni'] ?>" style="width: 78%; height: 35px;"></td>
			</tr>
			<tr>
				<td><label>Nama</label></td>
				<td>:<input type="text" name="nama" value="<?php echo $hasil['nama'];?>" style="width: 78%; height: 35px;"></td>
			</tr>
			<tr>
				<td><label>Alamat</label></td>
				<td>:<textarea name="alamat" style="width: 78%; height: 60px;"><?php echo $hasil['alamat'];?></textarea></td>
			</tr>
			<tr>
				<td><label>Jenis Kelamin</label></td>
				<td>:
					<select name="jk">
						<option value="<?php echo $hasil['jk'];?>" style="width: 78%; height: 35px;"><?php echo $hasil['jk'];?></option>
						<option value="Perempuan">Perempuan</option>
						<option value="Laki-Laki">Laki-Laki</option>
					</select>
				</td>
			</tr>
			<tr>
				<td><label>Tanggal Lahir</label></td>
				<td>:<input id="tanggal" type="text" name="tanggallahir" style="width: 50%; height: 35px;" value="<?php echo $hasil['tanggallahir'];?>" /></td>
			</tr>
		</table>
				<td><input type="submit" name="submit" value="Simpan" class="btn btn-success" style="float: right"></td>
	</form>
	</div>
</body>
</html>