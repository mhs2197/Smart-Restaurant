<?php
	session_start();
	if(($_POST['name']=="") && ($_POST['update-item-name']=="") && ($_POST['update-item-price']=="") && ($_POST['update-category']==""))
	{
		echo "Empty fields";
	}
	else if(($_POST['name']==""))
	{
		echo "Please search and select food item";
	}
	else if($_POST["update-item-name"]=="")
	{
		echo "Please enter food name";
	}
	else if($_POST["update-item-price"]=="")
	{
		echo "Please enter food price";
	}
	else if($_POST["update-category"]=="")
	{
		echo "Please select a category";
	}
	else if(($_POST['name']!="") || ($_POST['update-item-name']!="") || ($_POST['update-item-price']!="") || ($_POST['update-category']!=""))
	{
		$name=$_POST['name'];
		$updateName = $_POST['update-item-name'];
		$updatePrice =$_POST['update-item-price'];
		$updateCategory = $_POST['update-category'];
		$query = "UPDATE menu SET name='$updateName', price='$updatePrice', category='$updateCategory' where name = '$name'";
		$con = mysqli_connect("localhost", "root", "", "srest");
		$result = mysqli_query($con, $query);

		echo "Item updated";
	}
	
	
?>