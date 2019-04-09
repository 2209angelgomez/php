<?php
    /* Determinar cuantos números enteros hay entre dos números y determinar cuántos
    de los números del intervalo son primos. */

    $num1=3;
    $num2=9;
    $calcular;
    $num;
    $Contador=0;

    for ($i=$num1; $i <$num2 ; $i++) { 
        echo $i;
        for ($x=1; $x <$num2 ; $x++) { 
            $calcular=$num1%$x;
            if ($calcular==0) {
                $Contador++;
            }
    }

        if ($Contador>$num2) {
            echo ' El número ' . $num . ' no es primo';
        } else {
            echo ' El número ' . $num . ' es primo';
        }

}



    // $num=8;
    // $calcular;
    // $Contador=0;

    // for ($i=1; $i <$num ; $i++) { 
    //     $calcular=$num%$i;
    //     if ($calcular==0) {
    //         $Contador++;
    //     }
    // }
    // if ($Contador>2) {
    //     echo ' El número ' . $num . ' no es primo';
    // } else {
    //     echo ' El número ' . $num . ' es primo';
    // }
?>