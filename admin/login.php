<?php
session_start();
if(isset($_SESSION['user'])){
	header("location: home.php");
	exit();
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<title>Login Admin</title>
	<link rel="stylesheet" type="text/css" href="../css/login.css">
	<link rel="stylesheet" type="text/css" href="../bootstrap/css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="../bootstrap/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="../bootstrap/css/bootstrap.theme.css">
	<link rel="stylesheet" type="text/css" href="../bootstrap/css/bootstrap.theme.min.css">
</head>
<body>
	<form method="post" name="form_login" id="form_login" action="proses-login.php">
		<table class="form" align="center">
			<tr>
				<td colspan="2">
					<h1 align="center">Login Administrator</h1>
				</td>
			</tr>
			<tr>
				<td>Username</td>
				<td>
					:<input type="text" name="user" id="username" style="width: 95%; height: 35px;" />
				</td>
			</tr>
			<br>
			<tr>
				<td>Password</td>
				<td>
					:<input type="password" name="pass" id="password" style="width: 95%; height: 35px;"/>
				</td>
			</tr>
			<tr style="height:10px"></tr>
			<tr>
				<td colspan="2" align="right">
					<input type="submit" name="login" id="login" value="Login" class="btn btn-info" />
				</td>
			</tr>
		</table>
	</form>
</body>
</html>