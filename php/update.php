<?php 
		include '../inc/conf.inc';

		$conn = mysqli_connect($svr,$user,$pasw,$adb);
		$sql="UPDATE usuario SET 
					usuario = '".$_POST['usuario']."',
					contrasena='".$_POST['contrasena']."'
			   WHERE id=".$_GET['id']."";

		$rs = mysqli_query($conn,$sql);
		

		mysqli_close($conn);
?>	

<script type="text/javascript">
	window.location="edit_update.php";
</script>