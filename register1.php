	<?php
		include('connection.php');

			$name = $_POST['name'];
			$ic = $_POST['ic'];
			$username = $_POST['username'];
			$password = $_POST['password'];
			$retype = $_POST['password2'];
			$age = $_POST['age'];
			$contact = $_POST['contact'];
			$address = $_POST['address'];
				
				if($retype != $password)
				{
					echo '<script language="javascript">';
					echo 'alert("password not same");';
					echo 'window.location.href="register.php";';
					echo '</script>';
				}
				
				else if ($retype == $password)
				{
					$sql = mysqli_query($conn,"INSERT INTO user (username, name, ic, password, age, contact, address) VALUES ('$username', '$name', '$ic', '$password', '$age', '$contact', '$address') ");
					//query to insert data into database: INSERT INTO table name (attribute name) VALUES ('$username', '$name', '$password')
					if($sql == TRUE)
					{
						echo '<script language="javascript">';
						echo 'alert("Your registration are Successfuly");';
						echo 'window.location.href="index.php";';
						echo '</script>';
					}
			
					else 
					{
					echo "Error : " . $sql . "<br>" . $conn -> error;
					}
				}
			$conn -> close();
	?>
