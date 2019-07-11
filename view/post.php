<!DOCTYPE html>
<link rel="stylesheet" href="../css/styless.css">
<link href="../css/bootstrap.min.css" rel="stylesheet">
<?php
session_start();
if (@!$_SESSION['user']) {
	header("Location:model/index.php");
}
?>		

<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    
</head>

<body>
<form action="" method="post" enctype="multipart/form-data" name="form1">

<table >
  <legend  style="font-size: 18pt"><b>Publicacion</b></legend>

  <td> Título:
    <label for="titulo"></label>
  <td><input type="text" name="titulo" id="titulo" rows="10" cols="50"></td>
    



 <tr>
      <td>
        texto:<label for="comentario"></label>
     </td>
      <td><textarea name="comentario" id="comentario" rows="10" cols="50" value="
      <?php echo "publicacion"?>"></textarea>
     </td>
  
</tr>


 <tr>
    <td >  
    <button type="submit" class="btn btn-primary"name="submit" id="btn_enviar" value="Enviar" >
					Publicar
				</button>
        
		<div class="col-md-12">
			 
			<button type="button" class="btn btn-success btn-md">
			<a href="index2.php">Cancelar</a>
			</button>
		</div>
	</div>
      
    </td>
  </tr>
   

</table>
</form>


				
			</form>
		</div>
	</div>
</div>
<?php
		if(isset($_POST['submit'])){
			require("../model/publicar.php");
		}
	?>
	
</body>
</html>