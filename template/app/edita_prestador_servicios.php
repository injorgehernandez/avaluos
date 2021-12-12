<?php

//include("../backend/seguridad.php");
require("../backend/connection.php");

$id = $_GET["id"];



$stmt = $conn->prepare("SELECT servicio_que_presta,nombre_fiscal, nombre_corto, direccion_fiscal, cp, municipio, pais, eori_vat, email_comercial, email_pagos, telefono_comercial, banco_moneda, banco_nombre, banco_cuenta, banco_swift, banco_bic FROM prestador_servicios where id=?");

$stmt->bind_param("i", $id);
$stmt->execute();
$stmt->bind_result($servicio_que_presta_bdd, $nombre_fiscal_bdd, $nombre_corto_bdd, $direccion_fiscal_bdd, $cp_bdd, $municipio_bdd, $pais_bdd, $eori_vat_bdd, $email_comercial_bdd, $email_pagos_bdd, $telefono_comercial_bdd, $banco_moneda_bdd, $banco_nombre_bdd, $banco_cuenta_bdd, $banco_swift_bdd, $banco_bic_bdd);


while ($stmt->fetch()) {


  $nombre_fiscal =  $nombre_fiscal_bdd;
  $servicio_que_presta =  $servicio_que_presta_bdd;
  $nombre_corto =  $nombre_corto_bdd;
  
  $direccion_fiscal = $direccion_fiscal_bdd;
  $cp = $cp_bdd;
  $municipio = $municipio_bdd;
  $pais = $pais_bdd;
  $eori_vat = $eori_vat_bdd;


  $email_comercial = $email_comercial_bdd;
  $email_pagos = $email_pagos_bdd;
  $telefono_comercial = $telefono_comercial_bdd;

  $banco_moneda  = $banco_moneda_bdd;
  $banco_nombre = $banco_nombre_bdd;
  $banco_cuenta = $banco_cuenta_bdd;
  $banco_swift = $banco_swift_bdd;
  $banco_bic = $banco_bic_bdd;

}
  


?>

<div class="form-layout">

  <input class="form-control" type="hidden" name="id"  id="id" placeholder="" required="" value="<?=$id?>">

  <div class="content">    

    <h6 class="text-center"></h6>
     <div class="row">


                <div class="col-md-6">
                    <div class="form-group">
                        <label class="control-label">Servicio que presta</label>
                        <input class="form-control valid" type="text" name="servicio_que_presta" id="servicio_que_presta" value="<?=$servicio_que_presta?>" placeholder="" required="">
                    </div>
                </div>

                <div class="col-md-6">
                    <div class="form-group">
                        <label class="control-label">Nombre fiscal</label>
                        <input class="form-control valid" type="text" name="nombre_fiscal" id="nombre_fiscal" value="<?=$nombre_fiscal?>" placeholder="" required="">
                    </div>
                </div>


                <div class="col-md-6">
                    <div class="form-group">
                        <label class="control-label">Nombre corto</label>
                        <input class="form-control valid" type="text" name="nombre_corto" id="nombre_corto" value="<?=$nombre_corto?>" placeholder="" required="">
                    </div>
                </div>

                 <div class="col-md-6">
                    <div class="form-group">
                        <label class="control-label">Direccion fiscal</label>
                        <input class="form-control valid" type="text" name="direccion_fiscal" id="direccion_fiscal"  value="<?=$direccion_fiscal?>" placeholder="" required="">
                    </div>
                </div>

                <div class="col-md-6">
                    <div class="form-group">
                        <label class="control-label">Código postal</label>
                        <input class="form-control valid" type="text" name="cp" id="cp" value="<?=$cp?>" placeholder="" required="">
                    </div>
                </div>

                <div class="col-md-6">
                    <div class="form-group">
                        <label class="control-label">Municipio</label>
                        <input class="form-control valid" type="text" name="municipio" id="municipio" value="<?=$municipio?>" placeholder="" required="">
                    </div>
                </div>

                 <div class="col-md-6">
                    <div class="form-group">
                        <label class="control-label">País</label>
                       <input class="form-control valid" type="text" name="pais" id="pais" value="<?=$pais?>" placeholder="" required="">
                    </div>
                </div>

                 <div class="col-md-6">
                    <div class="form-group">
                        <label class="control-label">EORI/VAT</label>
                        <input class="form-control valid" type="text" name="eori_vat" id="eori_vat" value="<?=$eori_vat?>" placeholder="" required="">
                    </div>
                </div>

              
                 <div class="col-md-6">
                    <div class="form-group">
                        <label class="control-label">Email Pagos</label>
                       <input class="form-control valid" type="email" name="email_pagos"  id="email_pagos" value="<?=$email_pagos?>" placeholder="" required="">
                    </div>
                </div>


                 <div class="col-md-6">
                    <div class="form-group">
                        <label class="control-label">Email Comercial</label>
                       <input class="form-control valid" type="email" name="email_comercial"  id="email_comercial" value="<?=$email_comercial?>" placeholder="" required="">
                    </div>
                </div>

                <div class="col-md-6">
                    <div class="form-group">
                        <label class="control-label">Teléfono Comercial</label>
                       <input class="form-control valid" type="text" name="telefono_comercial"  id="telefono_comercial" value="<?=$telefono_comercial?>" placeholder="" required="">
                    </div>
                </div>




                <div class="col-md-6">
                    <div class="form-group">
                        <label class="control-label">Banco moneda</label>
                       <input class="form-control valid" type="text" name="banco_moneda"  id="banco_moneda" value="<?=$banco_moneda?>" placeholder="" required="">
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label class="control-label">Banco nombre</label>
                       <input class="form-control valid" type="text" name="banco_nombre" id="banco_nombre" value="<?=$banco_nombre?>" placeholder="" required="">
                    </div>
                </div>
                 <div class="col-md-6">
                    <div class="form-group">
                        <label class="control-label">Banco cuenta</label>
                       <input class="form-control valid" type="text" name="banco_cuenta" id="banco_cuenta" value="<?=$banco_cuenta?>" placeholder="" required="">
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label class="control-label">Banco SWIFT</label>
                       <input class="form-control valid" type="text" name="banco_swift" id="banco_swift" value="<?=$banco_swift?>" placeholder="" required="">
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label class="control-label">Banco BIC</label>
                       <input class="form-control valid" type="text" name="banco_bic" id="banco_bic" value="<?=$banco_bic?>" placeholder="" required="" >
                    </div>
                </div>

               

            </div>
      
  </div>



</div><!-- form-layout -->
