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
					<td  colspan="4" align="center">Users</td>
				</tr>
				<tr>
					<td>ID</td>
					<td>Name</td>
					<td>Email</td>
					<td>User Type</td>
				</tr>
				<?php
						while(!feof($file))
						{
						$line = trim(fgets($file));
						$data = explode(" ", $line);
						echo "<tr>";
							echo "<td>$data[0]</td>";
							echo "<td>$data[2]</td>";
							echo "<td>$data[3]</td>";
							echo "<td>$data[4]</td>";
							
						echo "</tr>";
						}
						fclose($file);
				?>
			</tbody>
		</table>	
	</body>
</html>

						