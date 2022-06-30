<?php
  session_start();
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
background-image: url('picture/background.jpg');
background-repeat: no-repeat;
background-size: cover;
font-family: 'Kodchasan', sans-serif;
}

.content h1{
	display: inline-block;
	text-transform: uppercase;
	border-bottom: 4px solid #3498db;
	font-size: 30px;
	padding-bottom: 10px;
	margin-left: 600px;
	margin-top: 60px;
}

.input{
	width: 245px;
	font-family: 'Kodchasan', sans-serif;
	margin-left: 10px;
	margin-bottom: 5px;
}

table{
	margin-left: 500px;
	margin-top: 80px;	
}

.btn{
	font-family: 'Kodchasan', sans-serif;
	display: inline-block;
	font-size: 16px;
	border-radius: 50px;
	margin-top: 7px;
	padding: 5px 10px;
	cursor: pointer;
	margin-left: 170px;
}
</style>
</head>
<body> 
<header>
<ul>
<li><img class='logo' src='picture/logo.png' width='50px' height='50px'></li>
<li><h1>Dental Care</h1></li>
<li><a class="" href="main.php">MY PROFILE </a></li>
<li><a href="booking.php">BOOKING</a></li>
<li><a href="services.php">SERVICES</a></li>
<li><a href="doctors.php">DOCTORS</a></li>
<li><a href="contactm.php">CONTACT US</a></li>
<li><a href="logout.php" onClick="return confirm('Are You Sure?')">LOGOUT</a></li>
</ul>
</header>


<div class="content">
             <h1>User Profiles</h1>
            <?php
              include ('connection.php');
              $sql = "SELECT * FROM User 
			 WHERE username = '".$_SESSION['username']."' ";	  
              $result=mysqli_query($conn,$sql);
              $row=mysqli_fetch_array($result);
              $conn -> close();
            ?>
     
            <form action="profile.php" method="post">
              <table border="0" cellpadding="5" cellspacing="0">
                <tr>
                  <td>Name</td>
                  <td><input class="input" type="text" name="name" value="<?php echo $row['Name']; ?>" autofocus required></td>
                </tr>
				<tr>
                  <td>IC</td>
                  <td><input class="input" type="int" name="IC" value="<?php echo $row['IC']; ?>" autofocus required></td>
                </tr>
                <tr>
                  <td>Username</td>
                  <td><input class="input" type="text" name="username" readonly value="<?php echo $row['Username']; ?>" ></td>
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
                  <td><input class="input" type="int" name="age" readonly value="<?php echo $row['Age']; ?>" ></td>
                </tr>
				<tr>
                  <td>Contact</td>
                  <td><input class="input" type="text" name="contact"  value="<?php echo $row['Contact']; ?>" required></td>
                </tr>
				<tr>
                  <td>Address</td>
                  <td><input class="input" type="text" name="address" value="<?php echo $row['Address']; ?>" required></td>
                </tr>
                <tr>
                  <td></td>
                  <td><input class="btn" type="submit" name="submit" value="Submit"></td>
                </tr>
              </table>
            </form>
</div>



</body>
</html>