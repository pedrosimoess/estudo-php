<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Alguns Testes</title>
</head>
<body>
    <h1>Variáveis e constantes</h1>
    <?php 
        $nome = "Pedro";
        $sobrenome = "Vieira";
        
        echo "Muito prazer, $nome $sobrenome !";

        const PAIS = "Brasil";
        echo "<br>Você mora no " . PAIS . ", certo?" 
    ?>
</body>
</html>