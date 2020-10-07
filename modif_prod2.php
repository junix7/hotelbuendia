
<?php
	
	ModificarPersona($_POST['id'],$_POST['nombre'], $_POST['apellido'], $_POST['dni'], $_POST['tiempo'], $_POST['habitacion'], $_POST['valor'], $_POST['personas']);

	function ModificarPersona($id, $nombre, $apellido , $dni , $tiempo , $habitacion,$valor,$personas)
	{
		include 'conexion.php';
		echo $sentencia="UPDATE tblhotel SET  nombre='".$nombre."', apellido='".$apellido."'  , dni='".$dni."'   , tiempo='".$tiempo."' , habitacion='".$habitacion."' , valor='".$valor."', personas='".$personas."' WHERE id='".$id."' ";
		$conexion->query($sentencia) or die ("Error al actualizar datos".mysqli_error($conexion));
	}
?>

<script type="text/javascript">
	alert("Datos Actualizados Exitosamante!!");
	window.location.href='panel.php';
</script>