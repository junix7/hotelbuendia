  <?php
    include "conexion.php";
  ?>
 <!--importando el header -->
      <?php include ('header.php'); ?>
  <body>

  <div class="parrafo">
      <span> <h1>REGISTRO  NUEVO </h1> </span>
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
    </div>
      </div>
      </main>
      <?php include ('footer.php'); ?>
  </body>
  </html>
    