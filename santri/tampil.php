<html>
	<head>
		<title>INDEKS AWOKAWOK</title>
	</head>
	<body>
	<a href="tambah.php">Tambah Data</a>
		<table border="1" cellpadding="5px">
			<tr>
				<td>Nomor</td>
				<td>Nama</td>
				<td>Password</td>
				<td>Email</td>
				<td>TTL</td>
				<td>Operasi</td>				
			</tr>

<?php 
	include "koneksi.php";

	$lala="SELECT * FROM user";
	$lulu=mysqli_query($konek, $lala);
	$no=1;
	while($data=mysqli_fetch_assoc($lulu)){
?>

			<tr>
				<td><?= $no++;?></td>
				<td><?= $data['nama'];?></td>
				<td><?= $data['password'];?></td>
				<td><?= $data['email'];?></td>
				<td><?= $data['ttl'];?></td>
				<td>
				<a href="delete.php?id=<?=$data['id'];?>">Hapoes</a>
				<a href="edit.php?id=<?=$data['id'];?>">Edyiet</a>
				</td>				
			</tr>
<?php 
	}
?>
		</table>
	</body>
</html>
