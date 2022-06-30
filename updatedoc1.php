<?php
	include('connection.php');

	$doctor_name=$_POST['doctor_name'];
	$doctor_contact=$_POST['doctor_contact'];
	$doctor_description=$_POST['doctor_desc'];
	
	$sql = mysqli_query($conn,"UPDATE doctor SET doctor_name= '$doctor_name', doctor_contact= '$doctor_contact', doctor_desc='$doctor_description' WHERE doctor_id = '".$_GET['doctor_id']."'");

	if($sql == TRUE){
		echo '<script language="javascript">';
		echo 'alert("Update Successfuly");';
		echo 'window.location.href="doctorsad.php"';
		echo '</script>';
	} else {
		echo "Error : " . $sql . "<br>" . $conn -> error;
	}
	$conn -> close();
?>