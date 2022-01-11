<?php
print_r($_POST['dacom']);
echo '<br>';
require_once "models/realizarPedido.php";

foreach ($_POST['dacom'] as $arrayPedidosIndividual){
    echo "_________ $arrayPedidosIndividual[0], $arrayPedidosIndividual[1]"."<br>";
    agregarArticulosCab($arrayPedidosIndividual[0],$arrayPedidosIndividual[1]);
}
?>
