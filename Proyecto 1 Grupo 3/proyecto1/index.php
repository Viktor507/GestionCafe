<!doctype html>
<html lang="es">
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="CSS/plantilla.css" type="text/css">
  </head>

  <body>
        
      <div class= "cab">
       <div class="imglogo">
       <img src="images/logo.png">
       </div>
       <div class= "margen"> 
       <h1>Café Internet</h1>
       </div>
       </div> 

    <center>
      <?php
            
         echo"<div class='tit'>";
         echo"<h2>Proyecto No.1</h2>";
         //echo"<br>";
         echo "</div>";

     // boton Registro
     echo "<a href='registro.php'>";
     echo" <button type='button'class='button' >";
     echo "<span class='button__icon'><img src='images/registro.svg'width=25px height=25px ></span>";
     echo "<span class='button__text'>Registro de Clientes</span>";
     echo" </button>";
     echo "</a>";
     echo "<br>";
     // boton Registro
       

       // boton informes
       echo "<a href='informes.php'>";
      echo" <button type='button'class='button' >";
      echo "<span class='button__icon'><img src='images/informes.svg'width=25px height=25px ></span>";
      echo "<span class='button__text'>Informes</span>";
      echo" </button>";
      echo "</a>";
    
  
           
      ?>
    </center>
  </body>
</html>