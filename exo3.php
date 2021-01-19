<!DOCTYPE html> 

<html lang="fr" dir="ltr">

    <head>

        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="HTML"> 
        <title>Exerice php partie 3 exercice 3</title>
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
    <h2>Exercice 3<h2>
    <p>Créer deux variables. Initialiser la première à 100 et la deuxième avec un nombre compris en 1 et 100.<br>
    Tant que la première variable n'est pas inférieure ou égale à 10 :<br>
    - multiplier la première variable avec la deuxième<br>
    - afficher le résultat<br>
    - décrémenter la première variable</p>

<?php
$var_first_number = 100;
$var_second_number = rand(0,100);
echo $var_second_number . "<br>";

while ($var_first_number >= 10)
{
$var_first_number = $var_first_number * $var_second_number;
echo $var_first_number;
$var_first_number++;
}
?>

</body>
</html>