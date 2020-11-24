<?php
//incluir  el archivo  
include("BaseDatosTienda.php");
//hacer la consulta 
if(isset($_POST["botonactualizar"])){
    
    $id=$_POST["id"];
    $producto=$_POST["producto"];
    $marca=$_POST["marca"];
    $precio=$_POST["precio"];
    $descripcion=$_POST["descripcion"];
    $foto=$_POST["foto"];

    $transaccion=new BaseDatosTienda();
    
    $consultaSQL="UPDATE productos SET producto='$producto', marca='$marca', precio='$precio', descripcion='$descripcion', foto='$foto' WHERE idProducto='$id'";
    
    $transaccion->actualizar_datos($consultaSQL);

    
    
}



?>