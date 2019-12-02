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
		$sql1    = "SELECT * FROM matapelajaransantri WHERE id=$ID";
		$result1 = mysqli_query($connect,$sql1);
		$row1    = mysqli_fetch_assoc($result1);
		?>
		<form method="POST" action="proses_edit.php">
			<input type="hidden" value="<?= $_GET['id'] ?>" name="id" />
			Nama : 
			
			<select name="namasantri">	
			<?php
			include "../koneksi/koneksi.php";
			$sql = "SELECT id, nama FROM santri";
			$result = mysqli_query($connect, $sql);
			
			if (mysqli_num_rows($result)>0) {
				while ($row = mysqli_fetch_assoc($result)) {
				
					if ($row['id'] == $row1['santri_id']) {
						echo "<option value='$row[id]' selected>$row[nama]</option>";
					} else {
						echo "<option value='$row[id]'>$row[nama]</option>";
					}
				}
			}
			?>
			</select>
			
			<br><br>
			
			Mata Pelajaran : 
			
			<select name="mapelsantri">	
			<?php
			include "../koneksi/koneksi.php";
			$sql = "SELECT id, mapel FROM matapelajaran";
			$result = mysqli_query($connect, $sql);
			
			$nomor = 1;
			if (mysqli_num_rows($result)>0) {
				while ($row = mysqli_fetch_assoc($result)) {
					if ($row['id'] == $row1['matapelajaran_id']) {
						echo "<option value='$row[id]' selected>$row[mapel]</option>";
					} else {
						echo "<option value='$row[id]'>$row[mapel]</option>";
					}
				}
			}
			?>
			</select>
			
			<br><br>
			<label>Nilai  :
			
			<input type="number" name="nilai_angka" value="<?= $row1['nilai_angka'] ;?>" />
			</label>
			
			<br><br>
			
			<input type="submit" value="Edit Data" />
		</form>
	<?php
	} else {
		header('location:../login/login.php');
	} 
	?>
	</body>
</html>
