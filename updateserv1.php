<?php
	include('connection.php');

	$service_name=$_POST['service_name'];
	$description=$_POST['service_desc'];
	$price=$_POST['service_price'];
	$sql = mysqli_query($conn,"UPDATE service SET service_name= '$service_name', service_desc='$description' , service_price= '$price' WHERE service_id='".$_GET['service_id']."'");

	if($sql == TRUE){
		echo '<script language="javascript">';
		echo 'alert("Update Successfuly");';
		echo 'window.location.href="servicesad.php"';
		echo '</script>';
	} else {
		echo "Error : " . $sql . "<br>" . $conn -> error;
	}
	$conn -> close();
?>