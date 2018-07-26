<?php
$number = 1;
?>
<!DOCTYPE html>
<html lang="fr" dir="ltr">
<head>
  <meta charset="utf-8" />
  <title>Exercice4 Part3</title>
</head>
<body>
  <p>
    <?php
    while($number < 10){
      echo $number . '</br>';
      $number += $number / 2;
    }
    ?>
  </p>
  </body>
</html>
