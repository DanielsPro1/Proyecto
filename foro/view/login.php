
<!DOCTYPE html>
<html>
<link href="../css/bootstrap.min.css" rel="stylesheet">
<link href="css/style.css" rel="stylesheet">
<head>
	<title>Login</title>
	
</head>
<body>
   
</div>
<div class="container-fluid">
     <center>
	<div class="row">
		<div class="col-md-12">
			<form role="form" action="../model/validar.php" method="post">
				<div class="form-group">
					 
					<label for="exampleInputEmail1" > 
						Email address:
					</label>
					<input type="email" name="mail" class="form-control" id="exampleInputEmail1" />
				</div>
				<div class="form-group">
					 
					<label for="exampleInputPassword1">
						Contraseña:
					</label>
					<input type="password"name="pass" class="form-control" id="exampleInputPassword1" />
				</div>
				
				<button type="submit" class="btn btn-primary">
					Ingresar
				</button>
			</form> 
			<button type="button" class="btn btn-secondary " >
			<a href="../index.php">
			Regresar
			</button>
		</div>
		</center>
</div>
</body>
</html>