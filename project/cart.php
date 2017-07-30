<html>
	<body background="cart1.jpg">
		<?php
		session_start();
		if(isset($_COOKIE['cart']))
		{
			$cart=$_COOKIE['cart'];	
            $cart = json_decode($cart,true);
		 echo "<font face='Sans-serif' color='white'><h2 align='center'>Cart</h2></font>";
		
			
			echo "<table align='center' border='1' cellspacing='0' cellpadding='5'";
				for($i=0; $i<count($cart); $i++)
				{		
					echo "<tr><td><font color='white'>".$cart[$i]['name']."</font></td><td><font color='white'>".$cart[$i]['quantity']."</font></td></tr>";
				}
				echo "</table>";
				$_SESSION['cart']=$cart;
				
				echo "<br/><form align='center' method='post' action='order.php'><input type='submit' name='order' value='Place Order'></form>";
				echo "<form align='center' method='post' action='cancelOrder.php'><input type='submit' name='cancel' value='Cancel Order'></form>";
				 echo "<a href='home.php'><font face='Sans-serif' color='white'><h4 align='center'>Add more items</h4></font></a>";
		}
		else
		{
			 echo "<font face='Sans-serif' color='white'><h1 align='center'>Cart</h1></font>";
			 echo "<font face='Sans-serif' color='white'><h4 align='center'>Cart is empty</h4></font>";
			 echo "<a href='home.php'><font face='Sans-serif' color='red'><h4 align='center'>Menu</h4></font></a>";
		}
		?>
	</body>
</html>
