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

    $Cantidad= $_POST['Cantidad'];
    $Tel= $_POST['Tel'];
    $Distribuidor= $_POST['Distribuidor'];
    $DPI= $_POST['DPI'];
    $Ruta= $_POST['Ruta'];


    $consulta="INSERT INTO Distribuidor(Cantidad,Tel,Distribuidor,DPI,Ruta)
    VALUES ('$Cantidad' , '$Tel' , '$Distribuidor' , '$DPI' , '$Ruta')";

    mysqli_query ($conexion, $consulta);
    mysqli_close ($conexion);
}
function eliminar($conexion){
    $Nombre= $_POST['Nombre'];

$consulta ="DELETE FROM Distribuidor WHERE Nombre= '$Nombre'";
    mysqli_query ($conexion,$consulta);
    mysqli_close ($conexion);

}
?>