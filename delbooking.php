<?php
	include('connection.php');

	$sql = mysqli_query($conn,"DELETE FROM booking WHERE 
	booking_id = '".$_GET['booking_id']."'");
	

	if($sql == TRUE){
		echo '<script language="javascript">';
		echo 'alert("Delete Successfuly");';
		echo 'window.location.href="bookingad.php"';
		echo '</script>';
	} else {
		echo "Error : " . $sql . "<br>" . $conn -> error;
	}
	$conn -> close();
?>