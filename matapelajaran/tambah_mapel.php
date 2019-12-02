<html>
	<head>
		<title>Tambah Mata Pelajaran</title>
	</head>		
	<body>
	<?php 
	session_start();

	if (isset($_SESSION['email'])) {

	include '../menu/menu.html'; 
	?>
		<form method="post" action="proses_tambah_mapel.php">
		<table class="input">
			<tr><td>
			Mata Pelajaran <br><input type="text" name="mapel" /><br>
			</td></tr>
			<tr><td>
			<input type="submit" value="kirim">
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
