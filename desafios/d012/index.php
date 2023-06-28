<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../style/style.css">
    <title>Desafio Calcular Segundos</title>
</head>
<body>
    <?php
        //calculadora de tempo que recebe em segundos pelo usuario e imprime na tela quantas semanas, dias, horas, minutos e segundos 
        $segundos = $_REQUEST['segundos'] ?? 0;
    ?>
    <main>
        <h1>Calculadora de Tempo</h1>
        <form action="<?=$_SERVER['PHP_SELF']?>" method="get">
            <label for="segundos">Qual o total de segundos?</label>
            <input type="number" name="segundos" id="segundos" value="<?=$segundos?>"> 
            <input type="submit" value="Calcular">
        </form>
    </main>

    <section id="resultado">
        <?php 
            $total_segundos = $segundos;
            //semanas
            $semanas = intdiv($total_segundos, 604800);
            $total_segundos %= 604800;
            //dias
            $dias = intdiv($total_segundos, 86400);
            $total_segundos %= 86400;
            //horas
            $horas = intdiv($total_segundos, 3600);
            $total_segundos %= 3600;
            //minutos
            $minutos = intdiv($total_segundos, 60);
            $total_segundos %= 60;
            //segundos
            $segundos = $total_segundos;

            /*$semanas = intdiv($segundos, 604800); resposta antiga
            *$dias = intdiv($segundos-(604800*$semanas), 86400);
            *$horas = intdiv(($segundos-(604800*$semanas))-(86400*$dias), 3600);
            *  $minutos = intdiv(((($segundos-(604800*$semanas))-(86400*$dias))-(3600*$horas)), 60);
            */
        ?>

        <h2>Resultado final</h2>
        <p>Analisando o valor que você digitou, [<?=$segundos?>] segundos equivalem a um total de:</p>
        <ul>
            <li>[<?=$semanas?>] semanas</li>
            <li>[<?=$dias?>] dias</li>
            <li>[<?=$horas?>] horas</li>
            <li>[<?=$minutos?>] minutos</li>
            <li>[<?=$segundos?>] segundos</li>
        </ul>
    </section>
</body>
</html>
