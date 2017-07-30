<?php
	session_start();
	
	if($_POST["iteam-name"]=="")
	{
		echo "Please enter food name";
	}
	else if($_POST["iteam-price"]=="")
	{
		echo "Please enter food price";
	}
	else if($_POST["category"]=="")
	{
		echo "Please select a category";
	}
	else if(isset($_POST["iteam-name"]) && isset($_POST["category"]) && isset($_POST["iteam-price"])){
	$name=$_POST['iteam-name'];
    $price=$_POST['iteam-price']; 
	$category=$_POST['category'];
    
	$query ="INSERT INTO menu(name, category, price) VALUES ('$name', '$category','$price')";
	$con = mysqli_connect("localhost", "root", "", "srest");
	$result = mysqli_query($con, $query);
    
	 echo "Item added";
	}
	
?>