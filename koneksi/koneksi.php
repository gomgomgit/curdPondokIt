<?php
$servername = "localhost";
$username   = "root";
$password   = "1234";
$dbname     = "pondokit";
// Create connection
$connect = mysqli_connect($servername, $username, $password, $dbname);

// Check connection
if (!$connect) {
    die("Connection failed: " . mysqli_connect_error());
}
$sql = "CREATE TABLE santri (
id INT(11) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
nama VARCHAR(30) NOT NULL,
password VARCHAR(225) NOT NULL,
email VARCHAR(30) NOT NULL,
tanggallahir DATE
)
";
mysqli_query($connect, $sql);

$sql = "CREATE TABLE matapelajaran (
id INT(11) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
mapel VARCHAR(30) NOT NULL
)
";
mysqli_query($connect, $sql);

$sql = "CREATE TABLE matapelajaransantri (
id INT(11) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
santri_id INT(11),
matapelajaran_id INT(11),
nilai_angka INT(11) NOT NULL,
nilai_huruf VARCHAR(3)
)
";

mysqli_query($connect, $sql);


// if (mysqli_connect_error()) {
//     die("Database connection failed: " . mysqli_connect_error());
// }
//echo "Berhasil Terhubung";
?>
