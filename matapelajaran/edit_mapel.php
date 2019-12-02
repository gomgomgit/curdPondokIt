<html>
	<head>
		<title>Edit Mata Pelajaran</title>
	</head>
	<body>
		<?php
		session_start();

		if (isset($_SESSION['email'])) {

		include '../menu/menu.html';
		include '../koneksi/koneksi.php';
		$ID		= $_GET['id'];
		$sql	= "SELECT * FROM matapelajaran WHERE id=$ID";
		$result	= mysqli_query($connect, $sql);
		$row	= mysqli_fetch_assoc($result);
		?>
		
		<form action="proses_edit_mapel.php" method="post">
		<table class="input">
			<tr><td>
			<input type="hidden" name="id" value="<?= $ID; ?>">
			Mata Pelajaran :<br>
			<input type="text" name="mapel" value="<?= $row['mapel'];?> "><br>
			</td></tr>
			<tr><td>
			<input type="submit" value="Edit" />
			</td></tr>
		</form>
		<?php
		} else {
			header('location:../login/login.php');
		} 
		?>
	</body>
</html>
