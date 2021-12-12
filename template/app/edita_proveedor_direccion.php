<?php

//include("../backend/seguridad.php");
require("../backend/connection.php");

$id = $_GET["id"];


$stmt = $conn->prepare("SELECT id_proveedor, calle, numero_interior, numero_exterior, cp, municipio, estado, pais FROM proveedor_direccion where id=?");

$stmt->bind_param("i", $id);
$stmt->execute();
$stmt->bind_result($id_proveedor_bdd, $calle_bdd, $numero_interior_bdd, $numero_exterior_bdd, $cp_bdd, $municipio_bdd, $estado_bdd, $pais_bdd);


while ($stmt->fetch()) {


  $id_proveedor = $id_proveedor_bdd;
  $calle = $calle_bdd;
  $numero_interior = $numero_interior_bdd;
  $numero_exterior = $numero_exterior_bdd;
  $cp = $cp_bdd;
  $municipio = $municipio_bdd;
  $estado = $estado_bdd;
  $pais = $pais_bdd;
}




?>

<div class="form-layout">
  <input class="form-control valid" type="hidden" name="id"  id="id" value="<?=$id?>" placeholder="">
  <input class="form-control valid" type="hidden" name="id_proveedor"  id="id_proveedor" value="<?=$id_proveedor?>" placeholder="">

  <div class="content">    

    <h6 class="text-center"></h6>
    <div class="row">
        

        <div class="col-md-6">
            <div class="form-group">
                <label class="control-label">Calle</label>
                <input class="form-control valid" type="text" name="calle"  id="calle" value="<?=$calle?>" placeholder="" required="">
            </div>
        </div>


        <div class="col-md-3">
            <div class="form-group">
                <label class="control-label">Número exterior</label>
                <input class="form-control valid" type="text" name="numero_exterior" id="numero_exterior" value="<?=$numero_exterior?>" placeholder="" required="">
            </div>
        </div>

        <div class="col-md-3">
            <div class="form-group">
                <label class="control-label">Número interior</label>
                <input class="form-control valid" type="text" name="numero_interior" id="numero_interior" value="<?=$numero_interior?>" placeholder="" required="">
            </div>
        </div>

     

        <div class="col-md-3">
            <div class="form-group">
                <label class="control-label">Código Postal</label>
                <input class="form-control valid" type="text" name="cp" id="cp" value="<?=$cp?>"  placeholder="" required="">
            </div>
        </div>

         <div class="col-md-3">
            <div class="form-group">
                <label class="control-label">Municipio</label>
                <input class="form-control valid" type="text" name="municipio" id="municipio" value="<?=$municipio?>" placeholder="" required="">
            </div>
        </div>

        <div class="col-md-3">
            <div class="form-group">
                <label class="control-label">Estado</label>
                <input class="form-control valid" type="text" name="estado" id="estado" value="<?=$estado?>" placeholder="" required="">
            </div>
        </div>

         <div class="col-md-3">
            <div class="form-group">
                <label class="control-label">País</label>
                <input class="form-control valid" type="text" name="pais" id="pais" value="<?=$pais?>" placeholder="" required="">
            </div>
        </div>

      </div>

      
  </div>



</div><!-- form-layout -->

