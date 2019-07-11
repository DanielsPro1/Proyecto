<!DOCTYPE html>


<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable-no, 
	initial-scale=1.0, maximun-scale=1.0"/>
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    
	<link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">
</head>
<body>

<header>
<h1>proyecto</h1>
</header>



  </head>
  <body>

    <div class="container-fluid">
	<div class="row">
		<div class="col-md-12">
			<div class="row">

			   <div class="col-md-9">
               <?php 
              require("conexion/connect.php");
               include("view/mostrar.php");
               ?>
				
               </div>
             
				<div class="col-md-3">
					 
					<button type="button" class="btn btn-success">
					<a href="view/login.php">Iniciar sesion
					</button> <br><br>
					<button type="button" class="btn btn-success">
					<a href="view/register.php">Registrar 
					</button>
				</div>
			 
				
			</div>
		</div>
	</div>
</div>

    <script src="js/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/scripts.js"></script>
  </body>
</html>

</body>

</html>


