


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
background-image: url('picture/background.jpg');
background-repeat: no-repeat;
background-size: cover;
}

.content p{
	font-family: 'Kodchasan', sans-serif;
	margin-left: 650px;
	margin-top: 10px;	
	margin-bottom: 10px;
	font-size: 30px;
	display: inline-block;
	text-transform: uppercase;
	border-bottom: 4px solid #3498db;	
	padding-bottom: 10px;
	
}

table { 
	margin-left: 500px;
	margin-top: 0;
	font-family: 'K2D',sans-serif;
	
}

.input{
	margin-bottom: 15px;
	margin-left: 30px;
	width: 100%;
	height: 25px;
	border-radius: 5px;
	font-family: 'K2D',sans-serif;
}

.Lbtn{
	margin-left: 750px;
	padding: 5.5px;
	border-radius: 10px;
	cursor: pointer;
	font-family: 'K2D',sans-serif;
	
}
</style>
</head>
<body> 

<header>
<ul>
<li><img class='logo' src='picture/logo.png' width='50px' height='50px'></li>
<li><h1>Dental Care</h1></li>
<li><a href="index.php">HOME </a></li>
<li><a href="about.php">ABOUT</a></li>
<li><a href="contact.php">CONTACT US</a></li>
<li><a href="login.php">LOGIN</a></li>
</ul>
</header>

<div class="content">
<form action="register1.php" method="post">
	<p> Register </p>
	<table border="0" cellpadding="5" cellspacing="0">

				<tr>
					<td>Name</td>
					<td><input class="input" type="text" name="name" autofocus required></td><br>
				</tr>
				<tr>
					<td>IC No.</td>
					<td><input class="input" type="text" name="ic" autofocus required></td><br>
				</tr>
				<tr>
					<td>Username</td>
					<td><input class="input" type="text" name="username" required></td>
				</tr>
				<tr>
					<td>Password</td>
					<td><input class="input" type="password" name="password" required></td>
				</tr>
				<tr>
					<td>Retype Password</td>
					<td><input class="input" type="password" name="password2" required></td>
				</tr>
				<tr>
					<td>Age</td>
					<td><input class="input" type="int" name="age" required></td>
				</tr>
				<tr>
					<td>Contact</td>
					<td><input class="input" type="int" name="contact" required></td>
				</tr>
				<tr>
					<td>Address</td>
					<td><input class="input" type="text" name="address" required></td>
				</tr>
				<br>				
				
				
	</table>
	<br>
		<input class="Lbtn" type="submit" name="Register" value="REGISTER"><br><br>
</form>
</div>


</body>
</html>