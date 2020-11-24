<?php

class BaseDatosTienda{

    public $usuarioBD="root";
    public $PasswordBD="";

public function __construct() {}

public function conectarBD(){
        try {
            $infoBD='mysql:host=localhost;dbname=tienda';
            $conexionBD= new PDO($infoBD, $this->usuarioBD, $this->PasswordBD);
            
            return $conexionBD;
            
        }catch (PDOException $error) {
            print "¡Error!: " . $error->getMessage() . "<br/>";
            
        }             
            
}
public function agregar_datos($consultaSQL){

    
    $conexionBD=$this->conectarBD();
    
    $consultaAgregarDatos=$conexionBD->prepare($consultaSQL);
    
    $resultado=$consultaAgregarDatos->execute();
    

    if($resultado){
        echo (" <script>
                    alert('Producto agregado con exito');
                    window.location='listaProductos.php';
                </script>");
       
    }else{
        echo (" <script>
                    alert('Error al  agregar Producto');
                    window.location='RegistroProducto.php';
                </script>");
    }
}
public function buscar_datos($consultaSQL){
     

    $conexionBD=$this->conectarBD();     
    $consultaBuscarDatos=$conexionBD->prepare($consultaSQL); 

    $consultaBuscarDatos->setFetchMode(PDO::FETCH_ASSOC);

    $consultaBuscarDatos->execute();
    return($consultaBuscarDatos->fetchAll());

    
}
public function actualizar_datos($consultaSQL){

    
    $conexionBD=$this->conectarBD();
    
    $consultaActualizarDatos=$conexionBD->prepare($consultaSQL);
    
    $resultado=$consultaActualizarDatos->execute();
    

    if($resultado){
        echo (" <script>
                    alert('Producto Actualizado con exito');
                    window.location='listaProductos.php';
                </script>");
       
    }else{
        echo ("Error al  Actualizar Producto");
    }
}
public function eliminar_datos($consultaSQL){

    
    $conexionBD=$this->conectarBD();
    
    $consultaEliminarDatos=$conexionBD->prepare($consultaSQL);
    
    $resultado=$consultaEliminarDatos->execute();
    

    if($resultado){
        echo (" <script>
                    alert('Producto Eliminado con exito');
                    window.location='listaProductos.php';
                </script>");
       
    }else{
        echo (" <script>
                    alert('Error al  Eliminar Producto');
                    window.location='listaProductos.php';
                </script>");
    }
}


}