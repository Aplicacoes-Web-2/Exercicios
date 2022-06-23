<?php
 
$num01 = 0;
$num01 = filter_input(INPUT_POST, "txtNumero1");
?>
<!--  Exercicio 1: Katharine Fernandes e Larissa Souza -->
<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Tabuada </title>

    <style>
        input, select{
            padding:10px;
            margin: 5px;
        }
        * {
            font-family: 'Lato', sans-serif;
        }
    </style>

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Lato:wght@400;700&display=swap" rel="stylesheet">

  </head>
 
<body>

  <h1>Tabuada</h1>
  <form method="post">
    <label>Informe um número: <input type="text" name="txtNumero1"/></label><br>
 
    <input type="submit" name="btnCalcular" value="Calcular Tabuada"><br>
       
    <?php
      if($num01 != 0){
        for($i = 0; $i <= 10; $i++){
          echo "{$num01} x {$i} = " . ($num01*$i) . "<br>";
        }
      }
    ?>
  </form>
  
</body>
 
</html>    