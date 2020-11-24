<?php

include("BaseDatosTienda.php");

if(isset($_POST["botonenviar"])){
    
    
    $producto=$_POST["producto"];
    $marca=$_POST["marca"];
    $precio=$_POST["precio"];
    $descripcion=$_POST["descripcion"];
    $foto=$_POST["foto"];

    $transaccion=new BaseDatosTienda();
    
    $consultaSQL="INSERT INTO productos(producto,marca,precio,descripcion,foto) VALUES ('$producto','$marca','$precio','$descripcion','$foto')";
    
    $transaccion->agregar_datos($consultaSQL);

    
}

?>