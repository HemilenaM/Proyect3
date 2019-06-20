<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body bgcolor="black">  <center>
<label><h2><font color=royalblue> LISTA DE TRANSACCIONES </h2></label>
<?php
    include "lector.php";
    $leer = new lector();
    $leer -> ImpresionVentas();
?> 
<form action="vista2.php" method="post">
    <label for="moneda"><br>Tipo de Moneda</label>  <br>
        <select name="moneda" id="moneda">
            <option name="USD" value="USD">Dolar EU</option>
            <option name="EUR" value="EUR">Euro</option>
            <option name="BSS" value="BSS">Bolivar Soberano</option>
            <option name="COP" value="COP">Peso Colombiano</option>
            <option name="ARS" value="ARS">Peso Argentino</option>  <p>
        </select>
    <input type="submit" value="Convertir">               
</form>
</body>
</html>