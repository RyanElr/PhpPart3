<?php
//Déclaration de variables.
$firstNumber = 0;
$secondNumber = rand(0,100);
?>
<!DOCTYPE html>
<html lang="fr" dir="ltr">
<head>
  <meta charset="utf-8" />
  <title>Exercice2 Part3</title>
</head>
<body>
  <p>
    <?php
    //Première façon de faire.
    //Incrémentation de la première variable tant qu'elle n'est pas supérieur à 20
    /*while($firstNumber < 20){
    // Multiplication de la première variable avec la deuxième.
    echo $firstNumber * $secondNumber . ' ';
    $firstNumber++;
  } */
  // Seconde façon de faire.
  //Initiation de la valeur firstnumber, incrémenter cette même valeur tant qu'elle n'est pas supérieure à 20
  for($firstNumber = 0; $firstNumber < 20; $firstNumber++){
    //Multiplication de la première variable avec la seconde.
    echo $firstNumber * $secondNumber . ' ';
  }
  ?>
</p>
</body>
</html>
