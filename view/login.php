
<!DOCTYPE html>
<html>
<head>
	<title>Login</title>
	<link rel="stylesheet" href="css/bootstrap.min.css">
</head>
<body>
<form action="../model/validar.php" method="post">

			<table>

			<tr><td><label style=""><b>  Correo: </b></label></td>
				<td> <input class="form-group has-success"  type="text" name="mail"placeholder=" Correo" ></td></tr>
			<tr><td><label ><b>  Contraseña: </b></label></td>
				<td ><input type="password" name="pass" placeholder=" contraseña"></td></tr>
			<tr><td></td>
				<td ><input class="btn btn-primary" type="submit" value="Aceptar"><button><a href="../index.php">regresar</a></button></td>
				</tr></tr></table>
		</form>
		 

</body>
</html>