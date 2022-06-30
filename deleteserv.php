<?php
	include('connection.php');
	
	$sql = mysqli_query($conn,"DELETE FROM service WHERE 
	service_id = '".$_GET['service_id']."'");
	

	if($sql == TRUE){
		echo '<script language="javascript">';
		echo 'alert("Delete Successfuly");';
		echo 'window.location.href="servicesad.php"';
		echo '</script>';
	} else {
		echo "Error : " . $sql . "<br>" . $conn -> error;
	}
	$conn -> close();
?>
