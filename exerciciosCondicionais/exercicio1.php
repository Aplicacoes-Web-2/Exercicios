<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Exercícios - 1 </title>
</head>
<body>
  <?php
  function  receiveNumber(){
    echo '<script type="text/javascript"> ';
    echo 'var number = prompt("Insira um número:", "");';
    echo 'var text = null;';
    echo 'if (number > 0) {
            text = "Valor Positivo."
          } else if (number < 0) {
            text = "Valor Negativo."
          } else {
            text = "Valor igual a zero."
          };';
    echo 'alert(text);';
    echo '</script>';
  }
  ?>
  <?php receiveNumber(); ?>
</body>
</html>
