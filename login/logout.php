<?php
	session_start();
	unset($_SESSION["email"]);

	echo "Anda telah logout";
	header('Refresh: 2; URL = login.php')

?>