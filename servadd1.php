	<?php
		include('connection.php');

			$name = $_POST['service_name'];
			$description = $_POST['service_desc'];		
			$price = $_POST['service_price'];
			
				
		$sql = mysqli_query($conn,"INSERT INTO service (service_name, service_desc, service_price) VALUES ('$name', '$description', '$price') ");
		if($sql == TRUE)
		{
			echo '<script language="javascript">';
			echo 'alert("Service has been added");';
			echo 'window.location.href="servicesad.php";';
			echo '</script>';
		}
		
			$conn -> close();
	?>
