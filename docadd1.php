	<?php
		include('connection.php');

			$name = $_POST['doctor_name'];			
			$contact = $_POST['doctor_contact'];
			$description = $_POST['doctor_desc'];
				
		$sql = mysqli_query($conn,"INSERT INTO doctor (doctor_name, doctor_contact, doctor_desc) VALUES ('$name', '$contact', '$description') ");
		if($sql == TRUE)
		{
			echo '<script language="javascript">';
			echo 'alert("Doctor has been added");';
			echo 'window.location.href="doctorsad.php";';
			echo '</script>';
		}
		
			$conn -> close();
	?>
