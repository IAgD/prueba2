<?php 

	include '../inc/conf.inc';

	$u = $_POST['usuario'];
	$c = $_POST['contrasena'];

	$conn = mysqli_connect($svr,$user,$pasw,$adb);

	$consulta = "SELECT * FROM usuario WHERE usuario = '".$u."' and contrasena='".$c."'";

	if( (isset($u) && isset($c)) && (!empty($u) && !empty($c))){
	    mysqli_query($conn,$consulta);
		echo '<h1>Usuario registrado</h1>
			  <meta http-equiv="refresh" content="3; url=login.php">;';
	}else{
			echo '<script>
					alert("NO registrado");
					<meta http-equiv="refresh" content="0; url=login.php">;
			      </script>';
		}
	mysqli_close($conn);
 ?>

 <script type="text/javascript">
 	window.location = "login.php";
 </script>