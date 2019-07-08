<div class="Editar">
<?php


if (empty($_SESSION['id'])) {
	$sql=("SELECT * FROM `publicaciones`");
}else{

	$x= $_SESSION['id'];
				$sql=("SELECT * FROM `publicaciones` WHERE `usuario_id` = $x ORDER BY `id` DESC");
}
				

				require("../conexion/connect.php");

	
//la variable  $mysqli viene de connect_db que lo traigo con el require("connect_db.php");
				$query=mysqli_query($mysqli,$sql);

				echo "<table border='1'; class='table table-hover';>";
					echo "<tr class='warning'>";
						echo "<td>titulo</td>";
						echo "<td>texto</td>";
						if (!empty($_SESSION['id'])) {
						echo "<td>Editar</td>";
						echo "<td>borrar</td>";
					}
					echo "</tr>";


			    
			?>

			<?php 
				 while($arreglo=mysqli_fetch_array($query)){
				  	echo "<tr class='success'>";
				    	echo "<td>$arreglo[2]</td>";
				    	echo "<td>$arreglo[3]</td>";
				    	if (!empty($_SESSION['id'])) {
				    	echo "<td><a href='editarp.php?id=$arreglo[0]'><img src='images/actualizar.gif' class='img-rounded'></td>";
						echo "<td><a href='mostrar.php?id=$arreglo[0]&idborrar=2'><img src='images/eliminar.png' class='img-rounded'/></a></td>";
						}

						
					echo "</tr>";
				}	
				echo "</table>";

					extract($_GET);
					if(@$idborrar==2){
		
						$sqlborrar="DELETE FROM publicaciones WHERE id=$id";
						$resborrar=mysqli_query($mysqli,$sqlborrar);
						echo '<script>alert("publicacion Eliminadaa")</script> ';
						//header('Location: proyectos.php');
						echo "<script>location.href='admin.php'</script>";
					}				
			?>
			</div>