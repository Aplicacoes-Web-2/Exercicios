<?php
$num01 = 0;
$num01 = filter_input(INPUT_POST, "txtNumero1");
?>
<!--  Exercicio 3: Katharine Fernandes e Larissa Souza -->
<!DOCTYPE html>
<html lang="pt-br">
    
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Fibonacci </title>

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
    <h1>Fibonacci</h1>
      <?php
        $x = 0; $y = 1; $aux; $i = 1;
     
        while($i <= 20){
          $aux = $x + $y;
          $x = $y;
          $y = $aux;
          echo "Termo {$i}: {$aux}<br>";
          $i++;
        }
      ?>
    </form>
  </body>
 </html>     