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

    $Producto= $_POST['Producto'];
    $Precio= $_POST['Precio'];
    $Descripcion= $_POST['Descripcion'];
    $Factura= $_POST['Factura'];
    $Cantidad= $_POST['Cantidad'];


    $consulta="INSERT INTO producto(Producto,Precio,Descripcion,Factura,Cantidad)
    VALUES ('$Producto' , '$Precio' , '$Descripcion' , '$Factura' , '$Cantidad')";

    mysqli_query ($conexion, $consulta);
    mysqli_close ($conexion);
}
function eliminar($conexion){
    $Producto= $_POST['Producto'];

$consulta ="DELETE FROM producto WHERE Producto= '$Producto'";
    mysqli_query ($conexion,$consulta);
    mysqli_close ($conexion);

}
?>