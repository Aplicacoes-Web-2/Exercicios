<!DOCTYPE html>
<html lang="pt-br">
  
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Exercícios - 3</title>

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
  function  receiveNameAge(){
    echo '<script type="text/javascript"> ';
    echo 'var age = prompt("Insira sua idade:", "");';
    echo 'var Name = prompt("Insira seu nome:", "");';
    echo 'var text = null;';
    echo 'if (age > 18) {
      text =  `${Name} é maior que 18 e tem ${age} anos.`
    } else {
      text = `${Name} não é maior que 18 e tem ${age} anos.`
    };';
    echo 'alert(text);';
    echo '</script>';
  }
  ?>
  <?php receiveNameAge(); ?>
</body>

</html>
