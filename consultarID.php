<?php

require 'conexion.php';
$nuevaID=$_POST['ID'];
$sql = "SELECT id_auto FROM autos where id_auto=$nuevaID";
$resultado = mysql_query($sql, $con);
$res='falso';
if ($resultado) {
    while ($fila = mysql_fetch_assoc($resultado)) {
        $res='valido';
    }
} else {
    $res='falso';
}
mysql_close($con);
echo $res;
?>