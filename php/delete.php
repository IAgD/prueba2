<?php 
		include '../inc/conf.inc';

		$conn = mysqli_connect($svr,$user,$pasw,$adb);
		$sql="DELETE FROM usuario WHERE id='".$_GET['id']."' ";

		$rs = mysqli_query($conn,$sql);
		

		mysqli_close($conn);
?>	

<script type="text/javascript">
	window.location="edit_update.php";
</script>