<?php
//paso 1:importar el archivo que se encargara de conectarme con la base de datos
require 'config/conex.php';

//paso 2:capturar las variables
$cantidad = $_POST["txt_cantidad"];
$total = 1500 * $cantidad;

//paso 3: armar la sentencia SQL
$sql = "INSERT INTO ventas(valor) VALUES (".$total.")";

//paso 4:mandar la orden a la base de datos
if($dbh->query($sql))
{
    //aparecera este mensaje
    echo "venta registrada: $".$total;
}else
{
    //error aparece esto
    echo "Error en la venta";
}

?> 