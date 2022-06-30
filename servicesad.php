<?php
  session_start();
?>
<html>
<head>
<title>Dental Care</title>
<link rel="stylesheet" type="text/css" href="style.php"/>
<link rel='icon' href='picture/logo.png' type='image/gif' size='200x200'>
<link href="https://fonts.googleapis.com/css?family=Kodchasan" rel="stylesheet">
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">
<style>
.content {
padding-top: 80px;
background-image: url('picture/background.jpg');
background-size: cover;
background-position: center;
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

.up table{
	margin-left: 200px;
	margin-top: -50px;
}

.add{
	margin-left: 600px;
}

.add a:visited{
	color: blue;
}

.row:hover{
	background-color: white;
}

.del{
	margin-left: -100px;
}

.row a:visited{
	color: blue;
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
<li><a href="report.php">REPORT</a></li>
<li><a class="active" href="servicesad.php">SERVICES</a></li>
<li><a href="doctorsad.php">DOCTORS</a></li>
<li><a href="logout.php" onClick="return confirm('Are You Sure?')">LOGOUT</a></li>
</ul>
</header>

<div class="content">
<div class="up">
<h1>  Service's Info </h1>
	<table align="center" border="0" width="70%" cellpadding="5" cellspacing="0">
	<tr align="center">
		<td width="5%" style="background-color: #3498db;">No.</td>
		<td width="5%" style="background-color: #3498db;">Service_ID</td>
        <td width="20%" style="background-color: #3498db;">Name</td>        
        <td width="40%"  style="background-color: #3498db;">Description</td>
		<td width="15%"  style="background-color: #3498db;">Price</td>
		<td width="7%" style="background-color: #3498db;">Edit</td>
    </tr>
		<?php
			include ('connection.php');
			$sql = "SELECT * FROM service";	  
			$result=mysqli_query($conn,$sql);
			if($result == TRUE){
						$no = 0; 
						while($row = mysqli_fetch_array($result)) {					
		?>
	<tr class="row">
		<td style="border-bottom: 2px solid #b3b3b3;" align="center"><?php echo ++$no; ?></td>
		<td style="border-bottom: 2px solid #b3b3b3;" align="center"><?php echo $row['service_id']; ?></td>
        <td style="border-bottom: 2px solid #b3b3b3;" align="center"><?php echo $row['service_name'];?></td>       
        <td style="border-bottom: 2px solid #b3b3b3;" align="center"><?php echo $row['service_desc'];?></td>
		<td style="border-bottom: 2px solid #b3b3b3;" align="center"><?php echo $row['service_price'];?></td>
		<td style="border-bottom: 1px solid #b3b3b3;" ><a href="updateserv.php?service_id=<?php echo $row['service_id']; ?>"><i class="far fa-edit"></i></a></td>
        <td class="del" style="border-bottom: 1px solid #b3b3b3;" ><a href="deleteserv.php?service_id=<?php echo $row['service_id']; ?>"
        onClick="return confirm('Are You Sure?')"><i class="far fa-trash-alt"></i></a></td><br>	
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
	<div class="add">
		<a href="servadd.php"> Add a new Service?</a>
	</div>
	<br><br>
	
</div>

</body>
</html>