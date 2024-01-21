<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Desafio 2</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <header>
        <h1>Trabalhando com números</h1>
    </header>
    <section>
        <label for="numero">Gerando um número entre 0 e 100...<br></label>
        <?php 
            define("INFERIOR", 0);
            define("SUPERIOR",100);
            $numero = rand(INFERIOR, SUPERIOR);
            echo "O número gerado foi <strong>$numero</strong>"
        ?>
        <button type="button" onClick="recarregarAPagina()">Atualizar!</button>
    </section>
    <script>
        function recarregarAPagina(){
            window.location.reload();
        } 
    </script>
</body>
</html>