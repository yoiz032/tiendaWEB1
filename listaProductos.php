<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>lista de productos</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <link rel="stylesheet" href="css/estilos.css">
</head>
<body>
    <header>
        <nav class="navbar navbar-expand-lg navbar-dark bg-secondary">
            <a class="navbar-brand" href="#">INICIO</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav mr-auto">
                <li class="nav-item active">
                    <a class="nav-link" href="#">Tienda <span class="sr-only">(current)</span></a>
                </li>
            
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Opciones
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                    <a class="dropdown-item" href="FormRegistroProducto.php">Registro de productos</a>
                    <a class="dropdown-item" href="#">Modificacion de productos</a>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item" href="#">Eliminar productos</a>
                    </div>
                </li>                
                </ul>
                
                </form>
            </div>
        </nav>
    </header>

<?php
//incluir  el archivo  
include("BaseDatosTienda.php");
//hacer la consulta 
$consultasSQL="SELECT * FROM productos WHERE 1";

$transaccion=new BaseDatosTienda();
$productos=$transaccion->buscar_datos($consultasSQL);

?>
<div class="container ">
    <div class="row row-cols-1 row-cols-md-3">
    <?php foreach($productos as $producto): ?>
        <div class="col mb-4">
            <div class="card h-100 formulario">
                <img src="<?php echo($producto["foto"])?>" class="card-img-top" alt="imagen">
                <div class="card-body">
                    <h5 class="card-title "><?php echo($producto["producto"])?> <?php echo($producto["marca"])?></h5>                
                    <p class="card-text "><?php echo($producto["descripcion"])?></p>
                    <div class="card-footer text-center text-white bg-primary">
                        <h5 class="card-title"><?php echo($producto["precio"])?></h5>
                    </div>
                    <p class="card-text text-center">
                        <a href="editarproducto.php?id=<?php echo($producto["idProducto"])?>" class="btn btn-warning">Editar</a>
                        <a href="eliminarproducto.php?id=<?php echo($producto["idProducto"])?>"class="btn btn-danger">Eliminar</a>
                    </p>
                </div>
            </div>
        </div>


    <?php endforeach?>
    </div>
</div>

<script src="confirmacion.js"></script>   
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script> 
</body>
</html>