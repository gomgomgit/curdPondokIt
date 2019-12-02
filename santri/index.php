<html>
	<head>
		<title>Data Santri</title>
	</head>
	<body>
	<?php 
	session_start();

	if (isset($_SESSION['email'])) {

	include "../menu/menu.html"; ?>
	<a class="tambah" href="tambah.php">Tambah Data</a>
		<table class="data">
			<tr>
				<td>No</td>
				<td>Nama</td>
				<td>Password</td>
				<td>Email</td>
				<td>Tanggal Lahir</td>
				<td>Edit Data</td>
				<td>Hapus Data</td>				
			</tr>

<?php 
	include "../koneksi/koneksi.php";

	$nomor	= 1;
	$sql	= "SELECT * FROM santri";
	$result	= mysqli_query($connect, $sql);
	if(mysqli_num_rows($result)>0){
		while ($row = mysqli_fetch_assoc($result)) {
			echo "
				<tr>
					<td>".$nomor++."</td>
					<td>".$row['nama']."</td>
					<td>".$row['password']."</td>
					<td>".$row['email']."</td>
					<td>".$row['tanggallahir']."</td>
					<td>
					<a href='edit.php?id=".$row['id']."'>Edit</a>
					</td>
					<td>
					<a href='delete.php?id=".$row['id']."' onclick='javascript:return confirm(\"Apakah anda yakin ingin menghapus data ini?\")'>Hapus</a>
					</td>
					</tr>
					";
				}
			}
	

			?>
		</table>
		<?php
		} else {
		header('location:../login/login.php');
		} 
		?>
	</body>
</html>
