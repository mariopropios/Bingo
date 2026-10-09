<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Jugador+Bombo+Descarte</title>
</head>
<body>
    <?php
    //------ 1. BOMBO
    $bolasSacadas = array();
    
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
            $numeros[] = null;
        }
    }

    // Llenamos los cartones del jugador 1 con array_chunk
    shuffle($numeros);
    $jugador1["carton1A"] = array_chunk($numeros, 7);
    shuffle($numeros);
    $jugador1["carton1B"] = array_chunk($numeros, 7);
    shuffle($numeros);
    $jugador1["carton1C"] = array_chunk($numeros, 7);

    echo "Cartones iniciales del Jugador 1:<br>";
    //var_dump($jugador1);
    
    //------ 3. LÓGICA DE JUEGO
    $bingo = false;

    foreach ($bolasSacadas as $bolaActual) {
        echo "La bola que ha salido es: $bolaActual<br>";

        foreach ($jugador1 as $nombreCarton => $carton) {
            $quedanNumeros = false;

            foreach ($carton as $numeroFila => $fila) {
                foreach ($fila as $numeroColumna => $valor) {
                    if ($valor === $bolaActual) {
                        // Tachamos el número
                        $jugador1[$nombreCarton][$numeroFila][$numeroColumna] = null;
                    } elseif ($valor !== null) {
                        // Sigue habiendo algún número sin tachar
                        $quedanNumeros = true;
                    }
                }
            }

            // Si no queda ninguno, este cartón ha hecho Bingo
            if (!$quedanNumeros) {
                echo "¡BINGO en $nombreCarton<br>";
                $bingo = true;
                break 2;   // sale del bucle de cartones y del de bolas
            }
        }
    }

    var_dump($jugador1);
    ?>
</body>
</html>