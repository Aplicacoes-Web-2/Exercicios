<!DOCTYPE html>
<html lang="pt-br">
<!--  Multidimensional Array: Katharine Fernandes e Larissa Souza -->

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Multidimensional Arrays </title>

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
    <h1>Meus livros e capítulos</h1>

    <?php

        $prince = array(1 => 'O Piloto de Aviões',
        'Um Carneiro', 'O Pequeno Principe',
        'O Asteroide B 612');

        $lima = array(1 => 'O descobridor das coisas',
        'Um certo pé de laranja lima', 'Os dedos magros da pobreza',
        'O passarinho, a escola e a flor');

        $books = array(
            'O Pequeno Principe' => $prince,
            'Meu Pé de Laranja Lima' => $lima,
            );

        foreach ($books as $title => $chapters) {
            echo "<p><b>$title</b>";

            foreach ($chapters as $number => $chapter) {
                echo "<br>Capítulo $number:  '$chapter'";
            }
            }
        echo '</p>';
    ?>
    </form>
</body>

</html>