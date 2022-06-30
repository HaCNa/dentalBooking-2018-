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
	margin-bottom: 10px;
	margin-left: 600px;
	margin-top: 0px;
}

.content table{
	margin-left: 545px;
	margin-top: 20px;
}

.input{
	margin-bottom: 10px;
	margin-left: 10px;
	height: 25px;
	font-family: 'Kodchasan', sans-serif;
}

.btn{
	margin-left: 750px;
	margin-top: -10px;
	padding: 4.7px;
	border-radius: 7px;
	cursor: pointer;
	font-family: 'Kodchasan', sans-serif;
	font-size: 15px;
}

#subject{
	margin-left: 10px;	
	margin-bottom: 10px;
	font-family: 'Kodchasan', sans-serif;
}
</style>
</head>
<body> 

<header>
<ul>
<li><img class='logo' src='picture/logo.png' width='50px' height='50px'></li>
<li><h1>Dental Care</h1></li>
<li><a href="patient.php">PATIENT</a></li>
<li><a href="bookingad.php">BOOKING</a></li>
<li><a class="active" href="servicesad.php">SERVICES</a></li>
<li><a href="doctorsad.php">DOCTORS</a></li>
<li><a href="logout.php" onClick="return confirm('Are You Sure?')">LOGOUT</a></li>
</ul>
</header>

<div class="content">
		<form action="servadd1.php" method="post">
	<h1> Add Service </h1>
	<table border="0" cellpadding="5" cellspacing="0">
				<tr>
					<td>Name</td>
					<td><input class="input" type="text" name="service_name" autofocus required></td><br>
				</tr>				
				<tr>
					<td><label for="subject">Description</label></td>
					<td><textarea id="subject" name="service_desc" style="height:100px; width:250px;" required></textarea></td>
				</tr>
				<tr>
					<td>Price</td>
					<td><input class="input" type="int" name="service_price" required></td>
				</tr>
				<br>						
	</table>
	<br>
		<input class="btn" type="submit" name="Submit" value="Submit"><br><br>
</form>	
</div>
</body>
</html>