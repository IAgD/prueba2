<?php include 'config.inc'; ?>
<?php 

	//contectarse - consultar - ejecutar - mostrar? - cerrar
	$conn = mysqli_connect($server,$usuario,$contrasena,$base);

	$slq = "SELECT * FROM usuario";
	
	$resultado = mysqli_query($conn,$slq);
	echo '<table border="1">
		  <thead><th>UID</th><th>Usuario</th><th>Contraseña</th><th></th><th></th></thead>';
	
	while($item = mysqli_fetch_array($resultado)){
		echo '<form action="actualizar.php?id='.$item['id'].'" method="post">
		  	  	<tr>
		  	  		<td>'.$item['id'].'</td>
		      		<td><input type="text" name=usuario value="'.$item['usuario'].'"></td>
		      		<td><input type="text" name="contrasena" value="'.$item['contrasena'].'"></td>
		      		<td><input type="submit" value="Update"></td>
			  </form>
		      <td><a href="eliminar.php?id='.$item['id'].'"><button>Delete</button></td>
		  </tr>';
	}

	echo '</table>';

	mysqli_close($conn);

?>

<?php include 'footer.inc'; ?>