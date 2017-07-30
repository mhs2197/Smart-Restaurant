<?php
	session_start();
	if(isset($_POST["id"]) && isset($_POST["pass"]))
	{
		$id = $_POST["id"];
		$pass = $_POST["pass"];
        
		$query = "select pass from user where id = '$id'";
		$con = mysqli_connect("localhost", "root", "", "srest");
        $query2 = "select id from user where id = $id;";
        $result2 = mysqli_query($con,$query2);
		

		if($id=="")
        {
            echo "Please enter ID(Phone Number)";   
        }
        else
        {
           if(mysqli_num_rows($result2)>0)
            {
                if($pass=="")
                {
                    echo "Please enter Password";
                }
                else 
                {
                    $result = mysqli_query($con, $query);
		            $row = mysqli_fetch_array($result);
                    if($row[0]==$pass)
                    {
                        $_SESSION['id'] = $id;
                        header("Location:home.php");
                    }
                    else
                    {			
                        echo "Wrong Password";
                    }
                }
            }
            else
            {
                echo "Wrong id";
            }
            
        }
        
		
	}
	
?>