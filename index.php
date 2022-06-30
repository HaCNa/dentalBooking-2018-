<?php
	session_start();

	$_SESSION
?>

<html>
<head>
<title>Dental Care</title>
<link rel="stylesheet" type="text/css" href="style.php"/>
<link rel='icon' href='picture/logo.png' type='image/gif' size='200x200'>
<link href="https://fonts.googleapis.com/css?family=Kodchasan" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=K2D" rel="stylesheet">
<style>

.content {
padding-top: 70px;
width: 100%;
height: 100%;
background-image: url('picture/bg.jpg');
background-repeat: no-repeat;
background-size: cover;
}

.content .this{
	font-family: 'K2D', sans-serif;
	font-size: 50px;
	text-shadow: 5px 5px white;
	color: #279DD2;
	padding-left: 100px;
}

.content h1{
	padding-top: 30px;
	padding-left: 30px;
	font-family: 'K2D', sans-serif;
	font-size: 50px;
	text-shadow: 5px 5px white;
	color: #279DD2;
	letter-spacing: 3px;
	line-height: 1.5;
}

.content h2{
	padding-left: 50px;
	font-family: 'K2D', sans-serif;
	font-size: 50px;
	text-shadow: 5px 5px white;
	color: #279DD2;
	letter-spacing: 3px;
	line-height: 1.5;
}

.content h3{
	padding-left: 90px;
	font-family: 'K2D', sans-serif;
	font-size: 50px;
	text-shadow: 5px 5px white;
	color: #279DD2;
	letter-spacing: 3px;
	line-height: 1.5;
}

.content h4{
	padding-left: 130px;
	font-family: 'K2D', sans-serif;
	font-size: 50px;
	text-shadow: 5px 5px white;
	color: #279DD2;
	line-height: 1.5;
	letter-spacing: 3px;
}

.next{
	height: 100px;
	position: fixed;
	left: 0;
	right: 0;
	bottom: 30px;
	background-color: #ffffff;
	background: rgba(.5,.5,.5,.5) ;
}

.next p{
	font-family: 'K2D',sans-serif;
	font-size: 70px;
	color:  white;
	text-shadow: 4px 4px  #279DD2;
	padding-left: 200px;
}


</style>
</head>
<body> 
<header>
<ul>
<li><img class='logo' src='picture/logo.png' width='50px' height='50px'></li>
<li><h1>Dental Care</h1></li>
<li><a class="" href="index.php">HOME </a></li>
<li><a href="about.php">ABOUT</a></li>
<li><a href="contact.php">CONTACT US</a></li>
<li><a href="login.php">LOGIN</a></li>
</ul>
</header>


<div class="content">
	<div class="this"> <h1><b>You are only <br> 
	<h2>a click away <br></h2>
	<h3>from having <br></h3>
	<h4>the most amazing smile<br></h4></h1>
	</div>
	
		<div class="next">
			<p>Book Your Appointment Now! </p>
		</div>
</div>



</body>
</html>