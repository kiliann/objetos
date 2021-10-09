<!Doctype html>
<html lang="es" xmlns="http://www.w3.org/1999/html" xmlns="http://www.w3.org/1999/html">
<head>
    <meta charset="UTF-8">
    <title>Base de datos</title>
    <!-- Esta es la version 2 de la caluladora-->
</head>
<body>

<form action="calculando.php" method="post">
    <label> Introduce un numero</label>
    <input type="number" name="numero1">
    <label> Introduce un numero</label>
    <input type="number" name="numero2">
    <select name="simbolo">
        <option name="+" value="+">+</option>
        <option name="-" value="-">-</option>
        <option name="*" value="*">*</option>
        <option name="/" value="/">/</option>
    </select>
    <input type="submit" name="enviar" value="Calcular"/>
    <!--<input type="submit" name="+" value="+">
    <input type="submit" name="-" value="-">
    <input type="submit" name="*" value="*">
    <input type="submit" name="/" value="/"> -->
</form>


</body>
</html>
