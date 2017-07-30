<?php
	session_start();
	if(!isset($_SESSION['id']))
	{
		header("Location:login.html");
	}
	else
	{
		$con = mysqli_connect("localhost", "root", "", "srest");
		if(isset($_GET['category']))
		{
			$category=$_GET['category'];
			if($category=="All")
			{
				$query = "select * from menu";	
			}
			else
			{
				$query = "select name from menu where category = '$category'";
			}
		}
		else
		{
			$query = "select * from menu";
		}
		$result = mysqli_query($con,$query);
		
		$emparray = array();
		while($row =mysqli_fetch_assoc($result))
		{
			$emparray[] = $row;
		}
		echo json_encode($emparray);
		}
?>