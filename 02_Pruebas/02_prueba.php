

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Jugador+Bombo+Descarte</title>
</head>
<body>
  <?php
  /*Prueba 2: 
  Null pasa a ser 0
  Hago array $cartonesGanadores para los empates
  Para probarlo, pongo yo misma los números de dos cartones iguales */
    //------ 1. BOMBO

    $jugador1 = [
    "carton1A" => [
        [1, 2, 3, 4, 5, 6, 7]
    ],
    "carton1B" => [
        [1, 2, 3, 4, 5, 6, 7]
    ],
    "carton1C" => [
        [8, 9, 10, 11, 12, 13, 14]
    ]
];

// Controlamos las bolas para que salgan en este orden
$bolasSacadas = [1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15];
   /* $bolasSacadas = array();
   
   while(count($bolasSacadas) < 60){
        $bola = rand(1, 60);


        if(!in_array($bola, $bolasSacadas)){
            $bolasSacadas[] = $bola;
        }
    }


    //------ 2. JUGADOR Y CARTONES
    $jugador1 = [
        "carton1A" => [],
        "carton1B" => [],
        "carton1C" => [],
    ];


    // Generamos 15 números y 6 nulos
    $numeros = [];
    for ($i = 0; $i < 21; $i++) {
        if ($i < 15) {
            $numeros[] = rand(1, 60);
        } else {
            $numeros[] = 0;
        }
    }


    // Llenamos los cartones del jugador 1 con array_chunk
    shuffle($numeros);
    $jugador1["carton1A"] = array_chunk($numeros, 7);
    shuffle($numeros);
    $jugador1["carton1B"] = array_chunk($numeros, 7);
    shuffle($numeros);
    $jugador1["carton1C"] = array_chunk($numeros, 7);*/


    echo "Cartones iniciales del Jugador 1:<br>";
    echo "<pre>";//solo para visualizarlo
    var_dump($jugador1);
    echo "</pre>";


    //Cartón original
    $cartonOriginal = $jugador1;
    //------ 3. LÓGICA DE JUEGO
    $bingo = false;
    $cartonesGanadores = [];//guardar cartones ganadores por si gana mas de uno


    foreach ($bolasSacadas as $bolaActual) {
        echo "La bola que ha salido es: $bolaActual<br>";


        foreach ($jugador1 as $nombreCarton => $carton) {
            // Para que cuando un carton se haya guardado en ganadores, se lo salte
           if (in_array($nombreCarton, $cartonesGanadores)) {
                continue;
            }
            $quedanNumeros = false;


            foreach ($carton as $numeroFila => $fila) {
                foreach ($fila as $numeroColumna => $valor) {
                    if ($valor === $bolaActual) {
                        // Tachamos el número
                        $jugador1[$nombreCarton][$numeroFila][$numeroColumna] = 0;
                    } elseif ($valor !== 0) {
                        // Sigue habiendo algún número sin tachar
                        $quedanNumeros = true;
                    }
                }
            }


            // Si no queda ninguno, este cartón ha hecho Bingo
            if (!$quedanNumeros) {
                echo "Bingo! en $nombreCarton<br>";
                $bingo = true;
                $cartonesGanadores[] = $nombreCarton;
            }
        }
    }
    /*echo "CARTÓN ORIGINAL:<br>";
    var_dump($cartonOriginal);*/
    echo "Cartón final:<br>";
    echo "<pre>";
    var_dump($jugador1);
    echo "</pre>";
    ?>
</body>
</html>

