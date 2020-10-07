<?php
  include "conexion.php";
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


      <span> <h1>REGISTRO  NUEVO </h1> </span>
      <br>
    <form action="nuevo_prod2.php" method="POST" class="form-group" name="f1" id="f1">
      
       
      <label>NOMBRES: </label>&nbsp;&nbsp;&nbsp;&nbsp;
      <input type="text" id="nombre" name="nombre" required><br>
      
      <label>APELLIDOS: </label>&nbsp;&nbsp;
      <input type="text" id="apellido" name="apellido" required><br>

            <label>DNI: </label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
      <input type="text" id="dni" name="dni" required><br>

            <label>TIEMPO: </label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;


             

<select id="tiempo" onchange="ShowSelected();" name="tiempo"> 
                    <option value="12">12</option> 
                    <option value="24">24</option> 
                </select> 
               



     <br>

      <label>HABITACION: </label>

          <select id="habitacion" name="habitacion" required>
                <option value="sencilla">sencilla</option>
                <option value="doble">doble</option>
              </select>
<br>



        <label>VALOR: </label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;

         
      <input type="text" id="valor" name="valor" ><br>


      <label>PERSONAS: </label>&nbsp;&nbsp;
      <input type="text" id="personas" name="personas" required><br>
      
      <br>
      <button type="submit" class="btn btn__nuevo">SAVE</button>

     </form>
   
  <br><br>
  <br><br>
  <br><br>
  <br><br>
  <br><br>
  <br><br>

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
    