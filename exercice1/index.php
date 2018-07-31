<!--Déclaration variable $number -->
<?php $number = 0; ?>
<!DOCTYPE html>
<html lang="fr" dir="ltr">
<head>
  <meta charset="utf-8" />
  <title>Exercice1 Part3</title>
</head>
<body>
  <p>
    <?php
    //Première façon de faire.
    //On incrémente tant que l'on est pas arrivé à 10.
    /*while($number < 10){
    echo $number . ' ';
    $number++;
  }*/
  //Seconde façon de faire.
  //On incrémente tant que l'on est pas arrivé à 10.
  for($number = 0; $number < 10; $number++){
    echo $number . ' ';
  }
  ?>
</p>
</body>
</html>
