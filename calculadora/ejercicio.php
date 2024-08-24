<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Procesar</title>
</head>
<body>
    <?php

     $num1 = $_POST['variable1'];
     $num2 = $_POST['variable2'];
     echo("El resultado de la suma es: ".$num1 + $num2);

    ?>
</body>
</html>