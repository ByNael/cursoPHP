<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Desafio Reajuste</title>
</head>
<body>
    <?php
        //pega um preço e imprime um reajuste de preço de acordo com a porcentagem escolhida pelo usuario 
        $preco = $_GET['preco'] ?? 0;
        $percentual = $_GET['percentual'] ?? 0;
    ?>
    <main>
        <form action="<?=$_SERVER['PHP_SELF']?>" method="get">
            <label for="preco">Preço do Produto (R$)</label>
            <input type="number" name="preco" id="preco" min="0.10" step="0.01" value="<?=$preco?>">

            <label for="percentual">Qual o percentual de reajuste? (<strong><span id="p">?</span>%</strong>)</label>
            <input type="range" name="percentual" id="percentual" min="0" max="100" step="1" oninput="mudaValor()" value="<?=$percentual?>"> 

            <input type="submit" value="Reajustar">

        </form>
    </main>

    <section id="resultado">
        <?php 
            $reajuste = (($preco * $percentual)/100);
            $reajuste += $preco;

            /* antiga solução
            echo "O produto que custava $preco, com <strong>R$" . $percentual . "% de aumento</strong> vai passar a custar <strong>R$" . number_format($reajuste, 2, ",", ".") . "</strong> a partir de agora.";
            */
        ?>
        <h2>Resultado do Reajuste</h2>

        <!--Uso de short tags-->
        <p>O produto custava R$<?= number_format($preco, 2, ",", ".")?> com <strong><?= $percentual?> de aumento</strong> vai passsar a custar <strong>R$<?= number_format($reajuste, 2, ",", ".")?></strong> a partir de agora.</p>
    </section>

    <script>
        //Declarações automáticas
        mudaValor()
        function mudaValor() {
            p.innerText = percentual.value
        }
    </script>
</body>
</html>
