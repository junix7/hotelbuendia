<html>

  <SCRIPT  language=JavaScript> 
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
  </SCRIPT> 
    <!--importando el header -->
    <?php include ('header.php'); ?>
  <body>
    <div class="parrafo">
      <h1>login</h1>
        <FORM name=form action="panel.php" >
          User:  <br>  <INPUT type="text" name="login" required> <br><br>
          Password:<br> <INPUT type="password" name="password" required> <br><br>
          <INPUT onclick=go() type=button value=Acceder class="btn btn__nuevo">
        </FORM> 
    </div>
  </div>
  </main>
      <!--importando el footer -->
      <?php include ('footer.php'); ?>
  </body>
  </html>
    