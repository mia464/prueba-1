<?php

$conexion = mysqli_connect('localhost','root','','coca-cola') or die (mysqli_error($mysqli));
diferencia ($conexion);

function diferencia($conexion){

    if(isset($_POST['Guardar'])){
        insertar ($conexion);
    }
    if(isset($_POST['Borrar'])){
        eliminar($conexion);
    }
}

insertar ($conexion);
function insertar ($conexion){

    $Direccion= $_POST['Direccion'];
    $Total= $_POST['Total'];
    $Fecha= $_POST['Fecha'];
    $Cliente= $_POST['Cliente'];
    $Paquetes= $_POST['Paquetes'];


    $consulta="INSERT INTO Entregas(Direccion,Total,Fecha, Cliente,Paquetes)
    VALUES ('$Direccion' , '$Total' , '$Fecha' , '$Cliente' , '$Paquetes')";

    mysqli_query ($conexion, $consulta);
    mysqli_close ($conexion);
}
function eliminar($conexion){
    $Nombre= $_POST['Nombre'];

$consulta ="DELETE FROM Entregas WHERE Nombre= '$Nombre'";
    mysqli_query ($conexion,$consulta);
    mysqli_close ($conexion);

}
?>