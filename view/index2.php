<?php
	session_start();
	if (@!$_SESSION['user']) {
		header("Location:../index.php");
	}
	?>


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



<div class="container-fluid">
	<div class="row">
	    <?php 
       require("../conexion/connect.php");
        include("../view/mostrar.php");
        ?>
		<div class="col-md-12">
			 
			<button type="button" class="btn btn-primary">
			<a href="../model/disconect.php">desconectar
			</button> 
			<button type="button" class="btn active btn-secondary">
			<a href="../view/post.php">Publicar
			</button>
			<button type="button" class="btn active btn-secondary">
			<a href="updateuser.php">editar usuario
			</button>
			<div class="row">
				<div class="col-md-12">
				</div>
			</div>
		</div>
	</div>
</div>

<?php
		if(isset($_POST['submit'])){
			require("post.php");
		}
	?>
</body>

</html>

