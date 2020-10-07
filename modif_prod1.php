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
<head>
  <title>Hotel Buen Tiempo</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" type="text/css" href="estilos.css">

  </head>
  <body>
    <header class="header">
      <div class="container logo-nav-container">
        Hotel Buen Tiempo
        <a href="#" class="logo"></a>
        <span class="menu-icon">&#8801;</span>
                <nav class="navigation">
          <ul class="show">
          <li><a href="index.php">INICIO</a></li>
          <li><a href="ingreso.php">INGRESO</a></li>
          <li><a href="faq.php">FAQ</a></li>
        </ul>
        </nav>
      </div>
    </header>
    <main class="main">
  
        <img src="images/portada.jpg" class="img-banner2">
    
    <br>
  <div class="parrafo">


    <span> <h1>EDITAR REGISTRO</h1> </span>
      <br>
    <form action="modif_prod2.php" method="POST" style="border-collapse: separate; border-spacing: 10px 5px;">
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
      <button type="submit" class="btn btn-success">SAVE</button>
     </form>


<br><br><br><br><br><br><br><br><br><br><br><br><br><br>


      </div>
      </main>
      <footer class="footer" >
        <div class="contiene" >
          <p>
           
Hotel Buen Tiempo          </p>
        </div>
      </footer>
      <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
      <script src="script.js"></script>
  </body>
  </html>
    