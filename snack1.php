<!-- ## Snack 1
Creiamo un array contenente le partite di basket di un’ipotetica tappa del calendario. 
Ogni array avrà una squadra di casa e una squadra ospite, punti fatti dalla squadra di casa 
e punti fatti dalla squadra ospite. Stampiamo a schermo tutte le partite con questo schema.
Olimpia Milano - Cantù | 55-60 -->


<?php
    // inserire qui gli array (se necessario)
    $partite = [
        [
            'squadraCasa' => 'Olimpia Milano',
            'squadraOspite' => 'Cantù',
            'puntiCasa' => 55,
            'puntiOspite' => 60,
        ],
        [
            'squadraCasa' => 'Virtus Bologna',
            'squadraOspite' => 'Brescia',
            'puntiCasa' => 79,
            'puntiOspite' => 57,
        ],
        [
            'squadraCasa' => 'Cremona',
            'squadraOspite' => 'Trento',
            'puntiCasa' => 112,
            'puntiOspite' => 105
        ],
        [
            'squadraCasa' => 'Reggiana',
            'squadraOspite' => 'Fortitudo Bologna',
            'puntiCasa' => 88,
            'puntiOspite' => 77
        ],
        [
            'squadraCasa' => 'Napoli',
            'squadraOspite' => 'VL Pesaro',
            'puntiCasa' => 84,
            'puntiOspite' => 85
        ],
    ] 

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Snack di gruppo</title>

    <style>

        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

    </style>
    
</head>
<body>

    <section id="snack1">
        
        <h1> Snack 1 </h1>

        <!-- inserire qui il codice dello snack (aprire i tag php se necessario) -->
        <ul>
            <?php for($i = 0; $i <count($partite); $i++) {
                echo "<li>{$partite[$i]['squadraCasa']} - {$partite[$i]['squadraOspite']} - {$partite[$i]['puntiCasa']} - {$partite[$i]['puntiCasa']} </li>";
            } ?>
        </ul>

    </section>

</body>
</html>