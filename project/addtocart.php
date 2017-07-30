<?php
	session_start();
	if(isset($_POST['cart']))
	{
		$name = $_POST['cart'];
        
		if(isset($_COOKIE['cart']))
		{
            
			$cart = $_COOKIE['cart'];
            $cartItem = array("name"=>$name,"quantity"=>1);
            $cart = json_decode($cart,true);
            $flag=0;
            for($i=0; $i < count($cart);$i++)
            {
                if($cart[$i]['name']==$name)
                {
                    $cart[$i]['quantity'] +=1;
                    $flag=1;
                }
                else if($flag==0 && $i==(count($cart)-1))
                {
                    $cartItem = array("name"=>$name,"quantity"=>1);
                    var_dump($cartItem);
                    $cart[]=$cartItem;
                    break;
                }               
            }
            var_dump($cart);

            $jsonCart = json_encode($cart);
            setcookie('cart',$jsonCart);
            header('location:home.php');
        }
        else
        {
            $cart = array();
            $cartItem = array("name"=>$name,"quantity"=>1);
            $cart[]=$cartItem;           
            
            var_dump($cart);
            $jsonCart = json_encode($cart);
            setcookie('cart',$jsonCart);
            header('location:home.php');
        }
		//var_dump($cart);
        
        //var_dump($cartItem);
        
       
        
    }

?>
