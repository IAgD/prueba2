<?php include 'config.inc'; ?>
<?php 

	//contectarse - consultar - ejecutar - mostrar? - cerrar
	$conn = mysqli_connect($server,$usuario,$contrasena,$base);

	$slq = "INSERT INTO usuario VALUES (NULL,'".$_POST['usuario']."','".$_POST['contrasena']."')";
	
		if(mysqli_query($conn,$slq)){
			echo "<script>
					  alert('El usuario se creo con exito');
				  </script>";
			
		}else{
			echo "<script>
					  alert('El usuario No se pudo registrar');
				  </script>";
		}		


	mysqli_close($conn);

?>

<script type="text/javascript">
	window.location ="crear.php";
</script>