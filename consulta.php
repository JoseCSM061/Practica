<?php

require 'conexion.php';
$sql = "SELECT id_auto, Marca, Modelo, Color, Precio FROM autos";
$resultado = mysql_query($sql, $con);

if ($resultado) {
    $datos = array();
    $i = 0;
    while ($fila = mysql_fetch_assoc($resultado)) {
        $datos[$i] = $fila;
        $i++;
    }
} else {
    die("Error de conexión" . mysql_error());
}
mysql_close($con);
echo json_encode($datos)
?>