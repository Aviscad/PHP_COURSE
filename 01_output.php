<?php
    //echo --> Salida de strings, numeros, html,etc
    echo 'Hello', 25;  

    //print --> Igual que echo pero solo puede enviar un dato a la vez
    print 123;

    //print_r() --> Imprime arrays
    print_r([1,2,3]);

    //var_dump() --> Devuelve informacion extra como tipo de dato y tama;o
    var_dump('Hello');

    //var_export() --> Igual que var_dump() solo que muestra comillias si es string
    var_export('Hello');
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1><?php echo "Post One"; ?></h1>  
</body>
</html>
