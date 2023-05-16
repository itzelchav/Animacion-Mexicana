<?php
include("abr.php");

$Nombre =$_POST ['Nombre'];
$Apellidos =$_POST['Apellidos'];
$Grupo =$_POST['Grupo'];
$Correo =$_POST['Correo'];
$Cel =$_POST['Cel'];



$consulta = "INSERT INTO estudiantes (Nombre, Apellidos, Grupo, Correo, Cel) VALUES ('$Nombre','$Apellidos','$Grupo','$Correo','$Cel')";

if ($conexion -> query ($consulta)=== TRUE){
    header("Location: index.php");
}
else{
    echo "Error: ". $consulta. "<br>". $conexion -> error;
}

$conexion-> close();

?>

