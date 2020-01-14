 

<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<?php 

echo '<table border ="1">  ';
//La cabecera
	echo "<tr>";
	echo "<th> X </th>";

	for ($i=1; $i <= 10 ; $i++) { 
		echo "<th> $i  </th>" ;
		

	}
	echo "</tr>";
	//El cuerpo
		for ($i=1; $i <= 10 ; $i++) { 
			echo "<tr>";
			echo "<th> $i </th>";

			for ($j = 1; $j <= 10 ; $j++) { 


				echo  "<td>" . $i * $j ."</td>";
				
			
			}
			 echo "</tr>";
		}
echo "</table>";
?>
</body>
</html>
	







