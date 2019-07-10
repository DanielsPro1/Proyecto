<!DOCTYPE html>
	<?php
	session_start();
	$x= $_SESSION['id'];
	if (@!$_SESSION['user']) {
		header("Location:index2.php");
	}
	?>
<html>
<head>
	<title>modificar usuario</title>
	
</head>
<body>
	

<!-- ======================================================================================================================== -->
<div class="Editar">
<?php

				require("../conexion/connect.php");
				$sql=("SELECT * FROM `login` WHERE `id` = $x");
	
//la variable  $mysqli viene de connect_db que lo traigo con el require("connect_db.php");
				$query=mysqli_query($mysqli,$sql);

				echo "<table border='1'; class='table table-hover';>";
					echo "<tr class='warning'>";
						
						echo "<td>Usuario</td>";
						echo "<td>apellido</td>";
						echo "<td>Password</td>";
						echo "<td>Correo</td>";
						echo "<td>direccion</td>";
						echo "<td>Editar</td>";
					echo "</tr>";

			    
			?>

			<?php 
				 while($arreglo=mysqli_fetch_array($query)){
				  	echo "<tr class='success'>";
				    	
				    	echo "<td>$arreglo[1]</td>";
				    	echo "<td>$arreglo[2]</td>";
				    	echo "<td>$arreglo[3]</td>";
				    	echo "<td>$arreglo[4]</td>";
				    	echo "<td>$arreglo[5]</td>";
				    	

				    	echo "<td><a href='update.php?id=$arreglo[0]'>editar</td>";
						
						

						
					echo "</tr>";
				}					
			?>
			</div>
</body>
</html>