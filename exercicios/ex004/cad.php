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
           $n = $_GET["nome"] ?? "sem nome";
           $s = $_GET["sobrenome"] ?? "desconhecido";
           echo "<p>É um prazer te conhecer, <strong>$n $s</strong>! Este é o meu site!"; 
        
        ?>
    </main>
</body>
</html>