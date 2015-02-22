<table>
<?php 
	
	echo "<fieldset>
			<legend>Registrate | Nuevo usuario</legend>
			<form action='nuevo.php' method='post'>
				Usuario: <input type='text' name='usuario'><br>
				Contraseña: <input type='password' name='contrasena'><br>
				<input type='submit' value='Confirmar'>
			</form>
		</fieldset>";
	
?>
</table>

<?php include 'footer.inc'; ?>