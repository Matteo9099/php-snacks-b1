<!-- 
    Passare come parametri GET name, mail e age e verificare (cercando i metodi che non conosciamo nella documentazione) 
    che name sia più lungo di 3 caratteri, che mail contenga un punto e una chiocciola e che age sia un numero. Se tutto è ok stampare “Accesso riuscito”, altrimenti “Accesso negato”
 -->


 <!-- Passo parametri GET -->
<?php

$name = $_GET['name'];
$email = $_GET['email'];
$age = $_GET['age'];

?>

 <!DOCTYPE html>
 <html lang="en">
 <head>
     <meta charset="UTF-8">
     <meta http-equiv="X-UA-Compatible" content="IE=edge">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <title>Snack 2</title>
 </head>
 <body>

    <p>
        Name:
        <?php
            // verifica che name sia più lungo di 3 caratteri
            if(strlen($name) > 3) {
                echo $name;
            } else {
                echo 'NOME NON VALIDO! inserire un nome con almeno 3 caratteri.';
            }
        ?>
    </p>

    <p>
        email:
        <?php
            // verifica se email contiene una @ e un punto(.)
            if(empty($email)) {
                echo 'email vuota.';
            } else {
                if (strpos($email, '@') !== false && strpos($email, '.') != false) {
                    echo $email;
                } else {
                    echo "INDIRIZZO E-MAIL NON VALIDO! deve contenere una '@' e un '.'.";
                }
            }
        ?>
    </p>

    <p>
        Age:
        <?php
            // verificare se age sia un numero
            if(is_numeric($age)) {
                echo $age;
            } else {
                echo 'Numero inserito non valido! inserisci un numero.';
            }
        ?>
    </p>
    
    <!-- controllo di tutti i parametri per consentire l'accesso. -->
    <p>
        <?php
            if((strlen($name) > 3) && (strpos($email, '@') !== false && strpos($email, '.')) !== false && is_numeric($age)) {
                echo 'ACCESSO CONSENTITO';  
            } else {
                echo 'ACCESSO NEGATO';  
            }
        ?>
    </p>
     
 </body>
 </html>