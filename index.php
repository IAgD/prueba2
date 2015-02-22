<?php include 'php/header.inc'; ?>

		<fieldset>
			<legend>Ingreso de Usuarios</legend>
			<form action="bienvenida.php" method="post">
				Usuario: <input type="text" name="usuario" placeholder="Introduce usario"><br>
				Contraseña: <input type="text" name="contrasena" placeholder="password"><br>
				<input type="submit"> <input type="reset">
			</form>
		</fieldset>
		<br>
		<br>
		<table>
			<tr>
				<td><a href="php/crear.php"><button>Crear</button></a></td>
				<td><a href="php/listar.php"><button>Listar</button></a></td>	
			</tr>
		</table>

<?php include 'php/footer.inc'; ?>