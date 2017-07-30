<?php
	
	
	if(isset($_GET['id'])){
		$id=$_GET['id'];
    
		$query = "SELECT id FROM employee WHERE id LIKE '%{$id}%'";
		$con = mysqli_connect("localhost", "root", "", "srest");
		$result = mysqli_query($con,$query);
		while($rows = mysqli_fetch_array($result))
		{
			echo "<a href='#' style='text-decoration:none; color:black'onclick='selectEmployee("."&quot;".$rows['id']."&quot;".")'><li style='text-align:center'>".$rows['id']." </li></a><hr/>";
		}
	}
	else if($_GET['if']=="")
	{
		
	}
    
?>