<?php
require_once "models/realizarPedido.php";

foreach ($_POST['dacom'] as $arrayPedidosIndividual){
    agregarArticulosCab($arrayPedidosIndividual[0],$arrayPedidosIndividual[1]);
}

header('Location: '."redireccion.php?action=mostrarPedidoSuc");
?>
