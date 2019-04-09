
<!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Document</title>
    </head>
    <body>

    <form action="" method="POST">
    <table>
    <tr>
    <td><label> Numero 1</label><input type="text" name="numero1" placeholder="Ingrese un número"></td>
    <td><label> Numero 2</label><input type="text" name="numero2" placeholder="Ingrese un número"></td>
    <td><label> Numero 3</label><input type="text" name="numero3" placeholder="Ingrese un número"></td>
    <td><label> Numero 4</label><input type="text" name="numero4" placeholder="Ingrese un número"></td>
    </tr>
    <tr>
    <td><input type="submit" value="Buscar" name="buscar"></td>
    </tr>
    </table>
    </form>

    <?php
    /*Generar números dentro de un intervalo ingresado y realizar la sumatoria de los números generados y el
    promedio
    Ejemplo: Si el intervalo es 10 11 12 13, la sumatoria debe ser 46, y el promedio 11.5*/

    if (isset($_POST["buscar"])) {
        $num1=$_POST["numero1"];
        $num2=$_POST["numero2"];
        $num3=$_POST["numero3"];
        $num4=$_POST["numero4"];

    for ($i=1; $i <40 ; $i++) { 
        $suma=$num1+$num2+$num3+$num4;
        $promedio=$suma/4;
    }

    echo 'La sumatoria de los números es: ' . $suma . '<br>' . 'El promedio de los números es: '. $promedio;
}

    
?>


        
    </body>
    </html>