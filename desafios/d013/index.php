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
            $cem =  intdiv($valor,100);
            $cinquenta = intdiv(($valor-(100*$cem)),50);
            $dez = intdiv((($valor-(100*$cem))-(50*$cinquenta)),10);
            $cinco = intdiv(((($valor-(100*$cem))-(50*$cinquenta))-(10*$dez)),5);

            echo "o caixa eletrônico vai te entregar as seguintes notas:<br>";
            echo "$cem cem <br>";
            echo "$cinquenta cinquenta <br>";
            echo "$dez dez <br>";
            echo "$cinco cinco<br>"; //resolvi sem if else :P deu o maior trombolho que ja vi
        ?>
    </section>
</body>
</html>
