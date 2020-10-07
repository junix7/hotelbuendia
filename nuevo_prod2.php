<?php

	
	NuevoPersona($_POST['nombre'], $_POST['apellido'], $_POST['dni'], $_POST['tiempo'], $_POST['habitacion'], $_POST['valor'], $_POST['personas']);
	
	function NuevoPersona($nombre, $apellido, $dni, $tiempo, $habitacion,$valor,$personas)
	{
		include 'conexion.php';
		$sentencia= "INSERT INTO tblhotel(nombre,apellido,dni,tiempo,habitacion,valor,personas) VALUES ('".$nombre."', '".$apellido."', '".$dni."', '".$tiempo."','".$habitacion."', '".$valor."', '".$personas."') ";
		$conexion->query($sentencia) or die ("Error al ingresar los datos".mysqli_error($conexion));
	}
?>

<script type="text/javascript">
	alert("REGISTRO COMPLETO");
	window.location.href='panel.php';
</script>