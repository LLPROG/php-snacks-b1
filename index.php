<?php
    /*



    

    
    Snack 4
    Creare un array con 15 numeri casuali, tenendo conto che l’array non dovrà contenere lo stesso numero più di una volta


    Snack 5
    Prendere un paragrafo abbastanza lungo, contenente diverse frasi. Prendere il paragrafo e suddividerlo in tanti paragrafi. Ogni punto un nuovo paragrafo.
    */
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>snacks PHP</title>
</head>
<body>
    <?php
    /*
        Snack 1
        Creiamo un array contenente le partite di basket di un’ipotetica tappa del calendario. Ogni array avrà una squadra di casa e una squadra ospite, punti fatti dalla squadra di casa e punti fatti dalla squadra ospite. Stampiamo a schermo tutte le partite con questo schema.
        Olimpia Milano - Cantù | 55-60

    */

        // data snack
        $arr_partite = [
            [
                "casa" => [
                    "nome" => "milano",
                    "punteggio" => 20
                ],
                "ospite" => [
                    "nome" => "torino",
                    "punteggio" => 40
                ],
            ],
            [
                "casa" => [
                    "nome" => "venezia",
                    "punteggio" => 35
                ],
                "ospite" => [
                    "nome" => "cagliari",
                    "punteggio" => 22
                ],
            ],
            [
                "casa" => [
                    "nome" => "roma",
                    "punteggio" => 5
                ],
                "ospite" => [
                    "nome" => "viterbo",
                    "punteggio" => 90
                ],
            ]
        ];
    ?>
    <!-- fine data PHP -->

    <!-- stampa partite -->

        <ul>
            <?php 
                for ($i=0; $i < count($arr_partite); $i++) { ?>
                        
                <li>
                    <span><?= $arr_partite[$i]["casa"]["nome"]?></span> -
                    <span><?= $arr_partite[$i]["ospite"]["nome"]?></span> |
                    <span><?= $arr_partite[$i]["casa"]["punteggio"]?></span> -
                    <span><?= $arr_partite[$i]["ospite"]["punteggio"]?></span> |
                </li>

            <?php } ?>
        </ul>
    

    <?php
    /*
        Snack 2
        Passare come parametri GET name, mail e age e verificare (cercando i metodi che non conosciamo nella documentazione) che name sia più lungo di 3 caratteri, che mail contenga un punto e una chiocciola e che age sia un numero. Se tutto è ok stampare “Accesso riuscito”, altrimenti “Accesso negato”
    */


        // data snack
    ?>
</body>
</html>