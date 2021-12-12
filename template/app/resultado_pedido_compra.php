<?php
//include("../assets/includes/functions.php");
//include("../assets/includes/seguridad.php");
//session_start();

require("../backend/connection.php");



$id_proveedor = $_GET["id_proveedor"];



$sqlProducto = "SELECT proveedor_producto.id, producto.producto FROM proveedor_producto INNER JOIN producto ON proveedor_producto.id_producto = producto.id WHERE proveedor_producto.id_proveedor='".$id_proveedor."'";
$resultProducto = mysqli_query($conn, $sqlProducto);



$sqlDireccion = "SELECT * FROM proveedor_direccion WHERE id_proveedor='".$id_proveedor."'";
$resultDireccion=  mysqli_query($conn, $sqlDireccion);


?>

  

  <div class="col-md-6">
      <div class="form-group">
          <label class="control-label">Producto</label>
          <select data-title="SELECCIONA" name="id_producto" id="id_producto" data-live-search="true"  class="selectpicker form-control"  onchange="datos_producto();" required="">
              <option disabled="" selected="">Selecciona</option>
             <?php
                while($rowProducto =mysqli_fetch_array($resultProducto,MYSQLI_ASSOC)){
                  $id_p= $rowProducto["id"];
                  $nombre = $rowProducto["producto"];
                  ?>
                      <option value="<?=$id_p?>"><?=$nombre?></option>  
                  <?php
                }
              ?>
          </select>  
      </div>
  </div>

  <div class="col-md-6">
    <div class="form-group">
        <label class="control-label">Dirección de carga</label>
        <select data-title="SELECCIONA" name="id_direccion" id="id_direccion" data-live-search="true"  class="selectpicker form-control" required="">
          <option disabled="" selected="">Selecciona</option>

          <?php
              while($rowDireccion =mysqli_fetch_array($resultDireccion,MYSQLI_ASSOC)){
                $id_d= $rowDireccion["id"];
                $nombre = $rowDireccion["calle"]." #".$rowDireccion["numero_exterior"].", CP:".$rowDireccion["cp"].", ".$rowDireccion["municipio"].", ".$rowDireccion["estado"].", ".$rowDireccion["pais"];
                ?>
                    <option value="<?=$id_d?>"><?=$nombre?></option>  
                <?php
              }
            ?>
        </select> 
    </div>
  </div>


