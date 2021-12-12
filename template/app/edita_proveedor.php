<?php

//include("../backend/seguridad.php");
require("../backend/connection.php");

$id = $_GET["id"];



$stmt = $conn->prepare("SELECT nombre_fiscal, direccion_fiscal, nombre_corto, cp, municipio, pais, eori_vat, banco_moneda, banco_nombre, banco_cuenta, banco_swift, banco_bic, banco_pdf, email_pagos FROM proveedor where id=?");

$stmt->bind_param("i", $id);
$stmt->execute();
$stmt->bind_result($nombre_fiscal_bdd, $direccion_fiscal_bdd, $nombre_corto_bdd, $cp_bdd, $municipio_bdd, $pais_bdd, $eori_vat_bdd, $banco_moneda_bdd, $banco_nombre_bdd, $banco_cuenta_bdd, $banco_swift_bdd, $banco_bic_bdd,$banco_pdf_bdd, $email_pagos_bdd);


while ($stmt->fetch()) {


  $nombre_fiscal =  $nombre_fiscal_bdd;
  $nombre_corto =  $nombre_corto_bdd;
  $direccion_fiscal = $direccion_fiscal_bdd;
  $eori_vat = $nombre_corto_bdd;
  $cp = $cp_bdd;
  $municipio  = $municipio_bdd;
  $pais = $pais_bdd;
  $eori_vat = $eori_vat_bdd;
  $banco_moneda = $banco_moneda_bdd;
  $banco_nombre = $banco_nombre_bdd;
   $banco_cuenta = $banco_cuenta_bdd;
  $banco_swift = $banco_swift_bdd;
  $banco_pdf = $banco_pdf_bdd;
   $banco_bic = $banco_bic_bdd;
  $email_pagos = $email_pagos_bdd;
  

}
  


?>

<div class="form-layout">
  <input class="form-control" type="hidden" name="id"  id="id" placeholder="" required="" value="<?=$id?>">

  <div class="content">    

    <h6 class="text-center"></h6>
    <div class="row">
        <div class="col-md-4">
            <div class="form-group">
                <label class="control-label">Nombre fiscal</label>
                <input class="form-control valid" type="text" name="nombre_fiscal" id="nombre_fiscal" value="<?=$nombre_fiscal?>" placeholder="" required="">
            </div>
        </div>


        <div class="col-md-4">
            <div class="form-group">
                <label class="control-label">Dirección fiscal</label>
                <input class="form-control valid" type="text" name="direccion_fiscal"  id="direccion_fiscal" value="<?=$direccion_fiscal?>" placeholder="" required="">
            </div>
        </div>


         <div class="col-md-4">
            <div class="form-group">
                <label class="control-label">Nombre corto</label>
                <input class="form-control valid" type="text" name="nombre_corto" id="nombre_corto" value="<?=$nombre_corto?>" placeholder="" required="">
            </div>
        </div>


        <div class="col-md-3">
            <div class="form-group">
                <label class="control-label">Código postal</label>
                <input class="form-control valid" type="text" name="cp" id="cp" value="<?=$nombre_fiscal?>" placeholder="" required="">
            </div>
        </div>

        <div class="col-md-3">
            <div class="form-group">
                <label class="control-label">Municipio</label>
                <input class="form-control valid" type="text" name="municipio" id="municipio"  value="<?=$municipio?>" placeholder="" required="">
            </div>
        </div>

         <div class="col-md-3">
            <div class="form-group">
                <label class="control-label">País</label>
               <input class="form-control valid" type="text" name="pais" id="pais" value="<?=$pais?>" placeholder="" required="">
            </div>
        </div>

         <div class="col-md-3">
            <div class="form-group">
                <label class="control-label">EORI/VAT</label>
                <input class="form-control valid" type="text" name="eori_vat" id="eori_vat" value="<?=$eori_vat?>" placeholder="" required="">
            </div>
        </div>

         <div class="col-md-3">
            <div class="form-group">
                <label class="control-label">IVA</label>
                <select data-title="SELECCIONA" name="iva" id="iva"  value="<?=$iva?>" data-live-search="true"  class="selectpicker form-control" required="">

                  <option selected="" disabled="">Selecciona</option>
                  <option value="0%">0%</option>
                  <option value="21%">21%</option>
                  <option value="4%">4%</option>
                  <option value="16%">16%</option>
                </select>  
            </div>
        </div>


        <div class="col-md-3">
            <div class="form-group">
                <label class="control-label">Banco nombre</label>
               <input class="form-control valid" type="text" name="banco_nombre" id="banco_nombre" value="<?=$banco_nombre?>" placeholder="" required="">
            </div>
        </div>

        <div class="col-md-3">
            <div class="form-group">
                <label class="control-label">Moneda</label>
               <input class="form-control valid" type="text" name="banco_moneda" id="banco_moneda" value="<?=$banco_moneda?>" placeholder="" required="">
            </div>
        </div>
         <div class="col-md-3">
            <div class="form-group">
                <label class="control-label">Banco cuenta</label>
               <input class="form-control valid" type="text" name="banco_cuenta"  id="banco_cuenta" value="<?=$banco_cuenta?>" placeholder="" required="">
            </div>
        </div>
        <div class="col-md-3">
            <div class="form-group">
                <label class="control-label">Banco SWIFT</label>
               <input class="form-control valid" type="text" name="banco_swift" id="banco_swift" value="<?=$banco_swift?>" placeholder="" required="">
            </div>
        </div>
        <div class="col-md-3">
            <div class="form-group">
                <label class="control-label">Banco BIC</label>
               <input class="form-control valid" type="text" name="banco_bic" id="banco_bic" value="<?=$banco_bic?>" placeholder="" required="">
            </div>
        </div>

         <div class="col-md-3">
            <div class="form-group">
                <label class="control-label">Información bancaria (PDF)</label>
               <input class="form-control valid" type="file" name="banco_pdf" id="banco_pdf" value="<?=$banco_pdf?>" placeholder="" required="">
            </div>
        </div>

        <div class="col-md-3">
            <div class="form-group">
                <label class="control-label">Email para pagos</label>
               <input class="form-control valid" type="email" name="email_pagos" id="email_pagos" value="<?=$email_pagos?>" placeholder="" required="">
            </div>
        </div>
        
    </div>
   

     <div class="row" id="tab-content-proveedor">
        <div class="col-md-12">
            <div class="card">
                <div class="header">
                    <!--h4 class="title">Generales</h4>
                    <p class="category">Info</p-->
                </div>
                <div class="content content-full-width">


                  <nav>
                    <div class="nav nav-tabs" id="nav-tab" role="tablist">
                      <a class="nav-item nav-link active" id="nav-productos-tab" data-toggle="tab" href="#nav-productos" role="tab" aria-controls="nav-productos" aria-selected="true">Productos</a>
                      <a class="nav-item nav-link" id="nav-direcciones-tab" data-toggle="tab" href="#nav-direcciones" role="tab" aria-controls="nav-direcciones" aria-selected="false">Direcciones</a>
                     
                    </div>
                  </nav>
                  <div class="tab-content" id="nav-tabContent">
                    <div class="tab-pane fade show active" id="nav-productos" role="tabpanel" aria-labelledby="nav-productos-tab">
                      <div id="tabla_productos"></div>
                    </div>
                    <div class="tab-pane fade" id="nav-direcciones" role="tabpanel" aria-labelledby="nav-direcciones-tab">
                      <div id="tabla_direcciones"></div>
                    </div>
                   
                  </div>

              

                </div>
            </div>
        </div>
    </div>
      
  </div>



</div><!-- form-layout -->

<script type="text/javascript">

  $(document).ready(function() {
    $("#tabla_productos").load('tabla_proveedor_productos.php?id_proveedor=<?=$id?>');
    $("#tabla_direcciones").load('tabla_proveedor_direcciones.php?id_proveedor=<?=$id?>');
          
});
</script>
