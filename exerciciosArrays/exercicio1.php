<!DOCTYPE html>
<html lang="pt-br">
<!--  Length of an Array: Katharine Fernandes e Larissa Souza -->

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Length of an Array </title>

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
    <h1>Dias da Semana</h1>

    <?php

        $days = array("Domingo", "Segunda-feira", 
        "Terça-feira", "Quarta-feira", 
        "Quinta-feira", "Sexta-feira", "Sábado");
    
        echo "Número de dias na Semana: " . count($days) . " dias <br><br>";

        foreach($days as $day ) {
            echo "$day<br>";
        }
    ?>
    </form>
</body>

</html>