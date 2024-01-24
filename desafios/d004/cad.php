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
            $cotação = $inicio = date("m-d-Y", strtotime("-7 days")) ;
            $fim = date("m-d-Y");
            $url ='https://olinda.bcb.gov.br/olinda/servico/PTAX/versao/v1/odata/CotacaoDolarPeriodo(dataInicial=@dataInicial,dataFinalCotacao=@dataFinalCotacao)?@dataInicial=\''. $inicio .'\'&@dataFinalCotacao=\''. $fim .'\'&$top=1&$orderby=dataHoraCotacao%20desc&$format=json&$select=cotacaoCompra,dataHoraCotacao';
        
            $dados = json_decode(file_get_contents($url), true);
        
            $cotação = $dados['value'][0]["cotacaoCompra"];
            $real = $_GET["valor"] ?? "Não foi possível";
            $dolar = $real / $cotação;
            echo "Os seus R\$" . number_format($real, 2) . " são equivalentes a U\$" . number_format($dolar, 2) . "*<br>";
            echo "<BR><strong>*Cotação fixa de 4,93</strong>";
        
        ?>

    </section>
</body>
</html>