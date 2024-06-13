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
       <h1>Reportes</h1>
       </div>
       </div> 
     
    <center>
      <?php include("Cliente.php");

        @$botonsa=$_POST["save_x"];
        @$botoninfo=$_POST["infocompleta_x"];
        @$botonalq=$_POST["alquiler_x"];
        @$botonfu=$_POST["fumadores_x"];

        if(@$botonsa) {
          $nombre = $_POST["nombre"];
          $fumador = $_POST["fumador"];
          $cantidad_hora = $_POST["cantidad_hora"];
          $maquina_id = $_POST["maquina_id"];

          $cliente = new Cliente("", "", "", $maquina_id);
          $valid = $cliente->validarMaquina();
          if($nombre != NULL and $fumador != NULL and $cantidad_hora != NULL and $maquina_id != NULL ) {
			  if($valid == False){
				$cliente = new Cliente($nombre, $fumador, $cantidad_hora, $maquina_id);
            $cliente->reg_datos();
         echo"   <div class='regis'>";
         echo "<p>¡Se registraron los datos correctamente!</p>";
         //echo"<br>";
         echo "</div>";  	  
			  }else{
				echo"<div class='regis'>";
            echo "<p>¡La máquina que intentó registrar ya está en uso!</p>";
            //echo"<br>";
            echo "</div>";  
				  
			  }
            
          }else{
			  echo"<div class='regis'>";
            echo "<p>¡Hacen falta campos por llenar! Los datos no han sido registrados.</p>";
            //echo"<br>";
            echo "</div>";
           
			  
		  }

        echo "<a href='registro.php'>";
        echo" <button type='button'class='button' >";
        echo "<span class='button__icon'><img src='images/back-sharp.svg'width=25px height=25px ></span>";
        echo "<span class='button__text'>Regresar</span>";
        echo" </button>";
        echo "</a>";
        }
        elseif(@$botonalq) {
          echo "<h1>Reporte de Alquiler</h1>";

          $cliente = new Cliente("", "", "", "");
          $datos = array();
          $datos = $cliente->consultaInfo();
          $total = 0;
          $check = 0;

          if($datos > 0) {

            for($fila = 0; $fila<count($datos); $fila++) {
              if($fila<10){
                foreach($datos[$fila] as $valor) {
                  $total += $valor * 0.75;
                }
              }
            }

            echo"<div class='regis'>";
            echo "<p>Alquiler Generado: ";
            echo "B/." . strval(round($total, 2));
            echo "</p></br>";
            echo"</div>";

          }

          echo "<a href='informes.php'>";
        echo" <button type='button'class='button' >";
        echo "<span class='button__icon'><img src='images/back-sharp.svg'width=25px height=25px ></span>";
        echo "<span class='button__text'>Regresar</span>";
        echo" </button>";
        echo "</a>";
        }
        elseif(@$botonfu) {
          echo "<h1>Reporte de Fumadores</h1>";
          $cliente = new Cliente("", "", "", "");
          $datos = array();
          $datos = $cliente->consultaFuma();
          $check = 0;
          $cont = 0;

          if($datos > 0) {

            for($fila = 0; $fila<count($datos); $fila++) {
              if($fila<10){
                foreach($datos[$fila] as $valor) {
                  if($valor == "si"){
                    $cont += 1;
                  }
                }
              }
            }

            echo"<div class='regis'>";
            echo "<p>Cantidad de Fumadores: ";
            echo $cont;
            echo "</P>";
            echo"</div>"; 
            

          }
          echo "<a href='informes.php'>";
        echo" <button type='button'class='button' >";
        echo "<span class='button__icon'><img src='images/back-sharp.svg'width=25px height=25px ></span>";
        echo "<span class='button__text'>Regresar</span>";
        echo" </button>";
        echo "</a>";
        }
        elseif(@$botoninfo) {
          echo "<h1>Reporte de Clientes Completo</h1>";

          $cliente = new Cliente("", "", "", "");
          $datos = array();
          $datos = $cliente->consultaCliente();
          $check = 0;
        
          echo"<div class='tab'>";
          echo "<table>";
          echo "<tr>";
              echo "<th>";
                echo " Nombre ";
              echo "</th>";

              echo "<th>";
                echo " Máquina ID ";
              echo "</th>";

              echo "<th>";
                echo " Fumador ";
              echo "</th>";

              echo "<th>";
                echo " Horas de Alquiler ";
              echo "</th>";
          echo "</tr>";

          if($datos > 0) {

            for($fila = 0; $fila<count($datos); $fila++) {
              if($fila<10){
                echo"<tr>";
                foreach($datos[$fila] as $valor) {
                  echo "<td>".$valor. "</td>";
                }
                echo"</tr>";
              }
            }
          } 
          echo "</table>";
          echo"</div>";

          echo "<a href='informes.php'>";
          echo" <button type='button'class='button' >";
          echo "<span class='button__icon'><img src='images/back-sharp.svg'width=25px height=25px ></span>";
          echo "<span class='button__text'>Regresar</span>";
          echo" </button>";
          echo "</a>";
        }
        else {
          echo"<div class='regis'>";
          echo "<p>Vaya. . . no encontramos este reporte.</p>";
          echo"</div><br>";
          echo "<a href='informes.php'>";
        echo" <button type='button'class='button' >";
        echo "<span class='button__icon'><img src='images/back-sharp.svg'width=25px height=25px ></span>";
        echo "<span class='button__text'>Regresar</span>";
        echo" </button>";
        echo "</a>";
        }
      ?>
     
    </center>
  </body>
</html>