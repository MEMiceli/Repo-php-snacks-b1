<!-- Passare come parametri GET name, mail e age e verificare (cercando i metodi che non conosciamo nella documentazione) che name sia più lungo di 3 caratteri, che mail contenga un punto e una chiocciola e che age sia un numero. Se tutto è ok stampare “Accesso riuscito”, altrimenti “Accesso negato” -->

<?php
$name = $_GET['name'];
$email = $_GET['email'];
$age = $_GET['age']
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php if(strlen($name) > 3 && !is_numeric($name) && filter_var($email, FILTER_VALIDATE_EMAIL) && is_numeric($age)){
                echo "Accesso Riuscito"; 
            }
            else{
                echo "Accesso Negato";
            }
        //     if(filter_var($email, FILTER_VALIDATE_EMAIL)) 
        //         if(filter_var($age,is_numeric)){
        //             echo "Accesso Riuscito";     
        //         }
        //     }
        //     else{
        //     echo "$email Non valida";
        // }
        // }
    ?>
    
</body>
</html>