<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Resultado Final </title>
</head>
<body>
    <p> Bem Vindo, <?php echo $_GET["nome"];?> </p>
    <p> Seu E-mail É: <?php echo $_GET["email"];?> </p>
    <p> Primeiro Número É: <?php echo $_GET["num1"];?> </p>
    <p> Segundo Número É: <?php echo $_GET["num2"];?> </p>
    <?php
     $num1 = $_GET["num1"];
     $num2 = $_GET["num2"];
     $soma = $num1 + $num2;
    ?>
    <p> <?php echo "Resultado Da Soma É:  $soma";?> </p> 

</body>
</html>