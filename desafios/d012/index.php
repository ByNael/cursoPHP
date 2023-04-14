<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Desafio Calcular Segundos</title>
</head>
<body>
    <?php
        //calculadora de tempo que recebe em segundos pelo usuario e imprime na tela quantas semanas, dias, horas, minutos e segundos 
        $segundos = $_GET['segundos'] ?? 0;
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
        <h2>Resultado final</h2>
        <?php 
            $semanas = $segundos/604800;
            $dias = $segundos/86400;
            $horas = $segundos/3600;
            $minutos = $segundos/60;

            echo "Analisando o valor que você digitou, <strong>" . number_format($segundos, 3, ".", ".") . "</strong>, equivalem a um total de:<br>";
            echo "$semanas semanas <br>";
            echo "$dias dias <br>";
            echo "$horas horas <br>";
            echo "$segundos segundos<br>";
        ?>
    </section>
</body>
</html>
