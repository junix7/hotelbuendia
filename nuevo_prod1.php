  <?php
    include "conexion.php";
  ?>
 <!--importando el header -->
      <?php include ('header.php'); ?>
  <body>

  <div class="parrafo">
      <span> <h1>REGISTRO  NUEVO </h1> </span>
    <form action="nuevo_prod2.php" method="POST" class="form__group" name="f1" id="f1">
      <label>NOMBRES: </label>
      <input type="text" id="nombre" name="nombre" class="input__text" required>
      <label>APELLIDOS: </label>
      <input type="text" id="apellido" name="apellido" required>
      <label>DNI: </label>
      <input type="text" id="dni" name="dni" required>
      <label>TIEMPO: </label>
      <select id="tiempo" onchange="ShowSelected();" name="tiempo"> 
        <option value="12">12</option> 
        <option value="24">24</option> 
      </select> 
      <label>HABITACION: </label>
          <select id="habitacion" name="habitacion" required>
              <option value="sencilla">sencilla</option>
              <option value="doble">doble</option>
          </select>
        <label>VALOR: </label>
      <input type="text" id="valor" name="valor" ><br>
      <label>PERSONAS: </label>
      <input type="text" id="personas" name="personas" required><br>
      <button type="submit" class="btn__nuevo">SAVE</button>
     </form>
    </div>
      </div>
      </main>
      <?php include ('footer.php'); ?>
  </body>
  </html>
    