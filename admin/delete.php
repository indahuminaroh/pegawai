<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<?php
		include '../config/config.php';
		$ni = $_GET['ni'];

		$sql = "DELETE FROM pegawai WHERE ni='$ni'";
		$query = mysqli_query($koneksi, $sql);
		if($query){
			echo "Berhasil";
			header("location: home.php");
		}else{
			echo "Tidak Dihapus";
		}
	?>
</body>
</html>