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
	<link href="../css/bootstrap.min.css" rel="stylesheet">
      <link href="../css/style.css" rel="stylesheet">   
	<title>Document</title>
	
</head>
<body>

<div class="container-fluid">
	<div class="row">
		<div class="col-md-12">
			<div class="row">
				<div class="col-md-8">
					<div class="row">
						<div class="col-md-12">
						 <?php 
                           require("../conexion/connect.php");
                           include("../view/mostrar.php");
                          ?>

						</div>
					</div>
				</div>
				<div class="col-md-4">
					<div class="row">
						<div class="col-md-12">
							 
							<button type="button" class="btn btn-success">
							<a href="updateuser.php">editar usuario
							</button>
						</div>
					</div>
					<div class="row">
						<div class="col-md-12">
							 
							<button type="button" class="btn btn-success">
							<a href="../view/post.php">Publicar
							</button>
						</div>
					</div>
					<div class="row">
						<div class="col-md-12">
							 
							<button type="button" class="btn btn-success">
							<a href="../model/disconect.php">Desconectar
							</button>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>

</body>

</html>


 <?php
  if(isset($_POST['submit'])){
   require("post.php");
	}
  ?>