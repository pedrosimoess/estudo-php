<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resultado</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <header>
        <h1>Resultado do processamento</h1>
    </header>
    <main>
        <?php 
            $numero = $_GET["numero"] ?? "Não foi possível";
            $antecessor = $numero - 1;
            $sucessor = $numero + 1;
            echo "<p>O número escolhido foi: <strong>$numero</strong>,<br> o antecessor é: $antecessor <br> e o sucessor é: $sucessor</p>"
        ?>
    </main>
</body>
</html>