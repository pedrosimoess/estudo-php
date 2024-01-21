<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resultado</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <section>
        <label for="numero"><H1>Conversor de moedas V1.0 <br></H1> </label>
        <?php 
            $real = $_GET["valor"] ?? "Não foi possível";
            $dolar = $real / 4.93;
            echo "Os seus R\$" . number_format($real, 2) . " são equivalentes a U\$" . number_format($dolar, 2) . "*<br>";
            echo "<BR><strong>*Cotação fixa de 4,93</strong>";
        
        ?>

    </section>
</body>
</html>