<?php
    include "models/cargarArticulosEspe.php";

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
    <th scope="col">Nombre Planta</th>
    <th scope="col"></th>
</thead>
  <tbody>
      <?php
      for ($i=0; $i <sizeof($val) ; $i++) { 
      ?>
    <tr>
        
        <td><?php echo $val[$i]['COD_ART']; ?></td>
        <td id="nom<?php echo $val[$i]['COD_ART'];?>";><?php echo $val[$i]['NOM_ART']; ?></td>
        <td><?php echo $val[$i]['COL_ART']; ?></td>
        <td><?php echo $val[$i]['PES_ART']; ?></td>
        <td><?php echo $val[$i]['CAP_ART']; ?></td>
        <td><?php echo $val[$i]['NOM_PLA']; ?></td>
        <td><input type="number" min="1" value="1" max="<?php echo $val[$i]['CANTIDAD'];?>" name="canArti" id="<?php echo $val[$i]['COD_ART']; ?>" style="width: 50px; margin-right: 20px;">
            <input type="button" class="btn btn-primary" value="Agregar" onclick="agregarCarrito(<?php echo $val[$i]['COD_ART']; ?>,'<?php echo $val[$i]['NOM_ART'];?>')"></td>

    </tr>
    <?php   
    }
    ?>
</tbody>
</table>
<input type="button" value="Mostrar pedidos" onclick="mostrarPedido()">
</div>
<div id="tablaCrear">

</div>
<script>
    let pedidos=[];
    function agregarCarrito (codArti,i){
        pedidos.push([codArti,i,document.getElementById(codArti).value]);
        //alert(pedidos[0]);
    }
    function mostrarPedido(){
        let tabla = document.createElement('table');
        let thead = document.createElement('thead');
        let tbody = document.createElement('tbody');

        tabla.appendChild(thead);
        tabla.appendChild(tbody);
        tabla.style.borderCollapse = "collapse";
        tabla.style.borderSpacing = "0";

        thead.style.padding = "10px 20px";
        thead.style.border = "1px solid"
        tbody.style.padding = "10px 20px";
        tbody.style.border = "1px solid"
        

        document.getElementById('tablaCrear').appendChild(tabla);

        let row_1 = document.createElement('tr');
        let heading_1 = document.createElement('th');
        heading_1.innerHTML = "Codigo Producto";
        
        let heading_2 = document.createElement('th');
        heading_2.innerHTML = "Nombre Producto";
        
        row_1.appendChild(heading_1);
        row_1.appendChild(heading_2);
        thead.appendChild(row_1);

        let row_2 = document.createElement('tr');
        let row_2_data_1 = document.createElement('td');
        row_2_data_1.innerHTML = "primer codigo";
        let row_2_data_2 = document.createElement('td');
        row_2_data_2.innerHTML = "primer nombre";
        
        row_2.appendChild(row_2_data_1);
        row_2.appendChild(row_2_data_2);
        tbody.appendChild(row_2);
        
        let row_3 = document.createElement('tr');
        let row_3_data_1 = document.createElement('td');
        row_3_data_1.innerHTML = "segundo codigo";
        let row_3_data_2 = document.createElement('td');
        row_3_data_2.innerHTML = "segundo nombre";

        row_3.appendChild(row_3_data_1);
        row_3.appendChild(row_3_data_2);
        tbody.appendChild(row_3);

        pedidos.forEach(function(elemento, indice, array) {
        console.log(elemento, indice);
        })

    }
</script>