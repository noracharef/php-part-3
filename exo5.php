<!DOCTYPE html> 

<html lang="fr" dir="ltr">

    <head>

        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="HTML"> 
        <title>Exerice php partie 3 exercice 5</title>
        <link rel="stylesheet" href="assets/css/style.css">

       
    </head>
<body>
<nav>
    <ul>
        <li><a href="exo1.php">Ex 1</a></li>
        <li><a href="exo2.php">Ex 2</a></li>
        <li><a href="exo3.php">Ex 3</a></li>
        <li><a href="exo4.php">Ex 4</a></li>
        <li><a href="exo5.php">Ex 5</a></li>
        <li><a href="exo6.php">Ex 6</a></li>
        <li><a href="exo7.php">Ex 7</a></li>
        <li><a href="exo8.php">Ex 8</a></li>
        <li><a href="exo9.php">Ex 9</a></li>
        <li><a href="exo8.php">Ex 10</a></li>
    </ul>

    <h1>PHP Partie 3 : Les boucles</h1>
    <h2>Exercice 5<h2>
    <p>En allant de 1 à 15 avec un pas de 1, afficher le message On y arrive presque.</p>

<?php
$var_counter = 1;

while ($var_counter <= 15)
{
    echo "On y arrive presque. <br>";
    $var_counter++;
}


?>

</body>
</html>