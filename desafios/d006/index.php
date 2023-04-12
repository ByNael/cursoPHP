<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Desafio Divisão</title>
</head>
<body>
    <?php
        //arquivo que recebe dividendo e divisor e imprime na tela o dividendo, divisor, resultado e o resto. 
        $dividendo = $_GET['dividendo'] ?? 0;
        $divisor = $_GET['divisor'] ?? 0;
    ?>
    <main>
        <form action="<?=$_SERVER['PHP_SELF']?>" method="get">
            <label for="dividendo">Dividendo</label>
            <input type="number" name="dividendo" id="dividendo" value="<?=$dividendo?>">
            <label for="divisor">Divisor</label>
            <input type="number" name="divisor" id="divisor" value="<?=$divisor?>"> 
            <input type="submit" value="Analisar">
        </form>
    </main>

    <section id="resultado">
        <h2>Estrutura da divisão</h2>
        <?php 
            $divisao = $dividendo / $divisor;
            $resto = $dividendo % $divisor;

            echo "Este é o valor do dividendo $dividendo<br>";
            echo "Este é o valor do divisor $divisor<br>";
            echo "O coeficiente da divisão é $divisao<br>";
            echo "O 'resto' da divisão é $resto<br>"; //ainda vai ter uma correção para deixar mais visual
        ?>
    </section>
</body>
</html>
