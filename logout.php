<?php
	session_start();
	if(isset($_SESSION['username'])) {
		$_SESSION = array();
		session_destroy();
		echo '<script language="javascript">';
		echo 'alert("Logout Successfully");';
		echo 'window.location.href="index.php";';
		echo '</script>';
	}
?>