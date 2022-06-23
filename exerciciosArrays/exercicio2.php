<!DOCTYPE html>
<html lang="pt-br">
<!--  Indexed Arrays: Katharine Fernandes e Larissa Souza -->

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Indexed Arrays </title>

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
    <h1>Livros para ler em 2022</h1>

    <?php
        $livros = array("Orgulho e Preconceito - Jane Austen",
            "1984 - George Orwell",
            "Dom Quixote de la Mancha - Miguel de Cervantes",
            "O Pequeno Príncipe - Antoine de Saint-Exupéry",
            "Dom Casmurro - Machado de Assis",
            "O Bandolim do Capitão Corelli - Louis de Bernières",
            "O Conde de Monte Cristo - Alexandre Dumas"
        );
        $arrlength = count($livros);

        for($x = 0; $x < $arrlength; $x++) {
            echo " ●  ". $livros[$x];
            echo "<br>";
          }
    ?>
    </form>
</body>

</html>