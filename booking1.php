	<?php
		include('connection.php');

			
			$rawdate = htmlentities($_POST['date']);
			$date = date('Y-m-d', strtotime($rawdate));
			$rawtime = htmlentities($_POST['time']);
			$time = date('H:i', strtotime($rawtime));
			$servicename = $_REQUEST['service'];
			$doctorname = $_REQUEST['doctor'];
			$userid = $_REQUEST['id'];
			$name = $_REQUEST['name'];
			
			$check = "SELECT * FROM booking WHERE doctor_name='$doctorname' AND booking_date='$date' AND booking_time='$rawtime' ";
			
			$cresult = mysqli_query($conn,$check);
			$row = mysqli_fetch_array($cresult);
			
				if($row['doctor_name'] == $doctorname)
				{
					if($row['booking_date'] == $date && $row['booking_time'])
					{
						echo '<script language="javascript">';
						echo 'alert("Cannot Booked. Already booked by others. Please choose another time slot");';
						echo 'window.location.href="booking.php";';
						echo '</script>';
					}
				}			
		
					
			else
			{
				
				$sql = mysqli_query($conn,"INSERT INTO booking (booking_date, booking_time, service_name, service_price, doctor_name,User_ID, Name) VALUES ('$date' , '$time', '$servicename', (SELECT service_price FROM service WHERE service_name='$servicename'), '$doctorname', '$userid', '$name') ");
			
				if($sql == TRUE)
				{
					echo '<script language="javascript">';
					echo 'alert("Your booking are Successfuly");';
					echo 'window.location.href="print.php";';
					echo '</script>';
				}
				
				else 
				{
					echo "Error : " . $sql . "<br>" . $conn -> error;
				}
						
				$conn -> close();
			}
	?>

	<?php
              include ('connection.php');

	if (isset($_POST['service'], $_POST['doctor'], $_POST['id'])) {
	session_start();
	$service = $_POST['service'];
	$doctor = $_POST['doctor']; 
	$userid = $_POST['id'];
	$name = $_POST['name'];
	$rawdate = htmlentities($_POST['date']);
	$date = date('Y-m-d', strtotime($rawdate));
	$rawtime = htmlentities($_POST['time']);

	// store session data
	$_SESSION['service'] = $service;
	$_SESSION['doctor'] = $doctor;
	$_SESSION['id'] = $userid;
	$_SESSION['name'] = $name;
	$_SESSION['date'] = $date;
	$_SESSION['time'] = $rawtime;
}
?>
	