<?php 
    /*Ingresar el valor de una compra (numero entero positivo) y 
    calcule  e imprima el neto a pagar, teniendo en cuenta que si el valor de la compra es inferior 
    a $  100.000, no se obtiene ningún descuento, si esta entre $100.000 y 500.000, el descuento  
    será del 5% y si la compra es mayor de $500.000, el descuento será del 10%. Se debe  imprimir, 
    valor de la compra, descuento obtenido y neto a pagar. */


    $total=100000;

    if ($total<100000) {
        echo 'No se obtiene descuento';
        echo '</br>';
        echo 'El valor total es: ' .$total;
    } 
    else if ($total>=100000 && $total<=500000){
        echo 'Su descuento es del 5% ';
        $descuento=($total*5)/100;
        echo 'Valor del descuento: ' .$descuento;
        echo '</br>';
        $total1=$total-$descuento;
        echo 'Total a pagar: ' .$total1;
    }
    else if ($total>500000){
        echo 'Su descuento es del 10% ' ;
        $descuento=($total*10)/100;
        echo 'Valor del descuento: ' .$descuento;
        echo '</br>';
        $total1=$total-$descuento;
        echo ' El valor total es: ' .$total1;
    }


?>