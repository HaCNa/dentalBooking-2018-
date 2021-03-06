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
}

.box{
	position: absolute;
	top: 55%;
	left: 50%;
	transform: translate(-50%,-50%);
	width: 400px;	
	padding: 40px;
	background: rgba(.5,.5,.5,.5);
	box-sizing: border-box;
	box-shadow: 0 15px 25px rgba(0,0,0,.5);
	border-radius: 10px;
}

.box h2{
	margin: 0 0 10px;
	padding: 0;
	color: #fff;
	text-align:center;
	font-family: 'Kodchasan', sans-serif;
}

.box .inputbox{
	position: relative;
	margin-top: 15px;
	font-family: 'Kodchasan', sans-serif;
	color: white;
}

.box .inputbox input{
	font-family: 'Kodchasan', sans-serif;
	width:100%;
	padding: 10px 5px;
	font-size: 16px;
	color: white;
	margin-bottom: 30px;
	border: 1px solid #fff;
	outline: none;
	background: transparent;
}

.box .Lbtn{
	font-family: 'Kodchasan', sans-serif;
	padding:10px;
	padding-top: 5px;
	padding-bottom: 5px;
	float: right;
	border-radius: 3px;
	cursor: pointer;
}

.box .this {
	font-family: 'Kodchasan', sans-serif;
	color: white;
}

.content a:visited{
	color:blue;
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
<li><a class="active" href="login.php">LOGIN</a></li>
</ul>
</header>

<div class="content">
	<div class="box">
		<h2><b>Login</b></h2><hr>
		<form action="login1.php" method="post">
			<div class="inputbox">
				<label>Username</label>
				<input type="text" name="username" autofocus required>
				
			</div>
			<div class="inputbox">
				<label>Password</label>
				<input type="password" name="password" required>
				
			</div>
			 <input class="Lbtn" type="submit" name="login" value="Login"><br><br><br>
             <div class="this">Don't have an account?</label> <a href="register.php"> Sign Up Here </a>
			 </div>
		</form>
	</div>
</div>
</body>
</html>