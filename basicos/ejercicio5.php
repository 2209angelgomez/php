<?php 
    /*Leer tres números enteros diferentes entre sí e imprimirlos ordenados en forma ascendente  (de menor a mayor).*/

    $num1=30;
    $num2=54;
    $num3=1;

    if ($num1>$num2 && $num2>$num3) {
        echo  $num3 . ' ' .$num2 .' ' .$num1 .' ';
    }
    elseif ($num1>$num3 && $num3>$num2) {
        echo $num2 . ' ' . $num3 . ' ' . $num1 . ' ';
    }
    elseif ($num3>$num1 && $num1>$num2) {
        echo $num2 . ' ' . $num1 . ' ' . $num3 . ' ';
    }
    elseif ($num3>$num2 && $num2>$num1) {
        echo $num1 . ' ' .$num2 . ' ' . $num3 . ' ';
    }
    elseif ($num2>$num1 && $num1>$num3) {
        echo $num3 . ' ' . $num1 . ' ' . $num2 .' ';
    }
    elseif ($num2>$num3 && $num3>$num1) {
        echo $num1 . ' ' . $num3 . ' ' .$num2 . ' ';
    }
    
?>