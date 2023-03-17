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
        <?php 
            define("INFERIOR", 0);
            define("SUPERIOR", 100);
            $valor = rand(INFERIOR, SUPERIOR);
            
            echo "<p>Gerando um número aleatório entre 0 e 100...</p>";
            echo "<p>O valor gerado foi <strong>$valor</strong></p>";
        ?>

        <form action="index.php">
            <input type="submit" value="Gerar outro">
        </form>
    </main>
</body>
</html>