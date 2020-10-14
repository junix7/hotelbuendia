<?php
  
  $consulta=ConsultarPersona($_GET['id']);

  function ConsultarPersona( $id )
  {
   include 'conexion.php';
   $sentencia="SELECT * FROM tblhotel WHERE id='".$id."' ";
   $resultado= $conexion->query($sentencia) or die ("Error al consultar persona".mysqli_error($conexion)); 
   $fila=$resultado->fetch_assoc();

   return [
    $fila['id'],
    $fila['nombre'],
    $fila['apellido'],
    $fila['dni'],
    $fila['tiempo'],
    $fila['habitacion'],
    $fila['valor'],
    $fila['personas']
   ];
  }
?>
<html>
<!--importando el header -->
      <?php include ('header.php'); ?>
      <body>
  <div class="parrafo">

     <h1>EDITAR REGISTRO</h1>
    <form action="modif_prod2.php" method="POST" style="border-collapse: separate; border-spacing: 10px 5px;" class="form__group">
      <input type="hidden" name="id"  value="<?php echo $_GET['id']?>">
      <label> </label>
      <input type="hidden" id="id" name="id" value="<?php echo $consulta[0] ?>" disable><br>
      <label>Nombre: </label>
      <input type="text" id="nombre" name="nombre" value="<?php echo $consulta[1] ?>"><br>
      <label>Apellido: </label>
      <input type="text" id="apellido" name="apellido" value="<?php echo $consulta[2] ?>"><br>
      <label>DNI: </label>
      <input type="text" id="dni" name="dni" value="<?php echo $consulta[3] ?>"><br>
      <label>TIEMPO: </label>
      <input type="text" id="tiempo" name="tiempo" value="<?php echo $consulta[4] ?>"><br>
      <label>HABITACION: </label>
      <input type="text" id="habitacion" name="habitacion" value="<?php echo $consulta[5] ?>"><br>
      <label>VALOR: </label>
      <input type="text" id="valor" name="valor" value="<?php echo $consulta[6] ?>"><br>
      <label>PERSONAS: </label>
      <input type="text" id="personas" name="personas" value="<?php echo $consulta[7] ?>"><br>
      <br>
      <button type="submit" class="btn__nuevo">SAVE</button>
     </form>
      </div>
      </main>
      <!--importando el footer -->
      <?php include ('footer.php'); ?>
  </body>
  </html>
    