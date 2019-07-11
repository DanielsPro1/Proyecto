<!DOCTYPE html>
<link rel="stylesheet" href="../css/styless.css">
<link href="../css/bootstrap.min.css" rel="stylesheet">
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
	
<div class="Editar">

   </div>


			<div class="container-fluid">
	<div class="row">
		<div class="col-md-12">
			<table class="table">

			<?php

				require("../conexion/connect.php");
				$sql=("SELECT * FROM `login` WHERE `id` = $x");
	
				$query=mysqli_query($mysqli,$sql);

				echo "<class='table table-hover';>";
					echo "<thead class='warning'>";
						
						echo "<th>Usuario</th>";
						echo "<th>apellido</th>";
						echo "<th>Password</th>";
						echo "<th>Correo</th>";
						echo "<th>direccion</th>";
						
					echo "</thead>";

			    
			?>

<?php 
				 while($arreglo=mysqli_fetch_array($query)){
					
				  	echo "<tr class='success'>";
				    	
				    	echo "<td>$arreglo[1]</td>";
				    	echo "<td>$arreglo[2]</td>";
				    	echo "<td>$arreglo[3]</td>";
				    	echo "<td>$arreglo[4]</td>";
				    	echo "<td>$arreglo[5]</td>";
				    	

				    	echo "<td><button type='button' class='btn btn-success'><a href='update.php?id=$arreglo[0]'>editar</a></button></td>";
						
						

						
					echo "</tr>";	}					
					?>
				
				
			</table>
		</div>
	</div>
</div>
</body>
</html>