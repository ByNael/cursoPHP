<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Antecessor e sucessor</title>
</head>
<body>
    <header>
        <h1>Resultado do processamento</h1>
    </header>
    <main>
        <?php //faça um programa que receba um numero e imprima seu sucessor e seu antecessor
            $number = $_GET ["numero"] ?? 0; 
            $antecessor = $number - 1; 
            $sucessor = $number + 1;
            
            echo "<p>O número escolhido foi <strong>$number</strong></p>";
            echo "<p>Seu antecessor é: <strong>$antecessor</strong></p>";
            echo "<p>Seu sucessor é: <strong>$sucessor</strong></p>";
        ?>

        <button onclick="javascript:history.go(-1)">&#x2b05; Voltar</button>
    </main>
</body>
</html>