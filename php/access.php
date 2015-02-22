<?php 
	
	include '../inc/conf.inc'; //incluye variables para conexion SQL

	$conn = mysqli_connect($svr,$user,$pasw,$adb);

	$u= $_POST['usuario'];
	$ca = $_POST['contrasena'];

	$sql = "SELECT * FROM usuario WHERE usuario='".$u."' AND contrasena='".$ca."'";
	
	$resultado = mysqli_query($conn,$sql);

	if(mysqli_num_rows($resultado) == 1 ){
		echo "<script>
					alert('El usuario esta registrado en DB');
			  </script>";
		echo "<meta http-equiv='refresh' content='0; url=signin.php'>"; 
	}else{
		echo "<script>alert('NO registrado');</script>"; 
	}
	mysqli_close($conn);
?>

<script type="text/javascript">
	window.location="signin.php";
</script>

