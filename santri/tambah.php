<html>
	<head>
		<title>Tambah Data</title>
	</head>
	<body>
	<?php 
	session_start();

	if (isset($_SESSION['email'])) {

	include '../menu/menu.html'; ?> 
		<form method=post action="proses_tambah.php">
			<table class="input">
				<tr><td>
				Nama	:<br><input type="text" name="nama"><br>
				</td></tr>
				<tr><td>
				Password :<br><input type="password" name="password"><br>
				</td></tr>
				<tr><td>
				Email	:<br><input type="email" name="email">
				</td></tr>
				<tr><td>
				Tanggal Lahir	:<br><input type="date" name="tanggallahir"><br>
				</td></tr>
				<tr><td>
				<p>
				<input type="submit" value="Kirim">
				</p>
				</td></tr>
			</table>
		</form>
		<?php
		} else {
		header('location:../login/login.php');
		}
		?>
	</body>
</html>
