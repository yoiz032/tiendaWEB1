<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Actualizacion de Productos</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <link rel="stylesheet" href="css/estilos.css">
</head>
<body>
<?php
//incluir  el archivo  
$id=$_GET["id"];
include("BaseDatosTienda.php");

$transaccion=new BaseDatosTienda();
//hacer la consulta 
$consultasSQL="SELECT * FROM productos WHERE idProducto='$id'";

$productos=$transaccion->buscar_datos($consultasSQL);

?>

 <div class="container">
            <div class=" row justify-content-center pt-5 mt-5">                
                <div class="col-md-6 formulario">
                <?php foreach($productos as $producto): ?>
                    <form action="procesaractualizacion.php" method="POST">                
                        <div class="form-group text-center">
                            <h1>EDITAR DE PRODUCTOS</h1>
                        </div>                                            
                        
                            <div class="row form-group mx-sm-3">
                            <input type="hidden" class="form-control" value="<?php echo($producto["idProducto"])?>" name="id">
                                <div class="col-6">
                                    <input type="text" class="form-control" value="<?php echo($producto["producto"])?>" name="producto">
                                </div>  
                                <div class="col-6">
                                    <input type="text" class="form-control" value="<?php echo($producto["marca"])?>" name="marca">
                                </div>                                      
                            
                                <div class="col-12 mt-3">
                                    <input type="number" class="form-control" value="<?php echo($producto["precio"])?>" name="precio">
                                </div>
                                <div class="col-12 mt-3 ">
                                    <textarea  class="form-control"  name="descripcion"  ><?php echo($producto["descripcion"])?></textarea>
                                </div>
                                <div class="col-12 mt-3 ">
                                     <input type="text" class="form-control" placeholder="Ingresa Url de la imagen" name="foto" value="<?php echo($producto["foto"])?>">
                                </div>
                                <div class="col-12 mt-3 ">
                                    <button type="submit" class="btn btn-lg btn-block enviar" name="botonactualizar"> Actualizar  </button>
                                </div>
                            </div>

                    </form>
                <?php endforeach?>
                </div>
            </div> 
        </div>


<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>    
</body>
</html>