<html>
<head>
 <title>Hotel Buen Día!</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" type="text/css" href="estilos.css">
  <link href="https://fonts.googleapis.com/css2?family=Piazzolla&family=Sansita+Swashed:wght@500&display=swap" rel="stylesheet">

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

  </head>
  <body>
    <!--importando el header -->
      <?php include ('header.php'); ?>
  <div class="parrafo">
<h1>login</h1>

    <FORM name=form action="panel.php" >
    User:  <br>  <INPUT type="text" name="login" required> <br><br>
    Password:<br> <INPUT type="password" name="password" required> <br><br>
    <INPUT onclick=go() type=button value=Acceder class="btn btn__nuevo">

</FORM> 

<br><br>
<br><br>

    </div>
<br>

      </div>
      </main>
       <!--Botón para subir-->
  <div class="up"><a href="#header">^</a></div>
      <!--importando el footer -->
      <?php include ('footer.php'); ?>
  </body>
  </html>
    