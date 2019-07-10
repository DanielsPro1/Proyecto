<div class="Editar">
<?php



	$sql=("SELECT * FROM `publicaciones`ORDER BY `id` DESC");

				

			

	
//la variable  $mysqli viene de connect_db que lo traigo con el require("connect_db.php");
				$query=mysqli_query($mysqli,$sql);

				echo "<table border='1'; class='table table-hover';>";
					echo "<tr class='warning'>";
					


			    
			?>

			<?php 
				 while($arreglo=mysqli_fetch_array($query)){
					$sql2="SELECT * FROM login WHERE id=$arreglo[1]";

					$ressql=mysqli_query($mysqli,$sql2);
					while ($row=mysqli_fetch_row ($ressql)){
		    	$d=$row[0];
		    	$user=$row[1];
		    }
					  echo "<tr class='success'>";
					  echo "<td>titulo: $arreglo[2] "." usuario: $user "." fecha: $arreglo[4]</td>";
						echo "<tr></tr>"; 
				    	echo "<td>$arreglo[3]</td>";
				    	if (!empty($_SESSION['id'])) {
							if(($_SESSION['id']==$arreglo[1])) {
				    	echo "<td><a href='../view/editarp.php?id=$arreglo[0]'>editar</td>";
						echo "<td><a href='../view/index2.php?id=$arreglo[0]&idborrar=2'>eliminar</a></td>";
						}}

						
					echo "</tr>";
				}	
				echo "</table>";

					extract($_GET);
					if(@$idborrar==2){
		
						$sqlborrar="DELETE FROM publicaciones WHERE id=$id";
						$resborrar=mysqli_query($mysqli,$sqlborrar);
						echo '<script>("publicacion Eliminadaa")</script> ';
					
						echo "<script>location.href='index2.php'</script>";
					}				
			?>
			</div>