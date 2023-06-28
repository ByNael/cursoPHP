<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../style/style.css">
    <title>Desafio Divisão</title>
</head>
<body>
    <?php
        //arquivo que recebe dividendo e divisor e imprime na tela o dividendo, divisor, resultado e o resto. 
        $dividendo = $_GET['dividendo'] ?? 0;
        $divisor = $_GET['divisor'] ?? 1;
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
            $quociente = intdiv($dividendo, $divisor);
            $resto = $dividendo % $divisor;
        ?>

        <table class="divisao">
            <tr>
                <td><?=$dividendo?></td>
                <td><?=$divisor?></td>
            </tr>
            <tr>
                <td><?=$resto?></td>
                <td><?=$quoeficiente?></td>
            </tr>
        </table>
    </section>
</body>
</html>
