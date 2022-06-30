<?php
		session_start();

		include ('connection.php');

		$sql = "SELECT * FROM USER,ADMIN WHERE Username = '".$_POST['username']."' AND password='".$_POST['password']."'";
		
		$result = mysqli_query($conn,$sql); 
		$row = mysqli_fetch_array($result); 
		
		if($_POST['username']=='admin')
		{	
			if($_POST['password']=='password')
			{
				$_SESSION['username'] = $_POST['username'];
				$_SESSION['password'] = $_POST['password'];
				session_write_close();
				echo '<script language="javascript">';
				echo 'alert("Login Sucesss");';
				echo 'window.location.href="patient.php";'; 
				echo '</script>';
			}
			else
				{
				echo '<script language="javascript">';
				echo 'alert("Login Error");';
				echo 'window.location.href="login.php";';
				echo '</script>';
			}
		}
		
		else
		{
			if (mysqli_num_rows($result) >0) 
			{	
				$_SESSION['username'] = $_POST['username'];
				$_SESSION['password'] = $_POST['password'];
				session_write_close();
				echo '<script language="javascript">';
				echo 'alert("Login Sucesss");';
				echo 'window.location.href="main.php";'; 
				echo '</script>';
			}	
			else 
			{
				echo '<script language="javascript">';
				echo 'alert("Login Error");';
				echo 'window.location.href="login.php";';
				echo '</script>';
			}
		}
		$conn -> close();
?>