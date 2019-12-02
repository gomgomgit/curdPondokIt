<html>
	<head>
		<title>Edit Data</title>
	</head>
	<body>
		<?php
		session_start();

		if (isset($_SESSION['email'])) {

		include '../menu/menu.html';
		include '../koneksi/koneksi.php';
		$ID     = $_GET['id'];
		$sql    = "SELECT * FROM santri WHERE id=$ID";
		$result = mysqli_query($connect,$sql);
		$row    = mysqli_fetch_assoc($result);
		?>
		<form action="proses_edit.php" method="POST">
		<table class="input">
			<tr><td>
			<input type="hidden" name="id" value="<?php echo $ID; ?>">
			Nama : <br>
			<input type="text" name="nama" value="<?php echo $row['nama']; ?>"><br>
			</td></tr>
			<tr><td>
			Password : <br>
			<input type="password" name="password" value="<?php echo $row['password']; ?>"><br>
			</td></tr>
			<tr><td>
			Email : <br>
			<input type="email" name="email" value="<?php echo $row['email']; ?>"><br>
			</td></tr>
			<tr><td>
			TTL : <br>
			<input type="date" name="tanggallahir" value="<?php echo $row['tanggallahir']; ?>"><br>
			</td></tr>
			<tr><td>
			<input type="submit" value="Edit">
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
