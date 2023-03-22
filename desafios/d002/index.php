<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Números aleatórios</title>
</head>
<body>
    <header>
        <h1>Trabalhando com números aleatórios</h1>
    </header>
    <main>
        <?php //faça um programa que gere aleatoriamente um número entre 0 e 100
            const INFERIOR = 0;
            const SUPERIOR = 100;
            $valor = mt_rand(INFERIOR, SUPERIOR); // pode ser utilizado rand(), mt_rand() que vão gerar numeros aleatorios na mesma velocidade apartir do php 7.1
            // mas tambem pode ser utilizado random_int() que gera números aleatórios criptograficamente seguros
            
            echo "<p>Gerando um número aleatório entre 0 e 100...</p>";
            echo "<p>O valor gerado foi <strong>$valor</strong></p>";
        ?>

        <button onclick="javascript:document.location.reload()">&#x1F504; Gerar outro</button>
    </main>
</body>
</html>