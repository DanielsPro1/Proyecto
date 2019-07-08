<!DOCTYPE html>
<html>
<head>

	<meta charset="utf-8">
	 
    <link rel="stylesheet" type="text/css" href="css/estilos.css">
	<title>Proyecto academias</title>
</head>
<body >		
<!-- formulario registro -->

<form method="post" action="" >
  <fieldset>
    <legend  style="font-size: 18pt"><b>  Registro</b></legend>
    <div class="form-group">
      <label style="font-size: 14pt"><b>  Ingresa tu nombre</b></label>
      <input type="text" name="realname" placeholder=" Ingresa tu nombre" />
    </div>
    <div class="form-group">
      <label style="font-size: 14pt"><b>  Ingresa tu apellido</b></label>
      <input type="text" name="apellido" placeholder=" Ingresa tu apellido" />
    </div>
    <div class="form-group">
      <label style="font-size: 14pt"><b>  Ingresa tu email</b></label>
      <input type="text" name="nick"  required placeholder=" Ingresa mail"/>
    </div>
    <div class="form-group">
      <label style="font-size: 14pt"><b>  Ingresa tu Password</b></label>
      <input type="password" name="pass" placeholder=" Ingresa contraseña" />
    </div>
    <div class="form-group">
      <label style="font-size: 14pt"><b>  Repite tu contraseña</b></label>
      <input type="password" name="rpass"  required placeholder=" repite contraseña"/>
      </div>
      <div>
      	<label style="font-size: 14pt"><b>  Ingresa tu direccion</b></label>
      <input type="direccion" name="direccion"  placeholder=" Ingresar direccion" />
      </div> 
    
    <input  class="btn btn-danger" type="submit" name="submit" value=" Registrarse"/>

  </fieldset>
</form>
</div>


		<?php
     if(isset($_POST['submit'])){
      require("../model/save.php");
    }
    ?>
		

	
</body>
</html>