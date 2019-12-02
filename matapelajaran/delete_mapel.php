<?phpsession_start();

if (isset($_SESSION['email'])) {

include '../koneksi/koneksi.php';
$ID = $_GET['id'];

$sql = "DELETE FROM matapelajaran WHERE id = '$ID'";

mysqli_query($connect, $sql);
header('location:index.php');
} else {
	header('location:../login/login.php');
} 

?>
