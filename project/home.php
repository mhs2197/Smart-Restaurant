<html>
<head>
	<title>
		Menu
	</title>
    <link rel='stylesheet' type='text/css' href='stylesheet.css'>
    <script>
    window.onload = function(e){
        
        var ajax = new XMLHttpRequest();
        var items = document.getElementById('menuItems');
        ajax.open('GET','service.php',true);
        ajax.send();
        ajax.onreadystatechange = function(){
            if(this.readyState==4)
                {
                    var data = JSON.parse(ajax.responseText);
                     items.innerHTML = "<br>";
                    for(var i=0;i<data.length;i++)
                    {
                        items.innerHTML += '<li class="menuItem"><a href="#" onclick="getImage(\''+data[i]['name']+'\')">' + data[i]['name'] + '<img height="35px" src="images/'+data[i]['name']+'"style="float:right"></a><hr></li>';        
                    }
                }
        };
        
    };
        function getMenu(item){
            var obj = new XMLHttpRequest();
            var items = document.getElementById('menuItems');
            obj.open('GET','service.php?category='+item,true);
            obj.send();
            obj.onreadystatechange = function(){
                if(this.readyState==4)
                    {
                        var data = JSON.parse(obj.responseText);
                        items.innerHTML = "";
                        for(var i=0;i<data.length;i++)
                        {
                            items.innerHTML += '<li class="menuItem"><a href="#" onclick="getImage(\''+data[i]['name']+'\')")">' + data[i]['name'] + '<img height="35px" src="images/'+data[i]['name']+'"style="float:right"></a><hr></li>'; 
                            console.log(data[i]['name']);
                        }
                    }
            };
        }
        function getImage(name)
        {
            var contentRight= document.getElementById('content-right');
            contentRight.style.display="block";
            var image = document.getElementById('content-right-image');
            image.src= "images/"+name;
            var cart = document.getElementById('cookiename');
            cart.value=name;
        }
    </script>
</head>
<body background="1background.jpg">
<?php
	session_start();	
	if(isset($_SESSION['id']))
	{
		setcookie('counter','0');
	}
	else{
		header("Location:login.html");
	}
?>
	<font face='Sans-serif' color='white'><h1 align='center'>Menu</h1></font>

    <div id='navbar'>

        <ul>
            <li><a href="#appetizer" onclick="getMenu('appetizer')">Appetizer</a></li>
            <li><a href="#burgers" onclick="getMenu('burgers')">Burgers</a></li>
            <li><a href="#sides" onclick="getMenu('sides')">Sides</a></li>
            <li><a href="#mains" onclick="getMenu('mains')">Mains</a></li>
            <li><a href="#drinks" onclick="getMenu('drinks')">Drinks</a></li>
            <li><a href="#all" onclick="getMenu('all')">All</a></li>            
            <li><a href='cart.php'  class='menu-img'><img src="images/cart.jpg" height='40' /></a></li>
            <li><a href='logout.php'><img src="images/logout.ico" height='40' /></a></li>
        </ul>  
    </div>

    <div id='content'>
        <div id='content-left'>
            <ul id='menuItems'>
                
            </ul>
        </div>
        <div id="content-right" style='display:none'>
            <img height="300px" id='content-right-image' src="">
            <br>
            <form id='cartForm' method="post" action="addtocart.php">
                <input type='hidden' id='cookiename' name='cart' value="">
                <input type="submit" value='Add to Cart'>
            </form>
        </div>
        
    </div>
	<?php
		
		if($_SERVER['REQUEST_METHOD']=="GET"){
				if(isset($_GET['name']))
				{
						$name = $_GET['name'];
						$imgName = "$name".".png";
						echo "<img height='300px' src='images/$imgName'/>";
						echo "<br/><font face='Impact' color='White'><h1>$name</h1></font>";
						echo "<form method='post'action='addtocart.php'><input type='hidden' name='cart' value='$name'>
						<input type='submit' value='Add to Cart'></form>";
					
				}
			
			}
		echo "</td>";
		echo "</tr>";
		echo "</table>";	
	?>
</body>
</html>

