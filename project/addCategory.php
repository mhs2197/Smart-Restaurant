<?php
	session_start();
	
	if($_POST["categoryNew"]=="")
	{
		echo "Please enter category name";
	}
    else if(isset($_POST["categoryNew"]))
    {
        $newCategory = $_POST['categoryNew'];
        $query = "INSERT INTO category(categoryName) VALUES ('$newCategory')";
        $con = mysqli_connect("localhost", "root", "", "srest");
	    $result = mysqli_query($con, $query);
		echo "Category added";
    }
	
?>