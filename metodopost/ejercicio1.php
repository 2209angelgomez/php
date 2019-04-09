
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
    </tr>
    <tr>
    <td><input type="submit" value="Buscar" name="buscar"></td>
    </tr>
    </table>
    </form>

    <?php
    /*Determinar cuantos números enteros existen entre dos números
    Ejemplo: Si se ingresan los números 4 y 10, el intervalo debe ser: 5 6 7 8 9*/
    

    if (isset($_POST["buscar"])) {
        $num1=$_POST["numero1"];
        $num2=$_POST["numero2"];

    for ($i=$num1; $i <$num2 ; $i++) { 
        echo $i . '<br>';
    }
}

    
    
?>
    
        
    </body>
    </html>