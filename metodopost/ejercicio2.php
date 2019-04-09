

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
        </tr>
        <tr>
            <td><input type="submit" value="Buscar" name="buscar"></td>
        </tr>
    </table>
</form>

    <?php
    //Ingresar un número positivo y determinar si es par, impar y/o primo

    if (isset($_POST["buscar"])) {
        $num1=$_POST["numero1"];
        

        if ($num1%2==0) {
            echo 'El número  ' .$num1 . ' es par';
        }
        else {
            echo 'El número ' .$num1 . ' es impar';
        }
    }
    



?>

</body>
</html>