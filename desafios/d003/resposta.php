<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../style/style.css">
    <title>Conversor de moedas</title>
</head>
<body>
    <header>
        <h1>Resultado do processamento</h1>
    </header>
    <main>
        <?php //faça um conversor de real para dolar onde o usuario deve dizer quantos reais tem na carteira
            $reais = $_GET ["reais"] ?? 0; 
            $cotação = 5.29;
            $conversor = $reais / $cotação;

            //echo "Seus <strong>R$" . number_format($reais, 2, ",", ".") . "</strong> equivalem a ";
            //echo "<strong> US$" . number_format("$conversor",2,",",".") . "</strong>"; //sempre lembrar da concatenação
            //echo "<p><strong>Cotação fixa de $cotação</strong> informada diretamente no codigo</p>";

            //Resolução de formatação de moedas com internacionalização
            //numfmt é uma função da biblioteca intl (Internalization PHP)
            $padrao = numfmt_create("pt_BR", NumberFormatter::CURRENCY);

            echo "Seus <strong>" . numfmt_format_currency($padrao, $reais, "BRL") . "</strong> equivalem a ";
            echo "<strong> " . numfmt_format_currency($padrao, $conversor, "USD") . "</strong>";
            echo "<p><strong>Cotação fixa de " . numfmt_format_currency($padrao, $cotação, "USD") . "</strong> informada diretamente no codigo</p>";
        ?>

        <button onclick="javascript:history.go(-1)">&#x2b05; Voltar</button>
    </main>
</body>
</html>