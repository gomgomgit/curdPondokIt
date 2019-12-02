<html>
	<head>
	
	</head>
	<body>
		<?php 
		session_start();
		if (isset($_SESSION['email'])) {

		include "../menu/menu.html"; ?>
		<form method="post" action="prosestambah.php">
		<table class="input">
			<tr><td>
			Nama : 
			
			<select name="namasantri">	
			<?php
			include '../menu/menu.html';
			include "../koneksi/koneksi.php";
			$sql = "SELECT id, nama FROM santri";
			$result = mysqli_query($connect, $sql);
			
			if (mysqli_num_rows($result)>0) {
				while ($row = mysqli_fetch_assoc($result)) {
			?>
				<option value="<?= $row['id']; ?>">
					<?= $row['nama']; ?>			
				</option>
			<?php
				}
			}
			?>
			</select>
			
			<br><br>
			</td></tr>
			<tr><td>
			
			Mata Pelajaran : 
			
			<select name="mapelsantri">	
			<?php
			include "../koneksi/koneksi.php";
			$sql = "SELECT id, mapel FROM matapelajaran";
			$result = mysqli_query($connect, $sql);
			
			$nomor = 1;
			if (mysqli_num_rows($result)>0) {
				while ($row = mysqli_fetch_assoc($result)) {
			?>
				<option value="<?= $row['id']; ?>">
					<?= $row['mapel']; ?>			
				</option>
			<?php
				}
			}
			?>
			</select>
			
			<br><br>
			</td></tr>
			<tr><td>
			<label>Nilai  :
			<input type="number" name="nilai_angka" value="nilai" />
			</label>
			</td></tr>
			<tr><td>
			
			<br><br>
			
			<input type="submit" value="Tambah Data" />
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
