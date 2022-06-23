<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Exercícios - 2</title>

  <style type="text/css">
    * {
        font-family: 'Lato', sans-serif;
    }
    </style>

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Lato:wght@400;700&display=swap" rel="stylesheet">
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
