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

table{
	margin-left: 200px;
	margin-top: 20px;
}

.row:hover{
	background-color: white;
}
</style>
</head>
<body> 

<header>
<ul>
<li><img class='logo' src='picture/logo.png' width='50px' height='50px'></li>
<li><h1>Dental Care</h1></li>
<li><a class="active" href="patient.php">PATIENT</a></li>
<li><a href="bookingad.php">BOOKING</a></li>
<li><a href="report.php">REPORT</a></li>
<li><a href="servicesad.php">SERVICES</a></li>
<li><a href="doctorsad.php">DOCTORS</a></li>
<li><a href="logout.php" onClick="return confirm('Are You Sure?')">LOGOUT</a></li>
</ul>
</header>

<div class="content">
	<h1>  Patient's Info </h1>
	<table align="center" border="0" width="70%" cellpadding="5" cellspacing="0">
	<tr align="center">
		<td width="10%" style="background-color: #3498db;">No.</td>
		<td width="5%" style="background-color: #3498db;">User ID</td>
        <td width="20%" style="background-color: #3498db;">Patient Name</td>
		<td width="15%" style="background-color: #3498db;">IC</td>
        <td width="5%" style="background-color: #3498db;">Age</td>
        <td width="15%"  style="background-color: #3498db;">Contact</td>
        <td width="25%"  style="background-color: #3498db;">Address</td>
    </tr>
		<?php
			include ('connection.php');
			$sql = "SELECT * FROM user";	  
			$result=mysqli_query($conn,$sql);
			$row=mysqli_fetch_array($result);
			if($result == TRUE){
						$no = 0; 
						while($row = mysqli_fetch_array($result)) {					
		?>
	<tr class="row">
		<td style="border-bottom: 2px solid #b3b3b3;" align="center"><?php echo ++$no; ?></td>
		<td style="border-bottom: 2px solid #b3b3b3;" align="center"><?php echo $row['User_ID']; ?></td>
        <td style="border-bottom: 2px solid #b3b3b3;" align="center"><?php echo $row['Name'];?></td>
		<td style="border-bottom: 2px solid #b3b3b3;" align="center"><?php echo $row['IC'];?></td>
        <td style="border-bottom: 2px solid #b3b3b3;" align="center"><?php echo $row['Age'];?></td>
        <td style="border-bottom: 2px solid #b3b3b3;" align="center"><?php echo $row['Contact'];?></td>
        <td style="border-bottom: 2px solid #b3b3b3;" align="center"><?php echo $row['Address'];?></td>
    </tr>	
<?php
                    } 
                  }
				  else {
                    echo "0 Results";
                  }
                  $conn -> close();
                ?>	
    </table>
</div>

</body>
</html>