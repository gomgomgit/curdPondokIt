<html>
	<head>
		<title>Mata Pelajaran Santri</title>
	</head>
	<body>
	<?php
	session_start();
	if (isset($_SESSION['email'])) {

	include "../menu/menu.html"; ?>
	<a class="tambah" href="tambahmapelsantri.php">Tambah Data</a>
		<table class="data">
			<tr>
				<td>No</td>
				<td>Nama Santri</td>
				<td>Mata Pelajaran</td>
				<td>Nilai Angka</td>
				<td>Nilai Huruf</td>
				<td>Edit</td>
				<td>Delete</td>
			</tr>
<?php
	include "../koneksi/koneksi.php";
	
	function users($id, $connect) {
		#include "../koneksi/koneksi.php";
		$sql	= "SELECT * from santri where id=".$id;
		$result = mysqli_query($connect, $sql);
		$row = mysqli_fetch_assoc($result);
		return $row['nama']; 
	}
	
	function mapels($id, $connect) {
		$sql	= "SELECT * from matapelajaran where id =". $id;
		$result	= mysqli_query($connect, $sql);
		$row	= mysqli_fetch_assoc($result);
		return $row['mapel'];
		}
	
	$nomor	= 1;
	$sql	= "SELECT * FROM matapelajaransantri";
	$result = mysqli_query($connect, $sql);
	if(mysqli_num_rows($result)>0){
		while ($row = mysqli_fetch_assoc($result)) {
		?>
			<tr>
				<td><?= $nomor++ ?></td>
				<td><?= users($row['santri_id'], $connect) ?></td>
				<td><?= mapels($row['matapelajaran_id'], $connect) ?></td>
				<td><?= $row['nilai_angka'] ?></td>
				<td><?= $row['nilai_huruf'] ?></td>
				<td><a href="editmapelsantri.php?id=<?= $row['id'];?>">Edit</a></td>
				<td><a href="deletemapelsantri.php?id=<?= $row['id'];?>">Delete</a></td>
			</tr>
		<?php
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
