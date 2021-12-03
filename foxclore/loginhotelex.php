<?php
session_start();
if(isset($_SESSION['usuario'])){
	header("Location: ../index.php");
	header("Location: ../foxclore");
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Hotelex | LOGIN</title>
	<link rel="stylesheet" href="../foxclore/css/styles.css">
</head>
<body>
	<a href="../foxclore/index.php">Volver</a>
	<br><br>
	<hr>

<div class="content-container">    
	<div class="login-container">
		<h2 class="section-title">Login</h2>
		<form action="" method="POST">
			<div>
				<input autofocus="true" class="form-input" type="text" name="user" placeholder="usuario" required="true">
			</div>
			<div>
				<input class="form-input" type="password" name="pass" placeholder="contraseña" required="true">
			</div>
			<div>
				<input class="form-input form-input-submit" type="submit" name="login" value="Ingresar">
			</div>
		</form>
		<?php

if(isset ($_POST['login'])){
	require("conexionhotelex.php");
	
	$user = $_POST['user'];
	$pass = md5($_POST['pass']);
	
	$validar = $conexion->query("SELECT * FROM usuarios where nombre_usuario = '$user' AND contrasenia ='$pass'");
	$contar = $validar->num_rows;
	//echo $contar;
	if($contar == 1){
		if($contar == 1 && $user==='admin'){
			$_SESSION['usuario'] = 'admin';
			header("Location: ./admin/admin.php");
		}else{
			$_SESSION['usuario'] = $user;
			header("Location: ../foxclore");
		}
	}
	else{
		echo "el usuario no existe o escribio mal algo, intente de nuevo";
	}
		
}
?>
		<small>¿No tenes una cuenta?
			<a class="mute" href="./registerhotelex.php">Registrate</a>
		</small>
	</div>
</div>


</body>
</html>