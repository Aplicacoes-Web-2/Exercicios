<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Exercícios - 2</title>
</head>
<body>
  <?php
  function  receiveValues(){
    echo '<script type="text/javascript"> ';
    echo 'var A = prompt("Insira o valor de A:", "");';
    echo 'var B = prompt("Insira o valor de B:", "");';
    echo 'var text = null;';
    echo 'A > B ? text = `${A} ${B}` : text = `${A} ${B}`;';
    echo 'alert(text);';
    echo '</script>';
  }
  ?>
  <?php receiveValues(); ?>
</body>
</html>
