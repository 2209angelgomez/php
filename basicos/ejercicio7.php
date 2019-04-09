<?php
    /*Determinar si un número es primo. 
    Un número primo es aquel que es divisible únicamente por 1 y por él mismo. 
    Ejemplo: 3, 5, 7, 11 son divisibles por 1 y por ellos mismos, y por tanto, 
    el residuo de su división será 0. Si se divide un número primo por otro
    número distinto a 1 o a él mismo, el residuo de la división será diferente a 0*/

    $num=8;
    $calcular;
    $Contador=0;

    for ($i=1; $i <$num ; $i++) { 
        $calcular=$num%$i;
        if ($calcular==0) {
            $Contador++;
        }
    }
    if ($Contador>2) {
        echo ' El número ' . $num . ' no es primo';
    } else {
        echo ' El número ' . $num . ' es primo';
    }
    
?>