<?php
session_start();
?>
<html>
<head>
<title>Dental Care</title>
<link rel="stylesheet" type="text/css" href="style.php"/>
<link rel='icon' href='picture/logo.png' type='image/gif' size='200x200'>
<link href="https://fonts.googleapis.com/css?family=Kodchasan" rel="stylesheet">
<style>
.content {
padding-top: 80px;
width: 100%;
height: 100%;
background-image: url('picture/background.jpg');
background-size: 1380px 770px;
background-position:center;
font-family: 'Kodchasan', sans-serif;
}
.content h1{
	display: inline-block;
	text-transform: uppercase;
	border-bottom: 4px solid #3498db;
	font-size: 30px;
	padding-bottom: 10px;
	margin-left: 320px;
}

.content p{
	margin-bottom: 5px;
}

.content table{
	margin-left: 470px;
	font-size: 20px;
	margin-top: -30px;
}

.input{
	width: 250px;
	font-family: 'Kodchasan', sans-serif;
	margin-left: 10px;
	margin-bottom: 10px;
	font-size: 20px;
	text-align: center;
}

a{
	margin-left: 200px;
	color: blue;
}

.box{
	margin-left: 550px;
	margin-top: 20px;
	padding: 20px;
	font-size: 20px;
	
	
}




</style>
</head>
<body> 



<div class="content">
<a href="booking.php"> Back</a>
	<h1>Booking Summary</h1>

	
	<br>
	<div class="box">
		
		<?php
		
			if (!isset($_SESSION)) {
				session_start();
				}
			if (isset($_SESSION['service']) &&($_SESSION['doctor']) &&($_SESSION['id'])){
			$service = $_SESSION['service'];
			$doctor = $_SESSION['doctor'];
			$userid = $_SESSION['id'];
			$name = $_SESSION['name'];
			$date = $_SESSION['date'];
			$rawtime = $_SESSION['time'];
			
			echo nl2br("Your ID :\n");
			echo $userid; 
			echo "\n\r";
			echo nl2br("\n\nName :\n");
			echo $name; 
			echo nl2br("\n\nService :\n");
			echo $service; 
			echo nl2br("\n\nDoctor :\n");
			echo $doctor;
			echo nl2br("\n\nDate :\n");			
			echo $date; 
			echo nl2br("\n\nTime :\n");
			echo $rawtime; 
			
		}
		?>
		
		<a  onClick="window.print();" target="_blank" style="cursor: pointer;"> PRINT</a>
			  
	</div>
	</div>
	</body>
	</html>