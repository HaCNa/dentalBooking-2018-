<?php
	include('connection.php');

	$sql = mysqli_query($conn,"DELETE FROM doctor WHERE 
	doctor_id = '".$_GET['doctor_id']."'");
	

	if($sql == TRUE){
		echo '<script language="javascript">';
		echo 'alert("Delete Successfuly");';
		echo 'window.location.href="doctorsad.php"';
		echo '</script>';
	} else {
		echo "Error : " . $sql . "<br>" . $conn -> error;
	}
	$conn -> close();
?>
