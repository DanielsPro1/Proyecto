<!DOCTYPE html>
<link rel="stylesheet" href="../css/styless.css">
<link href="../css/bootstrap.min.css" rel="stylesheet">
<?php
session_start();
if (@!$_SESSION['user']) {
	header("Location:index2.php");
}
?>		
<html lang="es">
  <head>
    <meta charset="utf-8">
    <title>Proyecto</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet"/>
  </head>
<body data-offset="40" background="images/fondotot.jpg" style="background-attachment: fixed">
<div class="container">
<header class="header">
<div class="row">
	
</div>
</header>

<div class="row">
	
	
		
	<div class="span12">

		<div class="caption">
		

		
		<div class="well well-small">
		<hr class="soft"/>
		<h4>Edición de usuarios</h4>
		
		
		<?php
		extract($_GET);
		require("../conexion/connect.php");
		$sql="SELECT * FROM login WHERE id=$id";
	//la variable  $mysqli viene de connect_db que lo traigo con el require("connect_db.php");
		$ressql=mysqli_query($mysqli,$sql);
		while ($row=mysqli_fetch_row ($ressql)){
		    	$id=$row[0];
		    	$user=$row[1];
		    	$apellido=$row[2];
		    	$pass=$row[3];
		    	$email=$row[4];
		    	$direccion=$row[5];
		    }
		?>
        <center>

			<div class="row">
		<div class="col-md-12">
			<form action="../model/updatebd.php" method="post" role="form">
				<div class="form-group">
					 
					<label for="exampleInputEmail1">
					id<br><input type="text" name="id" value= "<?php echo $id ?>" readonly="readonly"><br>
					</label>
					
				</div>
				<div class="form-group">
					 
					<label for="exampleInputPassword1">
					Usuario<br> <input type="text" name="user" value="<?php echo $user?>"><br>
					
					</label>
					
				</div>
				<div class="form-group">
					 
					<label for="exampleInputPassword1">
					
					apellido<br> <input type="text" name="apellido" value="<?php echo $apellido?>"><br>
					</label>
					
				</div>
				<div class="form-group">
					 
					<label for="exampleInputPassword1">
					Password usuario<br> <input type="text" name="pass" value="<?php echo $pass?>"><br>
					
					</label>
					
				</div>
				<div class="form-group">
					 
					 <label for="exampleInputPassword1">
					 Correo usuario<br> <input type="text" name="email" value="<?php echo $email?>"><br>
					 </label>
					 
				 </div>
				 <div class="form-group">
					 
					 <label for="exampleInputPassword1">
					 direccion<br> <input type="text" name="direccion" value="<?php echo $direccion?>"/><br>
					 </label>
					 
				 </div>

				
				 <div class="form-group">
					
				<button type="submit" class="btn btn-primary">
				Guardar
				</button>
			</form> 
			<button type="button" class="btn btn-success">
			<a href="../view/index2.php">Cancelar</a>
			</button>
		</div>
	</div>	  
	</center>
		
			
		<br/>
		</div>

</div>

	</div>
</div>


</div><!-- /container -->

  </body>
</html>
