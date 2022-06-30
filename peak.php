<?php
  session_start();
  include('connection.php');
  $query = "SELECT booking_time, count(booking_time) FROM booking group by booking_time";
  $result = mysqli_query($conn,$query);
?>
<html>
<head>
<title>Dental Care</title>
<link rel="stylesheet" type="text/css" href="style.php"/>
<link rel='icon' href='picture/logo.png' type='image/gif' size='200x200'>
<link href="https://fonts.googleapis.com/css?family=Kodchasan" rel="stylesheet">
<script>
window.onload = function () {

var chart = new CanvasJS.Chart("chartContainer", {
	animationEnabled: true,
	animationDuration: 2000,
	backgroundColor: "transparent",
	title:{
		text: "Peak Hours",
		fontWeight: "bold",
		fontFamily: "Kodchasan",
	},
	axisY: {
		title: "Frequency",
	},
	axisX: {
		title: "Time",
	},
			data: [
			{
				type: "line",
				dataPoints:[
				<?php
				if($query == TRUE){
				while($row=mysqli_fetch_array($result)){?>
				{ y:<?php echo $row['count(booking_time)'] ?>,label: "<?php echo $row['booking_time'] ?>"},
				
				
				<?php 
				}
					} 
					else 
					{ echo "0 Results";}
					$conn -> close();
				?>	]
			
			}
			]
			
		});
		chart.render();
	};
	</script>
	<script src="canvasjs.min.js"></script>
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

#chartContainer{
	margin-left: 330px;
	margin-top: 50px;
}

.content ul{
	margin-left: 400px;
	margin-top: 20px;
	
}

.content ul li{
	text-transform: uppercase;
	display: inline-block;
	font-weight: bold;	
}

.content ul li a {
	display: block;
	color: black;
	text-align: center;
	padding: 10px 19px;
	text-decoration: none;
}

.content a:hover{
	color: white;
	background: #3498db;
	border-radius: 10px;
}

.content li a.active{
	background-color: #3498db;
	color: white;
	border-radius: 10px;
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
<li><a class="active" href="report.php">REPORT</a></li>
<li><a href="servicesad.php">SERVICES</a></li>
<li><a href="doctorsad.php">DOCTORS</a></li>
<li><a href="logout.php" onClick="return confirm('Are You Sure?')">LOGOUT</a></li>
</ul>
</header>

<div class="content">
	<h1> REPORT </h1>
	<ul>
	<li><a href="report.php">Popular Service</a></li>
	<li><a class="active" href="peak.php">Peak Hours</a></li>
		<li><a href="month.php">Sales per Month</a></li>
	</ul>
	
	<div id="chartContainer" style=" width: 50%;"></div>
<script src="https://canvasjs.com/assets/script/canvasjs.min.js"></script>
</div>

</body>
</html>