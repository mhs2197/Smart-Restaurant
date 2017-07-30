<html>
	<head>
	
	</head>
	<body>
		
<?php 
	session_start();
	$file = fopen("user.txt","r");	
?>
		<table border="1" cellspacing="0">
			<tbody>
				<tr>
					<td  colspan="2" align="center">Profile</td>
				</tr>
				<tr>
					<td>ID</td>
					<td>
						<?php
						while(!feof($file))
						{
						$line = trim(fgets($file));
						$data = explode(" ", $line);
						if($data[2] == $_SESSION['name'])
						{
							echo "$data[0]";	
						}
						}
						fclose($file);
						?>
					</td>
				</tr>
				<tr>
					<td>Name</td>
					<td>
						<?php
						$file = fopen("user.txt","r");
						while(!feof($file))
						{
						$line = trim(fgets($file));
						$data = explode(" ", $line);
						if($data[2] == $_SESSION['name'])
						{
							echo "$data[2]";	
						}
						}
						?>
					</td>
				</tr>
				<tr>
					<td>Email</td>
					<td>
						<?php
						$file = fopen("user.txt","r");
						while(!feof($file))
						{
						$line = trim(fgets($file));
						$data = explode(" ", $line);
						if($data[2] == $_SESSION['name'])
						{
							echo "$data[3]";	
						}
						}
						?>
					</td>
				</tr>
				<tr>
					<td>User Type</td>
					<td>
						<?php
						$file = fopen("user.txt","r");
						while(!feof($file))
						{
						$line = trim(fgets($file));
						$data = explode(" ", $line);
						if($data[2] == $_SESSION['name'])
						{
							echo "$data[4]";	
						}
						}
						?>
					</td>
				</tr>
				<tr>
					<td></td>
					
				</tr>
			</tbody>
		</table>	
	</body>
</html>
