<!doctype html>
<html lang="es">
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="CSS/plantilla.css">
  </head>

  <body>

      <div class= "cab">
      <div class="imglogo">
      <img src="images/logo.png">
      </div>
      <div class= "margen"> 
      <h1>Informes</h1>
      </div>
      </div> 
 

      <center>
      <?php
        
        echo "<form name=cafeForm action=cafe.php method=post>";

                echo "<input  type=image src=images/BtnInfoComplet.svg name=infocompleta />";
                echo "<br>";
     
                echo "<input type=image src=images/BtnInfoFumad.svg name=fumadores /> ";
                echo "<br>";

           echo "<input type=image src=images/BtnInfoAlqui.svg name=alquiler /> ";
           echo "<br>";
   
        echo "</form>";

        echo "<a href='index.php'>";
        echo" <button type='button'class='button' >";
        echo "<span class='button__icon'><img src='images/back-sharp.svg'width=25px height=25px ></span>";
        echo "<span class='button__text'>Regresar</span>";
        echo" </button>";
        echo "</a>";
      ?>
    </center>
  </body>
</html>