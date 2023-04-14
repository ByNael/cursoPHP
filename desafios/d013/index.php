<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Desafio Caixa Eletrônico</title>
</head>
<body>
    <?php
        //programa que recebe quanto o usuario quer sacar em dinheiro e imprime na tela quantas notas de 100, 50, 10 e 5 vai entregar pro usuario
        $valor = $_GET['valor'] ?? 0;
    ?>
    <main>
        <h1>Caixa Eletrônico</h1>
        <form action="<?=$_SERVER['PHP_SELF']?>" method="get">
            <label for="valor">Qual o valor que você deseja sacar?</label>
            <input type="number" name="valor" id="valor" value="<?=$valor?>"> 
            <input type="submit" value="Sacar">
        </form>
    </main>

    <section id="resultado">
        <h2>Saque de <?=number_format($valor, 2, ",", ".")?> realizado</h2>
        <?php 
            $cem = (integer) $valor/100;
            $dias = (integer) $valor/50;
            $horas = (integer) $valor/10;
            $minutos = (integer) $valor/5;

            echo "o caixa eletrônico vai te entregar as seguintes notas:<br>";
            echo "$semanas semanas <br>";
            echo "$dias dias <br>";
            echo "$horas horas <br>";
            echo "$segundos segundos<br>";
        ?>
    </section>
</body>
</html>
