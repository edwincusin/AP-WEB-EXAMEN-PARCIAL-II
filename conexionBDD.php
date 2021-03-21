<?php

//conectamos con el servidor
$con= pg_connect("host='localhost' dbname=aplicacionesweb port=5432 user=postgres password=admin1996") ;
//verificamos la conexion
if($con){
// echo "Conectado";
}else { echo "No se pudo conectar con el servidor";
    
}
?>
