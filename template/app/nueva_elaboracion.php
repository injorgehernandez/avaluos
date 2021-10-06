
<?php


//include("backend/seguridad.php");
//require("backend/connection.php");


?>
<div class="br-pageheader pd-y-15 pd-l-20">
  <nav class="breadcrumb pd-0 mg-0 tx-12">
    <a class="breadcrumb-item" href="index.php">Inicio</a>
    <span class="breadcrumb-item active">Elaboración</span>
  </nav>
</div><!-- br-pageheader -->
<div class="pd-x-20 pd-sm-x-30 pd-t-20 pd-sm-t-30">
  <h4 class="tx-gray-800 mg-b-5">Elaboración</h4>
  <p class="mg-b-0"></p>
</div>

<div class="br-pagebody">
  <div class="br-section-wrapper">

    


    <div class="content">    
      
            <h6 class="text-center"></h6>
            <div class="row">
              <div class="header col-md-12">
                    <legend>Datos generales</legend>
                </div><br>
                <div class="col-md-4">
                    <div class="form-group">
                        <label class="control-label">Ubicación </label>
                        <input class="form-control valid" type="text" name="nombre" value="<?=$nombre?>" placeholder="">
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="form-group">
                        <label class="control-label">Municipio</label>
                         <select data-title="SELECCIONA" name="es_usuario" id="es_usuario" data-live-search="true"  class="selectpicker form-control" value="<?=$tipo_marca?>" onchange="select_es_usuario();">
                        </select>  
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="form-group">
                        <label class="control-label">Solicitante</label>
                       <select data-title="SELECCIONA" name="es_usuario" id="es_usuario" data-live-search="true"  class="selectpicker form-control" value="<?=$tipo_marca?>" onchange="select_es_usuario();">
                        </select>  
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="form-group">
                        <label class="control-label">No. Expediente</label>
                        <input class="form-control valid" type="text" name="puesto" required="true" placeholder="" aria-required="true"  value="<?=$puesto?>">
                    </div>
                </div>

                 <div class="col-md-4">
                    <div class="form-group">
                        <label class="control-label">Notaria</label>
                        <select data-title="SELECCIONA" name="es_usuario" id="es_usuario" data-live-search="true"  class="selectpicker form-control" value="<?=$tipo_marca?>" onchange="select_es_usuario();">
                        </select>  
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="form-group">
                        <label class="control-label">Cuenta predial</label>
                        <input class="form-control valid" type="text" id="fecha_baja" name="fecha_baja" required="true" placeholder="" aria-required="true"  value="<?=$fecha_baja?>" >
                    </div>
                </div>

                 <div class="col-md-4">
                    <div class="form-group">
                        <label class="control-label">Recaudadora</label>
                        <input class="form-control valid" type="text" id="fecha_baja" name="fecha_baja" required="true" placeholder="" aria-required="true"  value="<?=$fecha_baja?>" >
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="form-group">
                        <label class="control-label">Fecha</label>
                        <input class="form-control valid" type="date" id="fecha_baja" name="fecha_baja" required="true" placeholder="" aria-required="true"  value="<?=$fecha_baja?>" >
                    </div>
                </div>
                
            </div>
          
          


           
              
          </div>

          <div class="row">
            
            <div id="wizard4">
            <h3>Paso 1</h3>
            <section>
              <p></p>
            </section>
            <h3>Paso 2</h3>
            <section>
              <p></p>
            </section>
            <h3>Paso 3</h3>
            <section>
              <p></p>
            </section>
            <h3>Paso 4</h3>
            <section>
              <p></p>
            </section>
            <h3>Paso 5</h3>
            <section>
              <p></p>
            </section>
          </div>
          </div>



          


          
            <div class="modal-footer">
        
        <input id="guardar" type="submit" name="" class="btn btn-primary tx-11 tx-uppercase pd-y-12 pd-x-25 tx-mont tx-medium" value="Guardar"> 
      </div>

       </form>



   
    
   

   
  </div><!-- br-section-wrapper -->
</div><!-- br-pagebody -->










<div id="procesa_ubicacion"></div>


<script>
      $(document).ready(function(){
        'use strict';


        $('#wizard4').steps({
          headerTag: 'h3',
          bodyTag: 'section',
          autoFocus: true,
          titleTemplate: '<span class="number">#index#</span> <span class="title">#title#</span>',
          cssClass: 'wizard step-equal-width'
        });

      });
    </script>


