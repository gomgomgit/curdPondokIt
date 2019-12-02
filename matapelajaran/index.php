<html>
	<head>
		<title>Data Mata Pelajaran</title>
	</head>
	<body>
	<?php 
	session_start();

	if (isset($_SESSION['email'])) {

	include "../menu/menu.html"; ?>
	<a class="tambah" href="tambah_mapel.php">Tambah Mata Pelajaran</a>
		<table class="data">
			<tr>
				<td>No</td>
				<td>Mata Pelajaran</td>
				<td>Edit</td>
				<td>Hapus</td>
			</tr>
<?php
	include "../koneksi/koneksi.php";
	
	$nomor	= 1;
	$sql	= "SELECT * FROM matapelajaran";
	$result	= mysqli_query($connect, $sql);
	if(mysqli_num_rows($result)>0) {
		while ($row = mysqli_fetch_assoc($result)) {	
			echo "
				<tr>
					<td>".$nomor++."</td>
					<td>".$row['mapel']."</td><td>
					<a href='edit_mapel.php?id=".$row['id']."'>Edit</a>
					</td>
					<td>
					<a href='delete_mapel.php?id=".$row['id']."' onclick='javascript:return confirm(\"Apakah anda yakin ingin menghapus data ini?\")'>Hapus</a>
					</td>
				</tr>
				";		
		
		}
	}
} else {
	header('location:../login/login.php');
} 
?>			
		</table>	
	</body>
</html>
