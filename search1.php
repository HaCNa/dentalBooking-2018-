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

.up table{
	margin-left: 200px;
	margin-top: 10px;
}

.btn{
	margin-left: 1070px;
	background-color: #3498db;
	text-decoration: none;
	padding: 10px;
	border-radius: 10px;
	font-color: white;
}

.btn:visited{
	color: white;
}
</style>
</head>
<body> 

<header>
<ul>
<li><img class='logo' src='picture/logo.png' width='50px' height='50px'></li>
<li><h1>Dental Care</h1></li>
<li><a href="main.php">MY PROFILE </a></li>
<li><a href="booking.php">BOOKING</a></li>
<li><a href="services.php">SERVICES</a></li>
<li><a class="active" href="doctors.php">DOCTORS</a></li>
<li><a href="contactm.php">CONTACT US</a></li>
<li><a href="logout.php" onClick="return confirm('Are You Sure?')">LOGOUT</a></li>
</ul>
</header>

<div class="content">
<a class="btn" href="doctors.php"> Back </a>
<div class="up">
<h1>  Doctor's Info </h1>
	<table align="center" border="0" width="70%" cellpadding="5" cellspacing="0">
	<tr align="center">
		<td width="10%" style="background-color: #3498db;">Doctor_ID</td>
        <td width="20%" style="background-color: #3498db;">Doctor's Name</td>
        <td width="15%"  style="background-color: #3498db;">Contact</td>
        <td width="20%"  style="background-color: #3498db;">Description</td>
    </tr>
	<?php
		if(isset($_GET['search']))
		{
			include('connection.php');
			$sql = "SELECT * FROM doctor WHERE doctor_name like '%$_GET[search]%' OR doctor_desc like '%$_GET[search]%'";
			$result=mysqli_query($conn, $sql);
				while($row = mysqli_fetch_array($result)){
		?>
	<tr class="row">
		<td style="border-bottom: 2px solid #b3b3b3;" align="center"><?php echo $row['doctor_id']; ?></td>
        <td style="border-bottom: 2px solid #b3b3b3;" align="center"><?php echo $row['doctor_name'];?></td>
        <td style="border-bottom: 2px solid #b3b3b3;" align="center"><?php echo $row['doctor_contact'];?></td>
        <td style="border-bottom: 2px solid #b3b3b3;" align="center"><?php echo $row['doctor_desc'];?></td><br>	
    </tr>	
<?php
                    } 
                  } else {
                    echo "0 Results";
                  }
                  $conn -> close();
                ?>	
	
    </table>

</div>
</div>

</body>
</html>