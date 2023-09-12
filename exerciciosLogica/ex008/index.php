<?php 

    /*crie uma função que calcula imposto de acordo com o salario que a alimenta*/
    function calcularImposto($salario){
        if($salario <= 1903.98){
            $imposto = 'ISENTO';
        } elseif($salario >= 1903.99 && $salario <= 2826.65){
            $imposto = ($salario * 7.5) / 100;
        } elseif($salario >= 2826.66 && $salario <= 3751.05){
            $imposto = ($salario * 15) / 100;
        } elseif($salario >= 3751.06 && $salario <= 4664.08){
            $imposto = ($salario * 22.5) / 100;
        } else{
            $imposto = ($salario * 27.5) / 100;
        }
        return $imposto;
    }

    echo calcularImposto(1903);
?>