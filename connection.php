<?php
	$conn = mysqli_connect ('localhost','root','','dental');
	
	
	if ($conn == TRUE)
	{
		//echo 'success';
	}
	else
	{
		echo 'fail';
	}
?>