<?php

//include("../backend/seguridad.php");
require("../backend/connection.php");

$id = $_GET["id"];



$stmt = $conn->prepare("SELECT nombre, apellidos, nombre_corto, direccion_residencia, cp, municipio, pais, eori_vat, email_sifresh, email_pagos, banco_moneda, banco_nombre, banco_cuenta, banco_swift, banco_bic, tipo_usuario FROM usuario where id=?");

$stmt->bind_param("i", $id);
$stmt->execute();
$stmt->bind_result($nombre_bdd, $apellidos_bdd, $nombre_corto_bdd, $direccion_residencia_bdd, $cp_bdd, $municipio_bdd, $pais_bdd, $eori_vat_bdd, $email_sifresh_bdd, $email_pagos_bdd, $banco_moneda_bdd, $banco_nombre_bdd, $banco_cuenta_bdd, $banco_swift_bdd, $banco_bic_bdd, $tipo_usuario_bdd);


while ($stmt->fetch()) {


  $nombre =  $nombre_bdd;
  $apellidos =  $apellidos_bdd;
  $nombre_corto =  $nombre_corto_bdd;
  
  $direccion_residencia = $direccion_residencia_bdd;
  $cp = $cp_bdd;
  $municipio = $municipio_bdd;
  $pais = $pais_bdd;
  $eori_vat = $eori_vat_bdd;


  $email_sifresh = $email_sifresh_bdd;
  $email_pagos = $email_pagos_bdd;

  $banco_moneda  = $banco_moneda_bdd;
  $banco_nombre = $banco_nombre_bdd;
  $banco_cuenta = $banco_cuenta_bdd;
  $banco_swift = $banco_swift_bdd;
  $banco_bic = $banco_bic_bdd;

    $tipo_usuario = $tipo_usuario_bdd;

}
  


?>

<div class="form-layout">

  <input class="form-control" type="hidden" name="id"  id="id" placeholder="" required="" value="<?=$id?>">

  <div class="content">    

    <h6 class="text-center"></h6>
     <div class="row">


                <div class="header col-md-12">
                    <legend>Datos generales</legend>
                </div>
                <div class="col-md-4">
                    <div class="form-group">
                        <label class="control-label">Nombre</label>
                        <input class="form-control valid" type="text" name="nombre" id="nombre" value="<?=$nombre?>" placeholder="" required="">
                    </div>
                </div>


                <div class="col-md-4">
                    <div class="form-group">
                        <label class="control-label">Apellidos</label>
                        <input class="form-control valid" type="text" name="apellidos" id="apellidos" value="<?=$apellidos?>" placeholder="" required="">
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="form-group">
                        <label class="control-label">Nombre corto</label>
                        <input class="form-control valid" type="text" name="nombre_corto" id="nombre_corto" value="<?=$nombre_corto?>" placeholder="" required="">
                    </div>
                </div>

                 <div class="col-md-4">
                    <div class="form-group">
                        <label class="control-label">Direccion residencia</label>
                        <input class="form-control valid" type="text" name="direccion_residencia" id="direccion_residencia"  value="<?=$direccion_residencia?>" placeholder="" required="">
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="form-group">
                        <label class="control-label">Código postal</label>
                        <input class="form-control valid" type="text" name="cp" id="cp" value="<?=$cp?>" placeholder="" required="">
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="form-group">
                        <label class="control-label">Municipio</label>
                        <input class="form-control valid" type="text" name="municipio" id="municipio" value="<?=$municipio?>" placeholder="" required="">
                    </div>
                </div>

                 <div class="col-md-4">
                    <div class="form-group">
                        <label class="control-label">País</label>
                       <input class="form-control valid" type="text" name="pais" id="pais" value="<?=$pais?>" placeholder="" required="">
                    </div>
                </div>

            </div>
            
            <div class="row">
               
                <div class="col-md-4">
                    <div class="form-group">
                        <label class="control-label">EORI/VAT</label>
                        <input class="form-control valid" type="text" name="eori_vat" id="eori_vat" value="<?=$eori_vat?>" placeholder="" required="">
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="form-group">
                        <label class="control-label">Email Sifresh</label>
                       <input class="form-control valid" type="email" name="email_sifresh"  id="email_sifresh" value="<?=$email_sifresh?>" placeholder="" required="">
                    </div>
                </div>

                 <div class="col-md-4">
                    <div class="form-group">
                        <label class="control-label">Email Pagos</label>
                       <input class="form-control valid" type="email" name="email_pagos"  id="email_pagos" value="<?=$email_pagos?>" placeholder="" required="">
                    </div>
                </div>

            </div>
            
            <div class="row">
                <div class="header col-md-12">
                    <legend>Información bancaria</legend>
                </div>

                <div class="col-md-4">
                    <div class="form-group">
                        <label class="control-label">Banco moneda</label>
                       <input class="form-control valid" type="text" name="banco_moneda"  id="banco_moneda" value="<?=$banco_moneda?>" placeholder="" required="">
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="form-group">
                        <label class="control-label">Banco nombre</label>
                       <input class="form-control valid" type="text" name="banco_nombre" id="banco_nombre" value="<?=$banco_nombre?>" placeholder="" required="">
                    </div>
                </div>
                 <div class="col-md-4">
                    <div class="form-group">
                        <label class="control-label">Banco cuenta</label>
                       <input class="form-control valid" type="text" name="banco_cuenta" id="banco_cuenta" value="<?=$banco_cuenta?>" placeholder="" required="">
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="form-group">
                        <label class="control-label">Banco SWIFT</label>
                       <input class="form-control valid" type="text" name="banco_swift" id="banco_swift" value="<?=$banco_swift?>" placeholder="" required="">
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="form-group">
                        <label class="control-label">Banco BIC</label>
                       <input class="form-control valid" type="text" name="banco_bic" id="banco_bic" value="<?=$banco_bic?>" placeholder="" required="">
                    </div>
                </div>
            </div>

            <div class="row" >
                <div class="header col-md-12">
                    <legend>Usuario</legend>
                </div>
              
                <div class="col-md-4" >
                    <div class="form-group">
                        <label class="control-label">Tipo de Usuario</label>
                        <select data-title="SELECCIONA" name="tipo_usuario" id="tipo_usuario" data-live-search="true"  class="selectpicker form-control" required="">
                            <option disabled="" selected="">SELECCIONA</option> 
                            <option value="1">DIRECCIÓN</option> 
                            <option value="2">ADMINISTRACIÓN</option>
                            <option value="3">LOGÍSTICA</option>
                            <option value="4">COMERCIAL COMPRA</option>
                            <option value="4">COMERCIAL VENTA</option>
                            
                        </select>  
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="form-group">
                        <label class="control-label">Contraseña</label>
                        <input class="form-control valid" type="password" id="contrasenia" name="contrasenia" required="true" placeholder="" aria-required="true"   onChange="validarContrasenia();">
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="form-group">
                        <label class="control-label">Confirma Contraseña</label>
                        <input class="form-control valid" type="password" id="contrasenia2" name="contrasenia2" required="true" placeholder="" aria-required="true"   onChange="verificarContrasenia();">
                    </div>
                </div>
            </div>
      
  </div>



</div><!-- form-layout -->


<script>
  $(function(){
   

    $("#tipo_usuario").val("<?=$tipo_usuario?>"); 



    

  });
</script>