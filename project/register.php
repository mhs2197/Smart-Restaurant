<?php
	session_start();
	if(isset($_POST["id"]) && isset($_POST["pass"])){
	$id=$_POST['id'];
	$password=$_POST['pass'];
	$query = "select id from user where id = $id;";
	$con = mysqli_connect("localhost", "root", "", "srest");
	$result = mysqli_query($con,$query);
	if(mysqli_num_rows($result)>0)
	{
		echo "Your phone number exists";
	}
	else
	{
		if(strlen($id)!=11)
		{
			echo 'Phone number not correct';
			
		}
		else if(strlen($id)==11)
		{
			if(strlen($password)!=0)
			{
				$query ="INSERT INTO user(id, pass) VALUES ('$id', '$password')";
				$con = mysqli_connect("localhost", "root", "", "srest");
				$result = mysqli_query($con, $query);
				header("Location:login.html");
			}
			else
			{
				echo "Please enter password";
			}
		}
	}
	
	}
?>