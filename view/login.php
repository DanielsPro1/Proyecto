
<!DOCTYPE html>
<html>
<head>
	<title>Login</title>
	<link rel="stylesheet" href="css/bootstrap.min.css">
</head>
<body>
   <center>
		<div class="container-fluid">
	<div class="row">
		<div class="col-md-12">
			<form role="form" action="../model/validar.php" method="post">
				<div class="form-group">
					 
					<label for="exampleInputEmail1">
					Correo:
					</label>
					<input class="form-group has-success"  type="text" name="mail"placeholder=" Correo" >
				</div>
				<div class="form-group">
					 
					<label for="exampleInputPassword1">
					Contraseña:
					</label>
					<input type="password" name="pass" placeholder=" Contraseña">
				</div>
				
				<button type="submit" class="btn btn-primary">
					ingresar
				</button>
				<button  class="btn btn-primary"> <a href="../index.php">Regresar</a>
					
				</button>
			</form>
		</div>
	</div>
	</center>
</div>

</body>
</html>