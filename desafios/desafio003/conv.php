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
        <?php 
            $reais = $_GET ["reais"];
            $conversor = $reais / 5.22;

            echo "Seus <strong>R$ $reais</strong> equivalem a ";
            echo "<strong> US$" . number_format("$conversor",2,",",".") . "</strong>"; //sempre lembrar da concatenação
            echo "<p><strong>Cotação fixa de R$5,22</strong> informada diretamente no codigo</p>";
        ?>

        <p><a href="javascript:history.go(-1)">Voltar</a></p>
    </main>
</body>
</html>