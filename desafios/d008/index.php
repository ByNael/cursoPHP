<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Desafio Raiz</title>
</head>
<body>
    <?php
        //recebe um numero e imprime na tela a raiz quadrada e cubica 
        $numero = $_GET['numero'] ?? 0;
    ?>
    <main>
        <form action="<?=$_SERVER['PHP_SELF']?>" method="get">
            <label for="numero">Numero</label>
            <input type="number" name="numero" id="numero" value="<?=$numero?>"> 
            <input type="submit" value="Calcular raizes">
        </form>
    </main>

    <section id="resultado">
        <h2>Resultado final</h2>
        <?php 
            $quadrada = pow($numero,(1/2));
            $cubica = pow($numero,(1/3));

            echo "Analisando o <strong>número $numero</strong>, temos<br>";
            echo "A sua raiz quadrada é <strong>" . number_format($quadrada, 3, ",", ".") ."</strong><br>";
            echo "A sua raiz cúbica é <strong>" . number_format($cubica, 3, ",", ".") ."</strong>";
        ?>
    </section>
</body>
</html>
