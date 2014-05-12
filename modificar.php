<?php
require 'conexion.php';

$ide=$_POST["ID"];
$marca=$_POST["Marca"];
$modelo=$_POST["Modelo"];
$color=$_POST["Color"];
$precio=$_POST["Precio"];

$sql1="UPDATE autos SET Marca='$marca', Modelo='$modelo', Color='$color', Precio='$precio' WHERE id_auto=$ide";
$resultado=mysql_query($sql1,$con);

$res='falso';
if($resultado){
        $res='valido';
}else{
    $res="Error de conexión".mysql_error();
}
mysql_close($con);
echo $res;
?>