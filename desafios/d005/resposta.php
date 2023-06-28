<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../style/style.css">
    <title>Número Real</title>
</head>
<body>
    <header>
        <h1>Analisador de Número Real</h1>
    </header>
    <main>
        <?php //faça um programa que receba um número real e imprima a parte inteira e a parte fracionaria na tela
            $real = $_POST ["real"] ?? 0;
            $inteira = (int) $real;
            $fracionaria = $real - $inteira;

            echo "<p>Analisando o número <strong>" . number_format($real, 3, ",", ".") . "</strong> informado pelo usuário:</p>";
            echo "<p>A parte inteira do número é <strong>" . number_format($inteira, 0, ",", ".") . "</strong></p>";
            echo "<p>A parte fracionária do número é <strong>" . number_format("$fracionaria", 3, ",", ".") . "</strong></p>";
        ?>

        <p><a href="javascript:history.go(-1)">Voltar</a></p>
    </main>
</body>
</html>