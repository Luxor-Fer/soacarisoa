<?php
    include "models/cargarArticulos.php";
    if ( $result != null ){
        $objt = json_decode($resultJSON);
        $val = json_decode(json_encode($objt),true);
        #echo $val[0]['CED_CLI'];
    }

?>

<div style="padding-left: 30px; padding-right: 30px; padding-top: 15px;">
<table class="table table-striped">
<thead>
<tr>
    <th scope="col">Codigo</th>
    <th scope="col">Nombre</th>
    <th scope="col">Color</th>
    <th scope="col">Peso</th>
    <th scope="col">Capacidad</th>
    <th scope="col">Codigo Planta</th>
    <th scope="col">Nombre Planta</th>
</thead>
  <tbody>
      <?php
      for ($i=0; $i <sizeof($val) ; $i++) { 
      ?>
    <tr>
        
        <td><?php echo $val[$i]['COD_ART']; ?></td>
        <td><?php echo $val[$i]['NOM_ART']; ?></td>
        <td><?php echo $val[$i]['COL_ART']; ?></td>
        <td><?php echo $val[$i]['PES_ART']; ?></td>
        <td><?php echo $val[$i]['CAP_ART']; ?></td>
        <td><?php echo $val[$i]['COD_PLA_PER']; ?></td>
        <td><?php echo $val[$i]['NOM_PLA']; ?></td>

    </tr>
    <?php   
    }
    ?>
</tbody>
</table>
</div>