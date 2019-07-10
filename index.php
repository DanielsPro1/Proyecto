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
<center>
<header>
<h1>proyecto</h1>
</header>

<div class="container-fluid">


	<div class="row">
	     
		<div class="col-md-9">
			 
		<?php 
     require("conexion/connect.php");
      include("view/mostrar.php");
        ?>
			
		</div>
		
		<div class="row">
			<div class="col-md-3">
			<button type="button" class="btn btn-secondary" >
            <a href="view/login.php">Iniciar sesion
			</button> 
			<br>
			<br>
			<button type="button" class="btn active btn-secondary">
            <a href="view/register.php">Registrar 
			</button>

			</div>
		</div>
	</div>
</div>
</center>


<script src="js/jquery-3.4.1.min.js"> </script>
<script src="js/popper.min.js"> </script>
<script src="js/bootstrap.min.js"></script>



</body>

</html>


