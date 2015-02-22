<?php include '../inc/cabecera.inc'; ?>
<link rel="stylesheet" type="text/css" href="../css/styles.css">


	<fieldset>
		<legend>Actualizar y Eliminar Registros</legend>
	<?php 
		include '../inc/conf.inc';

		$conn = mysqli_connect($svr,$user,$pasw,$adb);
		$sql="SELECT * FROM usuario";

		$rs = mysqli_query($conn,$sql);
		echo "<table>
			  <thead><th>UID</th><th>USUARIO</th><th>CONTRASEÑA</th><th></th><th></th></thead>";
		while ($item = mysqli_fetch_array($rs)) {
			echo '<tr>
					<td>'.$item['id'].'</td>
					<form action="update.php?id='.$item['id'].'" method="post">
						<td><input type="text" name="usuario" value='.$item['usuario'].'></td>
						<td><input type="text" name="contrasena" value='.$item['contrasena'].'></td>
						<td><input type="submit" value="Actualizar"></td>
					</form>
					<td><a href="delete.php?id='.$item['id'].'"><button>Eliminar</button></a></td>	
				  </tr>';
		}
		echo "</table>";

		mysqli_close($conn);
	?>		
	</fieldset>

	<br>
	<a href="../index.php">home</a>
<?php include '../inc/pie.inc'; ?>