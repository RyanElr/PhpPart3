<?php
$firstNumber = 100;
$secondNumber = rand(1,100);
?>
<!DOCTYPE html>
<html lang="fr" dir="ltr">
  <head>
    <meta charset="utf-8" />
    <title>Exercice3 Part3</title>
  </head>
  <body>
      <p>
        <?php
        while($firstNumber > 10){
            echo $firstNumber * $secondNumber . ' ';
            $firstNumber--;
        }
        ?>
      </p>
  </body>
</html>
