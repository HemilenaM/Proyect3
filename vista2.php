<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>CONVERSION</title>
</head>
<body bgcolor="black">  <center>
<label><h2><font color=royalblue> CONVERSION <br>DE TRANSACCIONES </h2></label>    

    <label for="moneda"><br> Moneda seleccionada: </label>
    <!-- <label for="moneda"> 
    <?php 
    
    ?> <br> -->

<?php
    include "lector.php";
    $verMoneda = new lector();
    $verMoneda -> impresionMonedas();
    include "convertidor.php";
    $conversion1 = new convertidor();
    $conversion1 -> convertir();
?>
</body>
</html>