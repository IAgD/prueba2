<?php include '../inc/cabecera.inc'; ?>
<link rel="stylesheet" type="text/css" href="../css/styles.css">

	<fieldset>
		<legend>Acceso a usuarios</legend>
			<table>
				<form action="access.php" method="post">
				<tr>
					<td>Usuario</td>
					<td><input type="text" name="usuario" required="required" ><d>
				</tr>
				<tr>
					<td>Contraseña</td>
					<td><input type="password" name="contrasena" required="required"><d>
				</tr>
				<tr>
					<td><input type="submit"></td>
					<td></td>
				</tr>
				</form>
			</table>	
	</fieldset>

	<br>
	<a href="../index.php">home</a>
<?php include '../inc/pie.inc'; ?>