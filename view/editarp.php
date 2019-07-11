<link rel="stylesheet" href="../css/styless.css">
<link href="../css/bootstrap.min.css" rel="stylesheet">

<div>
<?php
		extract($_GET);
		require("../conexion/connect.php");
$sql=("SELECT * FROM `publicaciones` WHERE id=$id");
		
	//la variable  $mysqli viene de connect_db que lo traigo con el require("connect_db.php");
		$ressql=mysqli_query($mysqli,$sql);
		while ($row=mysqli_fetch_row ($ressql)){
		    	$id=$row[0];
		    	$titulo=$row[2];
		    	$texto=$row[3];
		    }	
			?>
			

		<div class="container-fluid">
	<div class="row">
		<div class="col-md-12">
			<div class="row">
				<div class="col-md-12">
					<form action="../model/editarpbd.php" method="post" role="form">
						<div class="form-group">
							 
							<label for="exampleInputEmail1">
							Id<br><input type="text" name="id" value= "<?php echo $id ?>" readonly="readonly"><br>
							</label>
							
						</div>
						<div class="form-group">
							 
							<label for="exampleInputPassword1">
							titulo<br> <input type="text" name="titulo" value="<?php echo $titulo?>"><br>
							</label>
							
						<label for="comentario"></label>
    <textarea name="texto" id="comentario" rows="10" cols="50"> <?php echo $texto?></textarea><br>
						
						<button type="submit" class="btn btn-primary">
						<div class="form-group">
							 
							
					
				
							
						
						<button>
						<input type="submit" value="Guardar" class="btn btn-success btn-primary">
						</button>
					</form> 
					<button type="button" class="btn btn-success">
					<a href="../view/index2.php">Cancelar</a>
					</button>
				</div>
			</div>
		</div>
	</div>
</div>
</div>


