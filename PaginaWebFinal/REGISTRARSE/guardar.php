<?php
include("abrir.php");

$Nombre =$_POST ['Nombre'];
$Apellidos =$_POST['Apellidos'];
$Correo =$_POST['Correo'];
$Genero =$_POST['Genero'];
$Grupos =$_POST['Grupos'];





$consulta = "INSERT INTO animacion (Nombre, Apellidos, Correo, Genero, Grupos) VALUES ('$Nombre','$Apellidos','$Correo','$Genero','$Grupos')";

if ($conexion -> query ($consulta)=== TRUE){
    header("Location: index.html");
}
else{
    echo "Error: ". $consulta. "<br>". $conexion -> error;
}

$conexion-> close();

?>

