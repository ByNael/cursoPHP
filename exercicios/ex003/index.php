<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tipos primitivos em PHP</title>
</head>
<body>
    <h1>Teste de tipos primitivos</h1>
    <?php 
        //0x = hexadecimal 0b = binário 0 = octal
        /*$num = 300;
        echo "O valor da vairiável é $num";*/

        /* $v = 300;
        var_dump($v);*/ //mostra o tipo primitivo da variavel

        /*$num = (integer) 3e2; // 3*10(2) coerção
        //echo "O valor é $num";
        var_dump($num);*/ //a saida seria float mas existe a coerção pra forçar a ser int

        /*$casado = false; //se for verdadeiro aparece 1 ou qualquer coisa diferente de 0 e false aparece vazio, null ou 0
        var_dump($casado);
        print "O valor para casado é $casado";*/

        /*$vet = [6, 2.5, "nataN", 3, false];
        var_dump($vet); */

        class Pessoa {
            private string $nome;
        }

        $p = new Pessoa;
        var_dump($p);
    ?>
</body>
</html>