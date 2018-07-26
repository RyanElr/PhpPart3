<?php
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
        while($firstNumber < 20){
            echo $firstNumber * $secondNumber . ' ';
            $firstNumber++;
        }
        ?>
      </p>
  </body>
</html>
