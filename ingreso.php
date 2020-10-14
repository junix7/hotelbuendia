<html>
  <script type="text/javascript">
      function go(){
      if (document.form.password.value=='admin' && document.form.login.value=='1234'){ 
        document.form.submit(); 
      } 
      else if (document.form.password.value=='' && document.form.login.value==''){ 
        alert("Complete el formulario"); 
        document.form.submit(); 
       }
      else{ 
        alert("Ingreso incorrecto de usuario o password"); 
      } 
    } 
  </script> 
    <!--importando el header -->
    <?php include ('header.php'); ?>
  <body>
    <div class="parrafo">
      <h1>login</h1>
        <form name=form action="panel.php" class="form__group">
          <label>User:</label><INPUT type="text" name="login" required><br>
          <label>Password:</label><INPUT type="password" name="password" required>
          <br>
          <INPUT onclick=go() type=button value=Acceder class="btn__nuevo">
        </form> 
    </div>
  </div>
  </main>
      <!--importando el footer -->
      <?php include ('footer.php'); ?>
  </body>
  </html>
    