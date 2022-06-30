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
	margin-bottom: 0px;
	margin-left: 600px;
}

.content select{
	font-family: 'Kodchasan', sans-serif;
}

.content p{
	margin-bottom: 5px;
}

.book{
	margin-left: 500px;
	margin-top: 50px
}

.btn{
	margin-left: 230px;
	margin-top: -10px;
	padding: 4.7px;
	border-radius: 7px;
	cursor: pointer;
	font-family: 'Kodchasan', sans-serif;
	font-size: 15px;
}

input{
	margin-left: 26px;
}

.content form{
	font-size: 19px;
	margin-left: 40px;
}

.hist{
	margin-left: 100px;
}

.hist a:visited{
	color: blue;
}


</style>
	
</head>
<body> 

<header>
<ul>
<li><img class='logo' src='picture/logo.png' width='50px' height='50px'></li>
<li><h1>Dental Care</h1></li>
<li><a href="main.php">MY PROFILE </a></li>
<li><a class="active" href="booking.php">BOOKING</a></li>
<li><a href="services.php">SERVICES</a></li>
<li><a href="doctors.php">DOCTORS</a></li>
<li><a href="contactm.php">CONTACT US</a></li>
<li><a href="logout.php" onClick="return confirm('Are You Sure?')">LOGOUT</a></li>
</ul>
</header>

<div class="content">
	<h1>Booking</h1>
	<div class="book">
	
	<br>
	
	<form action="booking1.php" method="post">
	
	<?php
		include ('connection.php');
        $sql = "SELECT * FROM User WHERE username = '".$_SESSION['username']."'" ;	  
        $result=mysqli_query($conn,$sql);
        $row=mysqli_fetch_array($result);
        $conn -> close();
    ?>
	
	<label for="id">Your ID :</label><input id="id" type="text" name="id"  value="<?php echo $row['User_ID']; ?>" style="margin-left: 5px; width: 50px; text-align: center; font-family: 'Kodchasan', sans-serif;" readonly>
	
	<br><br>
	
	<label for="name">Name :</label><input id="name" type="text" name="name"  value="<?php echo $row['Name']; ?>" style="margin-left: 22px; font-family: 'Kodchasan', sans-serif;" readonly>
	
	<br><br>
	
	
	<label for="service">Service :</label>
	<select id="service" name="service" class="form-control" required="required">
	<option value="">Select Service </option>
	<?php 
	include ('connection.php');
	$query= "SELECT * FROM service";
	$result=mysqli_query($conn,$query);
	while($row=mysqli_fetch_array($result))
	{
	?>
	<option value="<?php echo $row['service_name'];?>"> <?php echo $row['service_name'];?>
	</option>
	
		<?php 

		} ?>
	</select>
		
	<br><br>
	
	<div class="form-group">
	<label for="doctor">Doctors :</label>
	<select name="doctor" class="form-control" id="doctor" required="required">
	<option value="">Select Doctor</option>
	<?php 
	include ('connection.php');
	$query= "SELECT * FROM doctor ";
	$result=mysqli_query($conn,$query);
	while($row=mysqli_fetch_array($result))
	{
	?>
	<option value="<?php echo $row['doctor_name'];?>">
	<?php echo $row['doctor_name'];?>
	</option>
	<?php } ?>
	</select>
	
	</div>
	<br>
	
	<label for="date">Date : </label><input id="date" type="date" name="date" style="font-family: 'Kodchasan', sans-serif;" min="2018-12-01"  required><br><br>
	
	<label>Time : </label>
  <select name="time" style="margin-left: 28px;">
	<option value="9:00AM">9:00AM</option>
    <option value="10:00AM">10:00AM</option>
	<option value="11:00AM">11:00AM</option>
    <option value="12:00PM">12:00PM</option>
	<option value="3:00PM">3:00PM</option>
    <option value="4:00PM">4:00PM</option>
	<option value="5:00PM">5:00PM</option>
  </select>
	
	<br><br>
	<input class="btn" type="submit" name="Submit" value="Submit"><br><br>


	</form>
	</div>
</div>

</body>
</html>