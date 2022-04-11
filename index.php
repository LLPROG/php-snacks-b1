<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>snacks PHP</title>
</head>
<body>
    <!-- snake 1 -->
    <?php
        /*
        Creiamo un array contenente le partite di basket di un’ipotetica tappa del calendario. Ogni array avrà una squadra di casa e una squadra ospite, punti fatti dalla squadra di casa e punti fatti dalla squadra ospite. Stampiamo a schermo tutte le partite con questo schema.
        Olimpia Milano - Cantù | 55-60

        */

        /* data snack
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
        */
    ?>
    <!-- fine data PHP -->

    <!-- stampa partite 

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
    -->





    <!-- snake 2 
    <?php
        /*
        Passare come parametri GET name, mail e age e verificare (cercando i metodi che non conosciamo nella documentazione) che name sia più lungo di 3 caratteri, che mail contenga un punto e una chiocciola e che age sia un numero. Se tutto è ok stampare “Accesso riuscito”, altrimenti “Accesso negato”
        */


        // data snack
        // $name = $_GET["name"] ?? '';
        // $age = $_GET["age"] ?? '';
        // $email = $_GET["email"] ?? '';

        // $string_message = '';

        // if (strlen($name) > 3 && strpos($email, "@") !== false && strpos($email, ".") !== false && is_numeric($age))  {
        //     $string_message = "<h1 style='color: green;'>Accesso riuscito</h1>";
        // } else {
        //     $string_message = "<h1 style='color: red;'>Accesso NON riuscito</h1>";
        // }
    ?>
        <form action="" method="get">
            <label for="name">
                <input type="text" name="name" placeholder="inserisci il tuo nome">
            </label>
            <label for="age">
                <input type="text" name="age" placeholder="inserisci la tua età">
            </label>
            <label for="email">
                <input type="text" name="email" placeholder="inserisci la tua email">
            </label>
            <button>
                verifica
            </button>
        </form>

        <?php
            // echo $string_message
        ?>
        --> 

     
    
    



    <!-- snake 4 
    <?php
        /*
        Creare un array con 15 numeri casuali, tenendo conto che l’array non dovrà contenere lo stesso numero più di una volta
        */

        // data snack
        // $min = 1;
        // $max = 100000;
        // $arr_random = array();   
        
        // echo var_dump($random_number); // resta commentato

        // while (count($arr_random) < 15) {
        //     $random_number = random_int($min, $max);
        //     if (in_array($random_number, $arr_random) === false) {
        //         $arr_random[] = $random_number;
        //     }
        // }
    ?>

    <h1><?php 
        // echo var_dump($arr_random);
    ?></h1>
    -->




    
    <!-- snake 5 -->
    <?php
        /*
        Prendere un paragrafo abbastanza lungo, contenente diverse frasi. Prendere il paragrafo e suddividerlo in tanti paragrafi. Ogni punto un nuovo paragrafo.
        */

        // data snack
        $string = "Prendere un paragrafo abbastanza lungo, contenente diverse frasi. Prendere il paragrafo e suddividerlo in tanti paragrafi. Ogni punto un nuovo paragrafo.";
        
    ?>

    <?php
        echo "<h1>stringa originale</h1>";
        echo "<h2>$string</h2>";

        $new_arr = explode(".", $string);
        for ($i=0; $i < count($new_arr) ; $i++) { 
            echo "<h3>$new_arr[$i]</h3>";
        }
    ?>
    
    

</body>
</html>