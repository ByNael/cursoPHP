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
        //calcula a sua idade com o ano de nascimento e o ano atual 
        $nascimento = $_GET['nascimento'] ?? 0;
        $ano = $_GET['ano'] ?? 0;
    ?>
    <main>
        <form action="<?=$_SERVER['PHP_SELF']?>" method="get">
            <label for="nascimento">Em que ano você nasceu?</label>
            <input type="number" name="nascimento" id="nascimento" value="<?=$nascimento?>">
            <label for="ano">Quer saber sua idade em que ano? (Atualmente estamos em <strong><?=date("Y")?></strong>)</label>
            <input type="number" name="ano" id="ano" value="<?=$ano?>"> 
            <input type="submit" value="Qual será a minha idade?">
        </form>
    </main>

    <section id="resultado">
        <h2>Resultado</h2>
        <?php 
            $idade = $ano - $nascimento;

            echo "Quem nasceu em $nascimento vai ter <strong>" . $idade . " anos </strong> em $ano";
        ?>
    </section>
</body>
</html>
