<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../style/style.css">
    <title>Desafio Idade</title>
</head>
<body>
    <?php
        //calcula a sua idade com o ano de nascimento e o ano atual 
        $atual = date("Y");
        $nascimento = $_GET['nascimento'] ?? 0;
        $ano = $_GET['ano'] ?? $atual;
    ?>
    <main>
        <form action="<?=$_SERVER['PHP_SELF']?>" method="get">
            <label for="nascimento">Em que ano você nasceu?</label>
            <input type="number" name="nascimento" id="nascimento" min="1900" max="<?=$atual?>" value="<?=$nascimento?>">
            <label for="ano">Quer saber sua idade em que ano? (Atualmente estamos em <strong><?=$atual?></strong>)</label>
            <input type="number" name="ano" id="ano" min="1900" value="<?=$ano?>"> 
            <input type="submit" value="Qual será a minha idade?">
        </form>
    </main>

    <section id="resultado">
        <?php 
            $idade = $ano - $nascimento;
            //echo "Quem nasceu em $nascimento vai ter <strong>" . $idade . " anos </strong> em $ano";
        ?>
        <h2>Resultado</h2>
        <p>Quem nasceu em <?=$nascimento?> vai ter <strong><?=$idade?> anos</strong> em <?=$ano?></p>
    </section>
</body>
</html>
