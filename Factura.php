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

    $Fecha= $_POST['Fecha'];
    $Consumidor= $_POST['Consumidor'];
    $Factura= $_POST['Factura'];
    $Producto= $_POST['Producto'];
    $Paquetes= $_POST['Paquetes'];
    $Total= $_POST['Total'];
    

    $consulta="INSERT INTO factura(Fecha,Consumidor,Factura,Producto,Paquetes, Total )
    VALUES ('$Fecha' , '$Consumidor' , '$Factura' , '$Producto', '$Paquetes', '$Total')";

    mysqli_query ($conexion, $consulta);
    mysqli_close ($conexion);
}
function eliminar($conexion){
    $Fecha= $_POST['Fecha'];

$consulta ="DELETE FROM factura WHERE Fecha= '$Fecha'";
    mysqli_query ($conexion,$consulta);
    mysqli_close ($conexion);

}
?>

