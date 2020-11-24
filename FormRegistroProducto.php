<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registro</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
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
                    <a class="nav-link" href="listaProductos.php">Tienda <span class="sr-only">(current)</span></a>
                </li>
            
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Opciones
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                    <a class="dropdown-item" href="FormRegistroProducto.php">Registro de productos</a>
                    <a class="dropdown-item" href="listaProductos.php">Modificacion de productos</a>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item" href="#">Eliminar productos</a>
                    </div>
                </li>                
                </ul>
                
                </form>
            </div>
        </nav>

            
        
        
    </header>
    <main>
    
    
        <div class="container">
            <div class=" row justify-content-center pt-5 mt-5">                
                <div class="col-md-6 formulario">
                    <form action="RegistroProducto.php" method="POST">                
                        <div class="form-group text-center">
                            <h1>REGISTRO DE PRODUCTOS</h1>
                        </div>                                            
                        
                            <div class="row form-group mx-sm-3">
                                <div class="col-6">
                                    <input type="text" class="form-control" placeholder="Nombre del Producto" name="producto">
                                </div>  
                                <div class="col-6">
                                    <input type="text" class="form-control" placeholder="Marca del Producto" name="marca">
                                </div>                                      
                            
                                <div class="col-12 mt-3">
                                    <input type="number" class="form-control" placeholder="precio" name="precio">
                                </div>
                                <div class="col-12 mt-3 ">
                                    <textarea  class="form-control" placeholder="Descripcion del producto" name="descripcion"  ></textarea>
                                </div>
                                <div class="col-12 mt-3 ">
                                     <input type="text" class="form-control" placeholder="Ingresa Url de la imagen" name="foto">
                                </div>
                                <div class="col-12 mt-3 ">
                                    <button type="submit" class="btn btn-lg btn-block enviar" name="botonenviar"> Registrar  </button>
                                </div>
                            </div>
                        
                    
                        
            
                    </form>
                </div>
            </div> 
        </div>
    </main>
 
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>  
</body>
</html>