<?php
	session_start();
	if(isset($_POST['id']))
	{
		$id=$_POST['id'];
		$query = "DELETE from employee where id = '$id'";
		$con = mysqli_connect("localhost", "root", "", "srest");
		$result = mysqli_query($con, $query);

		echo "Employee deleted";
	}
	
	
?>