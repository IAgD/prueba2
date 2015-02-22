<?php include 'php/config.inc'; ?>
<?php 

	$us = $_POST['usuario'];
	$cont = $_POST['contrasena'];
	//contectarse - consultar - ejecutar - mostrar? - cerrar
	$conn = mysqli_connect($server,$usuario,$contrasena,$base);

	$sql = "SELECT * FROM usuario WHERE usuario='".$us."' and contrasena='".$cont."'";
	

	if( (isset($us) && isset($cont)) && (!empty($us) && !empty($cont)) ){

		mysqli_query($conn,$sql);
		echo 'El usuario es correcto bienvenido
			  <br><br>
			  <a href="index.php">inicio</a>';
	} else{
		echo "<script>
			     alert('Datos incorrectos o incompletos');
			     window.location ='index.php';
			  </script>";

	}

	mysqli_close($conn);

?>