<?php
	session_start();
	setcookie("cart","1",time()-1);
	session_destroy();
	header("Location:login.html");
?>