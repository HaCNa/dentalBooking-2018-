<?php
	session_start();
	include ('connection.php');
	
	$name = $_POST['name'];
	$IC = $_POST['IC'];
	$password = $_POST['password'];
	$password2 = $_POST['password2'];
	$age = $_POST['age'];
	$contact = $_POST['contact'];
	$address = $_POST['address'];

	if ($password != $password2) {
		echo '<script language="javascript">';
		echo 'alert("Password invalid");';
		echo 'window.location.href="main.php"';
		echo '</script>';
	}

	$sql = mysqli_query($conn,"UPDATE user 
	SET name= '$name',IC= '$IC', password='$password' , age='$age', contact='$contact', address='$address'
	WHERE username= '".$_SESSION['username']."'");

	if($sql == TRUE){
		echo '<script language="javascript">';
		echo 'alert("Update Successfuly");';
		echo 'window.location.href="main.php"';
		echo '</script>';
	} else {
		echo "Error : " . $sql . "<br>" . $conn -> error;
	}
	$conn -> close();
?>