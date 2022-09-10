<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script type="text/javascript" src="js/script.js"> </script>
    <title> Aula 2 - PHP </title>
</head>
<body>
    <form action="page2.php" method="get" onsubmit="return validaForm(this)">
    <h3> Dados </h3>
    <p> Nome: <input type="text" name="nome"> </p>
    <p> E-mail: <input type="text" name="email"> </p>
    <h3> Cálculo - Soma </h3>
    <p> Primeiro Número: <input type="text" name="num1"> </p>
    <p> Segundo Número: <input type="text" name="num2"> </p>
    <input type="submit" value="Enviar">
</body>
</html>