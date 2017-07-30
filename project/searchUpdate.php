<?php
	
	
	if(isset($_GET['name'])){
		$name=$_GET['name'];
    
		$query = "SELECT name FROM menu WHERE name LIKE '%{$name}%'";
		$con = mysqli_connect("localhost", "root", "", "srest");
		$result = mysqli_query($con,$query);
		while($rows = mysqli_fetch_array($result))
		{
			echo "<li><a href='#' style='text-decoration:none; color:black'onclick='selectUpdateItem("."&quot;".$rows['name']."&quot;".")'>".$rows['name']." </a><hr/></li>";
		}
	}
	else if($_GET['name']=="")
	{
		
	}
    
?>