<?php

//include("../backend/seguridad.php");
require("../backend/connection.php");

$id = $_GET["id"];



$stmt = $conn->prepare("SELECT producto, temperatura_optima, comision_compra, comision_venta FROM producto where id=?");

$stmt->bind_param("i", $id);
$stmt->execute();
$stmt->bind_result($producto_bdd, $temperatura_optima_bdd, $comision_compra_bdd, $comision_venta_bdd);


while ($stmt->fetch()) {
  $producto =  $producto_bdd;
  $temperatura_optima = $temperatura_optima_bdd;
  $comision_compra = $comision_compra_bdd;
  $comision_venta = $comision_venta_bdd;
}
  


?>

<div class="form-layout">

  <input class="form-control" type="hidden" name="id"  id="id" placeholder="" required="" value="<?=$id?>">

  <div class="content">    

    <h6 class="text-center"></h6>
     <div class="row">
          <div class="col-md-6">
              <div class="form-group">
                  <label class="control-label">Proucto Nombre</label>
                  <input class="form-control valid" type="text" name="producto"  id="producto" value="<?=$producto?>" placeholder="" required="">
              </div>
          </div>


          <div class="col-md-6">
              <div class="form-group">
                  <label class="control-label">Temperatura óptima de transporte</label>
                  <input class="form-control valid" type="text" name="temperatura_optima" id="temperatura_optima"  value="<?=$temperatura_optima?>" placeholder="" required="">
              </div>
          </div>

          <div class="col-md-6">
              <div class="form-group">
                  <label class="control-label">Comisión de compra que genera al comercial (€/Kg)</label>
                  <input class="form-control valid"  type="number" step="0.01" name="comision_compra" id="comision_compra" value="<?=$comision_compra?>" placeholder="" required="">
              </div>
          </div>

           <div class="col-md-6">
              <div class="form-group">
                  <label class="control-label">Comisión de venta que genera al comercial (€/Kg)</label>
                  <input class="form-control valid"  type="number" step="0.01" name="comision_venta"  id="comision_venta" value="<?=$comision_venta?>" placeholder="" required="">
              </div>
          </div>
         

      </div>
      
  </div>



</div><!-- form-layout -->
