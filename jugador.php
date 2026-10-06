<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Jugadores con Carton</title>
</head>
<body>
    <?php

    //Genero jugadores y cartones
    $jugador1 = [
        "carton1A" => [],
        "carton1B" => [],
        "carton1C" => [],
    ];
    $jugador2 = [
        "carton2A" => [],
        "carton2B" => [],
        "carton2C" => [],
    ];
    $jugador3 = [
        "carton3A" => [],
        "carton3B" => [],
        "carton3C" => [],
    ];
    $jugador4 = [
        "carton4A" => [],
        "carton4B" => [],
        "carton4C" => [],
    ];
    //Generamos los siguientes bucles para llenar 15 espacios de números y
    // 6 espacios de null
    $numeros = [];

    for ($i = 0; $i < 21; $i++) {
        if ($i < 15) {
            $numeros[] = rand(1, 60);
        } else {
            $numeros[] = null;
        }
    }

    //Jugador 1
    shuffle($numeros); //Mezclamos los números
    $jugador1["carton1A"] = array_chunk($numeros, 7);//lenamos los cartones partiéndolos en columnas de 7
    shuffle($numeros);
    $jugador1["carton1B"] = array_chunk($numeros, 7);
    shuffle($numeros);
    $jugador1["carton1C"] = array_chunk($numeros, 7);

    //Jugador 2

    shuffle($numeros);
    $jugador2["carton2A"] = array_chunk($numeros, 7);
    shuffle($numeros);
    $jugador2["carton2B"] = array_chunk($numeros, 7);
    shuffle($numeros);
    $jugador2["carton2C"] = array_chunk($numeros, 7);
    shuffle($numeros);

    //Jugador 3

    shuffle($numeros);
    $jugador3["carton3A"] = array_chunk($numeros, 7);
    shuffle($numeros);
    $jugador3["carton3B"] = array_chunk($numeros, 7);
    shuffle($numeros);
    $jugador3["carton3C"] = array_chunk($numeros, 7);
    shuffle($numeros);

    //Jugador 4

    shuffle($numeros);
    $jugador4["carton4A"] = array_chunk($numeros, 7);
    shuffle($numeros);
    $jugador4["carton4B"] = array_chunk($numeros, 7);
    shuffle($numeros);
    $jugador4["carton4C"] = array_chunk($numeros, 7);
    shuffle($numeros);

    //Visualizamos un jugador
    var_dump($jugador1);

?>
</body>
</html>