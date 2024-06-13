<!doctype html>
<html lang="es">
  <head>
    <meta charset="utf-8">
  </head>

  <body>
      <?php
        class Cliente
        {
            const alquiler = 0.75;
            public $nombre;
            public $fumador;
            public $cantidad_hora;
            public $maquina_id;

            function __construct($nombre, $fumador, $cantidad_hora, $maquina_id)
            {
                $this->nombre = $nombre;
                $this->fumador = $fumador;
                $this->cantidad_hora = $cantidad_hora;
                $this->maquina_id = $maquina_id;
            }
			
			public function getID(){
		return $this->maquina_id;
	}

            public function reg_datos() {
                $infocsv = fopen("info.csv", "a");
                $form = $this->nombre.",".$this->maquina_id.",".$this->fumador.",".$this->cantidad_hora;
                fputs($infocsv, $form.PHP_EOL);
                fclose($infocsv);
                
                if($this->fumador == "si") {
                    $fumadorescsv = fopen("fumadores.csv", "a");
                    $form = $this->nombre.",".$this->fumador;
                    fputs($fumadorescsv, $form.PHP_EOL);
                    fclose($fumadorescsv);
                }
                
                $alquilercsv = fopen("alquiler.csv", "a");
                $form = $this->cantidad_hora;
                fputs($alquilercsv, $form.PHP_EOL);
                fclose($alquilercsv);
            }

            public function consultaInfo() {
                $fila=0;
                if(file_exists("alquiler.csv")) {
                    $alquilercsv = fopen("alquiler.csv", "r");
                    while (($form = fgetcsv($alquilercsv, 0, ",")) == true) {
                        $num =count($form);
                        for($columna = 0; $columna<$num; $columna++) {
                            $datos[$fila][$columna] = $form[$columna];
                        }
                        $fila++; }
						
					fclose($alquilercsv);
                    if (isset($datos)){ return $datos;}
                    }
                    else { 
                    echo"<div class='aviso'>";
                    echo "<p>Por favor, introduce datos al archivo. . .</p>";
                    echo"<br>";
                    echo "</div>";
                       
                }
            }

            public function consultaFuma() {
                $fila=0;
                if(file_exists("fumadores.csv")) {
                    $fumadorescsv = fopen("fumadores.csv", "r");
                    while (($form = fgetcsv($fumadorescsv, 0, ",")) == true) {
                        $num =count($form);
                        for($columna = 0; $columna<$num; $columna++) {
                            $datos[$fila][$columna] = $form[$columna];
                        }
                        $fila++;
                    }
					 fclose($fumadorescsv);
                    if (isset($datos)){return $datos;}
					
					}
                   
                
                else {
                    echo"<div class='aviso'>";
                    echo "<p>Aún no se han registrado fumadores</p>";
                    echo"<br>";
                    echo "</div>";
                }
            }

            public function consultaCliente() {
                $fila=0;
                if(file_exists("info.csv")) {
                    $infocsv = fopen("info.csv", "r");
                    while (($form = fgetcsv($infocsv, 0, ",")) == true) {
                        $num =count($form);
                        for($columna = 0; $columna<$num; $columna++) {
                            $datos[$fila][$columna] = $form[$columna];
                        }
                        $fila++;
                    }
					fclose($infocsv);
                    if (isset($datos)){return $datos;}
					}
                    
                
                else {
                    
                    echo"<div class='aviso'>";
                    echo"<p>El registro inferior se encuentra vacío.</p>";
                    echo"<br>";
                    echo"</div>";
                 
                }
            }
			
			public function validarMaquina(){
		$fila = 0;
		$valid = False;
		
		if(file_exists("info.csv")) {
		$infocsv = fopen("info.csv","r");
		while(($form = fgetcsv($infocsv,0,","))==true){
			$num=count($form);
		for ($columna=1; $columna<$num; $columna++){
					
if ($form[$columna]==self::getID()){
	$valid= True;	
}
				
		}	
		$fila++;
			

}
		fclose($infocsv);
		return $valid;
		
		}else{
			$valid= False;
			
		}
		
	}
        }

      ?>
  </body>
</html>