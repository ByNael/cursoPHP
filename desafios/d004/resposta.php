<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Conversor de moedas</title>
</head>
<body>
    <header>
        <h1>Resultado do processamento</h1>
    </header>
    <main>
        <?php //faça um conversor de real para dolar (consumindo uma api do banco central do brasil) onde o usuario deve dizer quantos reais tem na carteira
            $reais = $_GET ["reais"];
            
            //$conversor = $reais / 5.22;

            echo "Seus <strong>R$ $reais</strong> equivalem a ";
            echo "<strong> US$" . number_format("$conversor",2,",",".") . "</strong>";
            echo "<p>Cotação obtida diretamente do site do <strong>Banco Central do Brasil</strong></p>"; //ainda precisa ser concluido
        ?>

        <button onclick="javascript:history.go(-1)">&#x2b05; Voltar</button>
    </main>
</body>
</html>