<?php

$conexion = new mysqli ("Localhost", "root","","id20192643_baseform");
if($conexion){
    /*echo "la gestion fue exitosa !!";*/
    header ("Location: index.php");

} else{
    echo "Fallo la gestion";
}

?>