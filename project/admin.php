<?php
	session_start();
	if(isset($_POST["name"]) && isset($_POST["category"])){
	$name=$_POST['name'];
	$category=$_POST['category'];

	$query ="INSERT INTO menu(name, category) VALUES ('$name', '$category')";
	$con = mysqli_connect("localhost", "root", "", "srest");
	$result = mysqli_query($con, $query);
		
	header("Location:admin.html");
	}
?>