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
       <h1>Registro de Clientes</h1>
       </div>
       </div> 
    
    <center>
      <?php
        echo'<div class="regis">';
        echo "<form name=cafeForm action=cafe.php method=post>";

          echo" <div class= sep>";
              echo "Usuario: ";
                echo "<input type=text name=nombre id=nombre placeholder='Nombre'><br>";

          echo"</div>";


           echo" <div class= sep>";
              echo "Fumador: ";
                echo "<select name=fumador id=fumador>";
                  echo " <option value=''> - Seleccionar - ";
                  echo "<option value=si>Sí";
                  echo "<option value=no>No";
                echo "<select> <br>";
                echo" </div>";
    
           echo" <div class= sep>";
                echo "<h7> Cantidad Horas: </h7> ";
                echo "<input type=number max=2 min=1 name=cantidad_hora id=cantidad_hora>  <br>";
                echo" </div>";


           echo" <div class= sep>";
                echo "<h7> ID Máquina: </h7> ";
                /*echo "<input type=text name=maquina_id id=maquina_id><br>";*/
                echo "<select name=maquina_id id=maquina_id><br>";
                echo "<option value=''> - Seleccionar -";
                echo "<option value= 1>1";
                echo "<option value= 2>2";
                echo "<option value= 3>3";
                echo "<option value= 4>4";
                echo "<option value= 5>5";
                echo "<option value= 6>6";
                echo "<option value= 7>7";
                echo "<option value= 8>8";
                echo "<option value= 9>9";
                echo "<option value= 10>10";
                echo "<select>";

           echo" </div>";
 
      echo"<input <input type=image src=images/guardar3.svg name=save>";

        echo "</form>";

        echo"</div><br>";
       
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