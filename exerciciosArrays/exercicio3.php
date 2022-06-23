<!DOCTYPE html>
<html lang="pt-br">
<!--  Associative Arrays: Katharine Fernandes e Larissa Souza -->

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Associative Arrays </title>

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
    <h1>Estados e capitais do Brasil</h1>

    <?php
        $estados = array("Bahia"=>"Salvador", 
            "Ceará"=>"Fortaleza",
            "Distrito Federal"=>"Brasília",
            "Espírito Santo" => "Vitória", 
            "Goiás"=>"Goiânia",
            "Minas Gerais" => "Belo Horizonte", 
            "Pernambuco" => "Recife", 
            "Rio de Janeiro"=>"Rio de Janeiro",
            "Santa Catarina"=>"Florianópolis", 
            "São Paulo"=>"São Paulo", 
            "Tocantins"=>"Palmas"
        );

        foreach($estados as $element => $capital) {
            echo "Estado $element - Capital $capital <br>";
        }

    ?>
    </form>
</body>

</html>