<?php

//include("../backend/seguridad.php");
require("../backend/connection.php");

$id = $_GET["id"];


$stmt = $conn->prepare("SELECT id_proveedor, id_producto, precio_venta, email_comercial_vende, prefijo_pais, telefono, id_comercial_compra, comision FROM proveedor_producto where id=?");

$stmt->bind_param("i", $id);
$stmt->execute();
$stmt->bind_result($id_proveedor_bdd, $id_producto_bdd, $precio_venta_bdd, $email_comercial_vende_bdd, $prefijo_pais_bdd, $telefono_bdd, $id_comercial_compra_bdd, $comision_bdd);


while ($stmt->fetch()) {


  $id_proveedor = $id_proveedor_bdd;
  $id_producto = $id_producto_bdd;
  $precio_venta = $precio_venta_bdd;
  $email_comercial_vende = $email_comercial_vende_bdd;
  $prefijo_pais = $prefijo_pais_bdd;
  $telefono = $telefono_bdd;
  $id_comercial_compra = $id_comercial_compra_bdd;
  $comision = $comision_bdd;
}




$sqlProducto = "SELECT * FROM producto";
$resultProducto = mysqli_query($conn, $sqlProducto);


$sqlComercialCompra = "SELECT * FROM usuario WHERE tipo_usuario='4'";
$resultComercialCompra=  mysqli_query($conn, $sqlComercialCompra);




?>

<div class="form-layout">


  <input class="form-control valid" type="hidden" name="id"  id="id" value="<?=$id?>" placeholder="">
  <input class="form-control valid" type="hidden" name="id_proveedor"  id="id_proveedor" value="<?=$id_proveedor?>" placeholder="">

  <div class="content">    

    <h6 class="text-center"></h6>
    <div class="row">
        <div class="col-md-6">
            <div class="form-group">
                <label class="control-label">Producto</label>
                 <select data-title="SELECCIONA" name="id_producto" id="id_producto" value="<?=$id_producto?>" value=""data-live-search="true"  class="selectpicker form-control" required="">
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
                <label class="control-label">Precio de venta (€/Kg)</label>
                <input class="form-control valid" type="text" name="precio_venta"  id="precio_venta" value="<?=$precio_venta?>" placeholder="" required="">
            </div>
        </div>


        <div class="col-md-6">
            <div class="form-group">
                <label class="control-label">Email del comercial que vende el producto (para comunicaciones comerciales)</label>
                <input class="form-control valid" type="email" name="email_comercial_vende" id="email_comercial_vende" value="<?=$email_comercial_vende?>" placeholder="" required="">
            </div>
        </div>


        <div class="col-md-3">
            <div class="form-group">
                <label class="control-label">Prefijo país teléfono Whatsapp comercial</label>
                <input class="form-control valid" type="text" name="prefijo_pais" id="prefijo_pais" value="<?=$prefijo_pais?>" placeholder="" required="">
            </div>
        </div>

        <div class="col-md-6">
            <div class="form-group">
                <label class="control-label">Teléfono Whatsapp del comercial que vende el producto</label>
                <input class="form-control valid" type="text" name="telefono" id="telefono"  value="<?=$telefono?>" placeholder="" required="">
            </div>
        </div>

         <div class="col-md-6">
            <div class="form-group">
                <label class="control-label">Comercial de compra asignado</label>
               <select data-title="SELECCIONA" name="id_comercial_compra" id="id_comercial_compra"  value="<?=$id_comercial_compra?>" data-live-search="true"  class="selectpicker form-control" required="">

                 <?php
                    while($rowComercialCompra =mysqli_fetch_array($resultComercialCompra,MYSQLI_ASSOC)){
                      $id_c = $rowComercialCompra["id"];
                      $nombre = $rowComercialCompra["nombre"]." ".$rowComercialCompra["apellidos"];
                      ?>
                          <option value="<?=$id_c?>"><?=$nombre?></option>  
                      <?php
                    }
                  ?>

                 
                </select>  
            </div>
        </div>

        <div class="col-md-3">
            <div class="form-group">
                <label class="control-label">Comisión</label>
                <input class="form-control valid" type="number" step="0.01" name="comision" id="comision"  value="<?=$comision?>" placeholder="" required="">
            </div>
        </div>

         
        
    </div>
  </div>



</div><!-- form-layout -->


<script type="text/javascript">
  $("#id_producto").val("<?=$id_producto?>"); 
  $("#id_comercial_compra").val("<?=$id_comercial_compra?>"); 
</script>
