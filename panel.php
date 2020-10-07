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

      <p>Bienvenido a el sistema  de control y alquiler de reservaciones del hotel Buen Tiempo</p>

      <h1>REGISTROS</h1>
      <div id="container" style="overflow-x:auto;">
    <table style="margin: auto; width: 800px; border-collapse: separate; border-spacing: 10px 5px;">
      <thead>
        <th>ID</th>
        <th>NOMBRES</th>
        <th>APELLIDOS</th>
        <th>DNI</th>
        <th>TIEMPO</th>
        <th>HABITACION</th>
        <th>VALOR</th>
        <th>PERSONAS</th>
        

        
        <th> <a href="nuevo_prod1.php"> <button type="button" class="btn btn__nuevo">NUEVO</button> </a> </th>
        <th> <a href="reporte.php"> <button type="button" class="btn btn__nuevo">IMPRIMIR</button> </a> </th>
      </thead>

      <?php
        include "conexion.php";
        $sentecia="SELECT * FROM tblhotel";
        $resultado= $conexion->query($sentecia) or die (mysqli_error($conexion));
        while($fila=$resultado->fetch_assoc())
        {
          echo "<tr>";
            echo "<td>"; echo $fila['id']; echo "</td>";
            echo "<td>"; echo $fila['nombre']; echo "</td>";
            echo "<td>"; echo $fila['apellido']; echo "</td>";  
            echo "<td>"; echo $fila['dni']; echo "</td>";  
            echo "<td>"; echo $fila['tiempo']; echo "</td>";  
            echo "<td>"; echo $fila['habitacion']; echo "</td>";  
                        echo "<td>"; echo $fila['valor']; echo "</td>";  
                                    echo "<td>"; echo $fila['personas']; echo "</td>";  
            echo "<td><a href='modif_prod1.php?id=".$fila['id']."'> <button type='button' class='btn btn__editar'>EDITAR</button> </a></td>";
            echo " <td><a href='eliminar_prod.php?id=".$fila['id']."'> <button type='button' class='btn btn__danger'>ELIMINAR</button> </a></td>";
          echo "</tr>";
        }
      ?>

     
      
    </table>
  </div>




  </div>

<br>




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
    