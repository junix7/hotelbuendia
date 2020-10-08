<html>
<head>
  <title>Hotel Buen Tiempo</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" type="text/css" href="estilos.css">


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
  
        <img src="images/portada2-800.jpg" class="img-banner2">
    
    <br>
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
    