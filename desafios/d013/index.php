<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../style/style.css">
    <title>Desafio Caixa Eletrônico</title>
    <style>
        img.nota{
            height: 50px;
            margin: 5px;
        }
    </style>
</head>
<body>
    <?php
        //programa que recebe quanto o usuario quer sacar em dinheiro e imprime na tela quantas notas de 100, 50, 10 e 5 vai entregar pro usuario
        $valor = $_REQUEST['valor'] ?? 0;
    ?>
    <main>
        <h1>Caixa Eletrônico</h1>
        <form action="<?=$_SERVER['PHP_SELF']?>" method="get">
            <label for="valor">Qual o valor que você deseja sacar?</label>
            <input type="number" name="valor" id="valor" step="5" required value="<?=$valor?>"> 
            <p style="font-size: 0.6em">Notas disponíveis: R$100, R$50, R$10 e R$5</p>
            <input type="submit" value="Sacar">
        </form>
    </main>

    <section id="resultado">
        <?php 
            $total = $valor;
            //notas de 100
            $cem = floor($total / 100);
            $total %= 100;
            //notas de 50
            $cinquenta = floor($total / 50);
            $total %= 50;
            //notas de dez
            $dez = floor($total / 10);
            $total %= 10;
            //notas de cinco
            $cinco = floor($total / 5);
            $total %= 5;

            /* $cem =  intdiv($valor,100);
            $cinquenta = intdiv(($valor-(100*$cem)),50);
            $dez = intdiv((($valor-(100*$cem))-(50*$cinquenta)),10);
            $cinco = intdiv(((($valor-(100*$cem))-(50*$cinquenta))-(10*$dez)),5);
            */
        ?>
        <h2>Saque de R$[<?=number_format($valor, 2, ",", ".")?>] realizado</h2>
        <p>O caixa eletrônico vai te entregar as seguintes notas:</p>
        <ul>
            <li><img src="../style/imagens/100-reais.jpg" alt="nota de 100" class="nota"> [<?=$cem?>]</li>
            <li><img src="../style/imagens/50-reais.jpg" alt="nota de 100" class="nota"> [<?=$cinquenta?>]</li>
            <li><img src="../style/imagens/10-reais.jpg" alt="nota de 100" class="nota"> [<?=$dez?>]</li>
            <li><img src="../style/imagens/5-reais.jpg" alt="nota de 100" class="nota"> [<?=$cinco?>]</li>
        </ul>
    </section>
</body>
</html>
