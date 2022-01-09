<?php
header('Access-Control-Allow-Origin: *');
header("Access-Control-Allow-Headers: X-API-KEY, Origin, X-Requested-With, Content-Type, Accept, Access-Control-Request-Method");
header("Access-Control-Allow-Methods: GET, POST, OPTIONS, PUT, DELETE");
header("Allow: GET, POST, OPTIONS, PUT, DELETE");

include 'conexion.php';

$codigo = $_POST['COD_ART'];
$nombre = $_POST['NOM_ART'];
$color = $_POST['COL_ART'];
$peso = $_POST['PES_ART'];
$capacidad = $_POST['CAP_ART'];
$cantidad = $_POST['CANTIDAD'];
$nivelR= $_POST['NIV_RIE'];
$planta = $_POST['COD_PLA_PER'];

$sqlinsertarArt = "INSERT INTO articulo (COD_ART,NOM_ART,COL_ART,PES_ART,CAP_ART)VALUES('$codigo','$nombre','$color','$peso','$capacidad')";

if ($mysqli -> query($sqlinsertarArt)===TRUE){
    echo json_encode ("ok se guardo correctamene");

    $sqlinsertar = "INSERT INTO articuloplanta (CANTIDAD,NIV_RIE,COD_ART_PER,COD_PLA_PER)VALUES('$cantidad','$nivelR','$codigo','$planta')";
    if ($mysqli -> query($sqlinsertar)===TRUE){

        echo json_encode ("ok se guardo correctamene");
    }else{
        echo json_encode ("error ".$sqlinsertar.$mysqli->error);
    }
}else{
    echo json_encode ("error ".$sqlinsertar.$mysqli->error);
}
$mysqli->close();

?>