
<?php

if (empty($_POST['pass'])) {
	echo "<script>location.href='../view/login.php'</script>";
}
session_start();
	require("../conexion/connect.php");

	$username=$_POST['mail'];
	$pass=$_POST['pass'];

	$sql=mysqli_query($mysqli,"SELECT * FROM login WHERE email='$username'");
	if($f=mysqli_fetch_assoc($sql)){
		if($pass==$f['password']){
			$_SESSION['id']=$f['id'];
			$_SESSION['user']=$f['user'];
			

			header("Location: ../view/index2.php");
		}else{
			echo '<script>alert("CONTRASEÑA INCORRECTA")</script> ';
		
			echo "<script>location.href='../view/login.php.'</script>";
		}
	}else{
		
		echo '<script>alert("ESTE USUARIO NO EXISTE, PORFAVOR REGISTRESE PARA PODER INGRESAR")</script> ';
		
		echo "<script>location.href='index.php'</script>";	

	}

?>