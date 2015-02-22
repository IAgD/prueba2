<?php include 'config.inc'; ?>
<?php 

	//contectarse - consultar - ejecutar - mostrar? - cerrar
	$conn = mysqli_connect($server,$usuario,$contrasena,$base);

	$slq = "DELETE FROM usuario WHERE id='".$_GET['id']."'";
	
		if(mysqli_query($conn,$slq)){
			echo "<script>
					  alert('El usuario fue eliminado');
				  </script>";
			
		}else{
			echo "<script>
					  alert('El usuario No se pudo eliminar');
				  </script>";
		}		


	mysqli_close($conn);

?>


<script type="text/javascript">
	window.location ="listar.php";
</script>