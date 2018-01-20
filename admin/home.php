<?php
	include "../config/config.php";
	$sql = "SELECT ni, nama, alamat, jk, tanggallahir FROM pegawai";
	$query = mysqli_query($koneksi, $sql);
?>
<!DOCTYPE html>
<html>
<head>
	<title>Daftar Pegawai</title>
	<link rel="stylesheet" type="text/css" href="../css/home.css">
	<link rel="stylesheet" type="text/css" href="../bootstrap/css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="../bootstrap/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="../bootstrap/css/bootstrap.theme.css">
	<link rel="stylesheet" type="text/css" href="../bootstrap/css/bootstrap.theme.min.css">
</head>
<body>
	<div class="container-fluid">
	<h1><u>Daftar Nama Pegawai</u></h1>
	<a href="tambah.php" class="btn btn-info">Tambah Data</a>
	<table class="table table-striped">
		<thead class="thead-light">
			<tr>
        			<th>No Induk</th>
        			<th>Nama</th>
        			<th>Alamat</th>
        			<th>Kenis Kelamin</th>
        			<th>Tanggal Lahir</th>
        			<th>Action</th>
			</tr>
		</thead>
		<tbody>
			<?php foreach ($query as $row): ?>	
      		<tr>
      			<td>
      				<?php echo $row['ni'];?>
      			</td>
      			<td>
      				<?php echo $row['nama'];?>
      			</td>
      			<td>
      				<?php echo $row['alamat'];?>
      			</td>
      			<td>
      				<?php echo $row['jk'];?>
      			</td>
      			<td>
      				<?php echo $row['tanggallahir'];?>
      			</td>

				<td>
					<a href="edit.php?ni=<?php echo $row['ni'];?>" class="btn btn-success">Edit</a>
          			<a href="delete.php?ni=<?php echo $row['ni'];?>" class="btn btn-danger" onclick="return confirm('Apakah anda yakin ingin menghapus?')">Hapus</a>
				</td>
			</tr>
			<?php endforeach; ?>
		</tbody>
	</table>
	<a href="logout.php" class="btn btn-danger" style="float: right;">Log Out</a>
	</div>
</body>
</html>
              