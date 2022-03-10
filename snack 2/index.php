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

    <form method="GET">
        <input type="text" name="name" placeholder="Inserisci nome">
        <input type="text" name="email" placeholder="Inserisci email">
        <input type="number" name="age" placeholder="Inserisci età">
        <button type="submit">Invia</button>
        
    </form>

    <p>
        Name:
        <?php
            // verifica che name sia più lungo di 3 caratteri
            if(strlen($name) > 3) {
                echo $name;
            } else {
                echo '<span style="color:red;">NOME NON VALIDO! inserire un nome con almeno 3 caratteri.</span>';
            }
        ?>
    </p>

    <p>
        email:
        <?php
            // verifica se email contiene una @ e un punto(.)
            if(empty($email)) {
                echo '<span style="color:red;">email vuota.</span>';
            } else {
                if (strpos($email, '@') !== false && strpos($email, '.') != false) {
                    echo $email;
                } else {
                    echo "<span style='color:red;'> INDIRIZZO E-MAIL NON VALIDO! deve contenere una ' @ ' e un ' . '</span>";
                }
            }
        ?>
    </p>

    <p>
        Age:
        <?php
            // verificare se age sia un numero
            if(is_numeric($age) && ($age > 0)) {
                echo $age;
            } else {
                echo '<span style="color:red">Numero inserito non valido! inserisci un numero.</span>';
            }
        ?>
    </p>
    
    <!-- controllo di tutti i parametri per consentire l'accesso. -->
    <p>
        <?php
            if((strlen($name) > 3) && (strpos($email, '@') !== false && strpos($email, '.')) !== false && is_numeric($age) && ($age > 0)) {
                echo '<span style="color:green;">ACCESSO CONSENTITO </span>';  
            } else {
                echo '<span style="color:red;">ACCESSO NEGATO </span>';  
            }
        ?>
    </p>

     
 </body>
 </html>