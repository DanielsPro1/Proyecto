<!DOCTYPE html>


<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
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
      <td><textarea name="comentario" id="comentario" rows="10" cols="50" value="<?php echo "publicacion"?>"></textarea>
     </td>
  
</tr>


 <tr>
    <td >  
      <input type="submit" name="submit" id="btn_enviar" value="Enviar">
      <button><a href="index2.php">regresar</a></button>
    </td>
  </tr>
   

</table>
</form>
<?php
		if(isset($_POST['submit'])){
			require("../model/publicar.php");
		}
	?>
	
</body>
</html>