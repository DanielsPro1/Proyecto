<div class="Editar">
<?php

	$sql=("SELECT * FROM `publicaciones`ORDER BY `id` DESC");

			
				$query=mysqli_query($mysqli,$sql);

				echo "<table border='1'; class='table table-hover'>";
					echo "<tr class='warning'>";
					


			    
			?>

			<?php 
				 while($arreglo=mysqli_fetch_array($query)){
					$sql2="SELECT * FROM login WHERE id=$arreglo[1]";

					$ressql=mysqli_query($mysqli,$sql2);
					while ($row=mysqli_fetch_row ($ressql)){
		    	$d=$row[0];
				$user=$row[1];
				$apellido=$row[2];
		    }
					  echo "<tr class=''>";
					  echo "<td> Usuario: $user "." $apellido  "." <br> $arreglo[4]<br></td>";
						echo "<tr></tr>"; 
						echo "<td>Titulo:"." $arreglo[2] "."<br>$arreglo[3] </td>";
						if (!empty($_SESSION['id'])) {
							if(($_SESSION['id']==$arreglo[1])) {
								echo "<tr></tr>"; 
						echo "<td><button type='button' class='btn btn-success'><a href='../view/editarp.php?id=$arreglo[0]'>editar</a></botton></td>";
						echo "<tr></tr><br>"; 
						echo "<td><button type='button' class='btn btn-success'><a href='../view/index2.php?id=$arreglo[0]&idborrar=2'>eliminar</a></botton></td>";
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