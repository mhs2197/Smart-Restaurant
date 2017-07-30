<?php
	session_start();
	if(($_POST['id']=="") && ($_POST['update-employee-name']=="") && ($_POST['update-employee-address']=="") && ($_POST['update-employee-post']==""))
	{
		echo "Empty fields";
	}
	else if(($_POST['id']==""))
	{
		echo "Please search and select employee id";
	}
	else if($_POST["update-employee-name"]=="")
	{
		echo "Please enter employee name";
	}
	else if($_POST["update-employee-address"]=="")
	{
		echo "Please enter employee address";
	}
	else if($_POST["update-employee-post"]=="")
	{
		echo "Please select a employee post";
	}
	else if(($_POST['id']!="") || ($_POST['update-employee-name']!="") || ($_POST['update-employee-address']!="") || ($_POST['update-employee-post']!=""))
	{
		$id=$_POST['id'];
		$updateName = $_POST['update-employee-name'];
		$updateAddress =$_POST['update-employee-address'];
		$updatePost =$_POST['update-employee-post'];
		$query = "UPDATE employee SET name='$updateName', address='$updateAddress', post='$updatePost' where id = '$id'";
		$con = mysqli_connect("localhost", "root", "", "srest");
		$result = mysqli_query($con, $query);

		echo "Employee information updated";
	}
	
	
?>