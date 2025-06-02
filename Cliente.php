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

    $Tel= $_POST['Tel'];
    $Deuda= $_POST['Deuda'];
    $Cupon= $_POST['Cupon'];
    $Nombre= $_POST['Nombre'];
    $DPI= $_POST['DPI'];
    $Correo= $_POST['Correo'];
    $Direccion= $_POST['Direccion'];


    $consulta="INSERT INTO cliente(Tel,Deuda,Cupon,Nombre,DPI, Correo, Direccion )
    VALUES ('$Tel' , '$Deuda' , '$Cupon' , '$Nombre', '$DPI', '$Correo', '$Direccion')";

    mysqli_query ($conexion, $consulta);
    mysqli_close ($conexion);
}
function eliminar($conexion){
    $Tel= $_POST['Tel'];

$consulta ="DELETE FROM cliente WHERE Tel= '$Tel'";
    mysqli_query ($conexion,$consulta);
    mysqli_close ($conexion);

}
?>

