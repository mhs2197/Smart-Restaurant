<?php
	session_start();
	if(isset($_POST['name']))
	{
		$name=$_POST['name'];
		$query = "DELETE from menu where name = '$name'";
		$con = mysqli_connect("localhost", "root", "", "srest");
		$result = mysqli_query($con, $query);

		echo "Item deleted";
	}
	
	
?>