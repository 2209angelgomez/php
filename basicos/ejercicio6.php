<?php
    /*Calcular el área de una de las siguientes figuras: 
    1. Cuadrado: base * altura
    2. Triangulo: base * altura /2
    3. Rectangulo: base * altura 
    4. Circulo: pi * radio al cuadrado (se usa la función pow(base,exponente))
    Use la estructura Switch*/


    $Figura='Circulo';
    $Base=5;
    $Altura=9;
    $Potencia=pow(5,2);
    $Radio=5;
    $j;

    switch ($Figura) {
        case 'Cuadrado':
            $j=$Base*$Altura;
            echo 'El area es: ' . $j;
            break;
        case 'Triangulo':
            $j=$Base*$Altura/2;
            echo 'El area es: ' . $j;
            break;
        case 'Rectangulo':
            $j=$Base*$Altura;
            echo 'El area es: ' . $j;
            break;
        case 'Circulo':
            $j=3.1415*$Potencia;
            echo 'El area es: ' . $j;
            break;        
        default:
            # code...
            break;
    }
    
?>


