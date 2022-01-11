<?php
header('Access-Control-Allow-Origin: *');
header("Access-Control-Allow-Headers: X-API-KEY, Origin, X-Requested-With, Content-Type, Accept, Access-Control-Request-Method");
header("Access-Control-Allow-Methods: GET, POST, OPTIONS, PUT, DELETE");
header("Allow: GET, POST, OPTIONS, PUT, DELETE");

include 'conexion.php';


$val = json_decode(json_encode($_SESSION['usuario']),true);
$sucPer = $val[0]['COD_SUC'];

$sqlInsertCabecera = "INSERT INTO cabezera (COD_SUC_PER,FEC_SUC)VALUES('$sucPer',current_timestamp())";

if ($conn -> query($sqlInsertCabecera)===TRUE){
    echo json_encode ("ok se guardo correctamene cabezera");

}else{
    echo json_encode ("error ".$sqlInsertCabecera.$conn->error);
}

function agregarArticulosCab($codArti, $canArti){
    #$sqlArticuloIngresado = "SELECT MAX(COD_ART) FROM ARTICULO";
    include "conexion.php";
    $sqlinsertar = "INSERT INTO detalle (COD_CAB_PER,COD_ART_PER,CANTIDAD)VALUES((SELECT MAX(COD_CAB) FROM cabezera),'$codArti','$canArti')";
    if ($mysqli -> query($sqlinsertar)===TRUE){

        echo json_encode ("ok se guardo correctamene producto");
    }else{
        echo json_encode ("error ".$sqlinsertar.$mysqli->error);
    }
}

?>