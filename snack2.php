<!-- ## Snack 2
Passare come parametri GET name, mail e age e verificare (cercando i metodi che non conosciamo
nella documentazione) che name sia più lungo di 3 caratteri, che mail contenga un punto e
una chiocciola e che age sia un numero. Se tutto è ok stampare “Accesso riuscito”, altrimenti
“Accesso negato” -->

   <?php
    // inserire qui gli array (se necessario)
    
    if(empty($_GET['name']) && empty($_GET['email']) && empty($_GET['age'])){
        echo 'inserisci valori validi';
    }
    else {
        $name = $_GET['name'];
        $email = $_GET['email'];
        $age = $_GET['age'];
        $numcheck = is_numeric($age);

        if((strlen($name) >= 3) && (strpos($email, '@') && strpos($email, '.')) && ($numcheck) ){
            echo 'Accesso riuscito';
        }else{
            echo 'Accesso negato';
        }
    }
   

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
        
        <h1> Snack 2 </h1>

        <!-- inserire qui il codice dello snack (aprire i tag php se necessario) -->
       

    </section>

</body>
</html>