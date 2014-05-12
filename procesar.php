<?php
require 'conexion.php';

$marca=$_POST["Marca"];
$modelo=$_POST["Modelo"];
$color=$_POST["Color"];
$precio=$_POST["Precio"];

$sql="INSERT INTO autos(id_auto, Marca, Modelo, Color, Precio)VALUES(' ','$marca','$modelo','$color','$precio')";
$resultado=mysql_query($sql,$con);

if($resultado){
 echo "El registro se almaceno de manera correcta";  
}else{
 die("Error de conexión".mysql_error());   
}
mysql_close($con);
?>