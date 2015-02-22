<?php 
	
	include '../inc/conf.inc'; //incluye variables para conexion SQL

	$conn = mysqli_connect($svr,$user,$pasw,$adb);

	$usuario = $_POST['usuario'];
	$contrasena = $_POST['contrasena'];

	if( (isset($usuario) && !empty($usuario)) && (isset($contrasena) && !empty($contrasena)) ){
		
		$sql = "INSERT INTO usuario values(NULL,'".$usuario."','".$contrasena."')";
		mysqli_query($conn,$sql);
		echo "<script>alert('Se inserto correctamente');</script>";
	}else{
		echo "<script>alert('Datos incorrectos o incompletos');</script>";
		echo '<meta http-equiv="refresh" content="0; url=new.php">';
	}

	mysqli_close($conn);

?>

<script type="text/javascript">
	window.location = "new.php";
</script>