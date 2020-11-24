<?php
//incluir  el archivo  
$id=$_GET["id"];
include("BaseDatosTienda.php");
//hacer la consulta 
$consultasSQL="DELETE FROM productos WHERE idProducto='$id'";

$transaccion=new BaseDatosTienda();
$productos=$transaccion->eliminar_datos($consultasSQL);

?>