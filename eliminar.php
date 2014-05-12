<?php
require 'conexion.php';
$ide=$_POST["IDE"];
$sql="DELETE from autos where id_auto='$ide'";
$resultado=mysql_query($sql,$con);

$res=FALSE;
if($resultado){
    $res=TRUE;
}
mysql_close($con);
echo $res;
?>