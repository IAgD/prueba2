<?php include 'config.inc'; ?>
<?php 

	//contectarse - consultar - ejecutar - mostrar? - cerrar
	$conn = mysqli_connect($server,$usuario,$contrasena,$base);

	$slq = "UPDATE usuario SET 
			usuario='".$_POST['usuario']."',
			contrasena='".$_POST['contrasena']."' 
		WHERE id=".$_GET['id'];
	
	mysqli_query($conn,$slq);

	mysqli_close($conn);
?>

<meta http-equiv="refresh" content="0; url=listar.php">