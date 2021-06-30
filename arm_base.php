<?php 

include_once('connection.php'); 

$sql="select * from Arm_base"; 
$result = $conn->query($sql);
?> 

<!DOCTYPE html> 
<html> 
	<head> 
		<title> Fetch Data From Database </title> 
	</head> 

	<body>

	<table align="center" border="1px" style="width:600px; line-height:40px;"> 
	<tr> 
		<th colspan="2"><h2>Arm base control</h2></th> 
		</tr>

			  <th> id </th> 
			  <th> base direction </th> 

			  
		</tr> 
		
		<?php while($row = $result->fetch_assoc()) 
		{ 
		?> 
		<tr> <td><center><?php echo $row['id']; ?></center></td> 
		<td><center><?php echo $row['base_direction']; ?></center></td> 
	
		</tr> 

	<?php 
               } 
          ?> 

	</table> 

	</body> 
	
	</html>