<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bombo</title>
</head>
<body>
    <?php
        //Variables
        $bolasSacadas = array();
        $bola;


        while(count($bolasSacadas)<60){
            //Generamos número aleatorio 1-60
            $bola = rand(1,60);

            //Comprobamos que no esté en el array
            if(!in_array($bola, $bolasSacadas)){
                $bolasSacadas[] = $bola;
            }
        }
        var_dump($bolasSacadas);
    ?>
</body>
</html>