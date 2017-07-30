<?php
 
	session_start();
    setcookie("cart","1",time()-1);
	header('location:home.php');
?>