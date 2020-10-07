<?php
	EliminarPersona($_GET['id']);

	function EliminarPersona($id)
	{
		include 'conexion.php';
		$sentencia="DELETE FROM tblhotel WHERE id='".$id."' ";
		$conexion->query($sentencia) or die ("Error al eliminar".mysqli_error($conexion));

	}
?>

<script type="text/javascript">
	alert("USUARIO ELIMINADO CON EXITO");
	window.location.href='panel.php';
</script>