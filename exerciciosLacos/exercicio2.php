<?php
   if(isset($_POST['num'])){
       $num = $_POST['num'];
   }
?>
 <!--  Exercicio 2: Katharine Fernandes e Larissa Souza -->
<!DOCTYPE html>
<html lang="en">

<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Fatorial do Número</title>
   
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
 
<h1>Fatorial</h1>
 
<form method="post" action="#">
   <input type="number" id="num" name="num">
   <input type="submit" value="enviar">
</form>
 
<?php
   if($num > 0) {
       $valor = $num;
       for ($i = ($valor - 1); $i > 0 ;$i--) {
           $valor = $valor*$i;
       }
   } else {
       $valor = 0;
   }
 
   echo ('<br/> O fatorial é: ' . $valor);
?>
 
</body>
</html>