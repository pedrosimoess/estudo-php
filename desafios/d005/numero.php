<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Desafio PHP</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <main>
        <h1>Analisador de Número Real</h1>
        <?php 
            $num = $_POST["n"] ?? 0;

            echo "<p>Analisando o número <strong>" . number_format($num, 3, ",",".") . "</strong> informado pelo usuário: ";

            $int = (int) $num;
            $fra = $num - $int;

            // 3,14 == int 3 == 3,14 - 3

            echo "<ul><li> A parte inteira do número é <strong>". number_format($num, 0, ",", ".") ."</strong>";
            echo "<li> A parte fracionária do número é <strong>". number_format($fra, 3, ",", ".") ."</strong></li><ul>";
        ?>



    </main>
</body>
</html>