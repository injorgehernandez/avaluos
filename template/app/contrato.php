
<?php


//include("backend/seguridad.php");
//require("backend/connection.php");


?>
<div class="br-pageheader pd-y-15 pd-l-20">
  <nav class="breadcrumb pd-0 mg-0 tx-12">
    <a class="breadcrumb-item" href="index.php">Inicio</a>
    <span class="breadcrumb-item active">Contrato de servicios</span>
  </nav>
</div><!-- br-pageheader -->
<div class="pd-x-20 pd-sm-x-30 pd-t-20 pd-sm-t-30">
  <h4 class="tx-gray-800 mg-b-5">Cotización</h4>
  <p class="mg-b-0"></p>
</div>

<div class="br-pagebody">
  <div class="br-section-wrapper">
    <p>Este es el texto del de la cotización del servicio.Este es el texto del de la cotización del servicio.Este es el texto del de la cotización del servicio.Este es el texto del de la cotización del servicio.Este es el texto del de la cotización del servicio.Este es el texto del de la cotización del servicio.Este es el texto del de la cotización del servicio.Este es el texto del de la cotización del servicio.Este es el texto del de la cotización del servicio.Este es el texto del de la cotización del servicio.Este es el texto del de la cotización del servicio.Este es el texto del de la cotización del servicio.Este es el texto del de la cotización del servicio.Este es el texto del de la cotización del servicio.Este es el texto del de la cotización del servicio.Este es el texto del de la cotización del servicio.Este es el texto del de la cotización del servicio.Este es el texto del de la cotización del servicio.
    </p><br>
    <p>Los dias que se hará el servicio son:<br>
    Lunes a las 9:30 AM<br>
    Miercoles a las 10:30 AM<bR>
    Viernes a las 9:00 AM</p><br>

     <p>El costo del sevicio es de $1000000</p>

     <div class="col-md-12">

      <input type="submit" name="" class="btn btn-info" value="Contratar">
    </div>


  </div><!-- br-section-wrapper -->



   <br>


  
</div><!-- br-pagebody -->



<div id="modaldemo1" class="modal fade">
  
  <div class="modal-dialog modal-dialog-vertical-center modal-lg" role="document">
    <div class="modal-content bd-0 tx-14">
      <form id="guardar_usuario" method="post" enctype="multipart/form-data"> 
      <div class="modal-header pd-y-20 pd-x-25">
        <h6 class="tx-14 mg-b-0 tx-uppercase tx-inverse tx-bold">Asignar visita</h6>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body pd-25" id="div_modal_usuario">
       
        <div class="form-layout">

          <div class="content">    
      
            <h6 class="text-center"></h6>
            <div class="row">
                <div class="col-md-12">
                    <div class="form-group">
                        <label class="control-label">Avalúo</label>
                        <select data-title="SELECCIONA" name="es_usuario" id="es_usuario" data-live-search="true"  class="selectpicker form-control" value="<?=$tipo_marca?>" onchange="select_es_usuario();">
                        </select>  
                    </div>
                </div>


                <div class="col-md-12">
                    <div class="form-group">
                        <label class="control-label">Usuario asignado para la Visita</label>
                        <select data-title="SELECCIONA" name="es_usuario" id="es_usuario" data-live-search="true"  class="selectpicker form-control" value="<?=$tipo_marca?>" onchange="select_es_usuario();">
                        </select>  
                    </div>
                </div>

                 <div class="col-md-12">
                    <div class="form-group">
                        <label class="control-label">Usuario asignado para la Elaboración</label>
                        <select data-title="SELECCIONA" name="es_usuario" id="es_usuario" data-live-search="true"  class="selectpicker form-control" value="<?=$tipo_marca?>" onchange="select_es_usuario();">
                        </select>  
                    </div>
                </div>

                <div class="col-md-12">
                    <div class="form-group">
                        <label class="control-label">Ubicación</label>
                        <input class="form-control valid" type="text" name="nombre" value="<?=$nombre?>" placeholder="">
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label class="control-label">Fecha</label>
                        <input class="form-control valid" type="date" name="apellido_materno" required="true" placeholder="" aria-required="true"  value="<?=$apellido_materno?>">
                    </div>
                </div>

                <div class="col-md-6">
                    <div class="form-group">
                        <label class="control-label">Hora</label>
                        <input class="form-control valid" type="time" name="puesto" required="true" placeholder="" aria-required="true"  value="<?=$puesto?>">
                    </div>
                </div>

                 <div class="col-md-6">
                    <div class="form-group">
                        <label class="control-label">Status</label>
                        <select data-title="SELECCIONA" name="es_usuario" id="es_usuario" data-live-search="true"  class="selectpicker form-control" value="<?=$tipo_marca?>" onchange="select_es_usuario();">
                        </select>  
                    </div>
                </div>
               
                
            </div>
              
          </div>


        
        </div><!-- form-layout -->
      </div>
      <div class="modal-footer">
        
        <button type="button" class="btn btn-secondary tx-11 tx-uppercase pd-y-12 pd-x-25 tx-mont tx-medium" data-dismiss="modal">Cerrar</button>
        <input id="guardar" type="submit" name="" class="btn btn-primary tx-11 tx-uppercase pd-y-12 pd-x-25 tx-mont tx-medium" value="Guardar"> 
      </div>

       </form>
    </div>
  </div><!-- modal-dialog -->
</div><!-- modal -->






<div id="procesa_ubicacion"></div>


<script>

  $(document).ready (function() {


    $('#datatableUbicaciones').DataTable({
          responsive: true,
          language: {
            searchPlaceholder: 'Buscar...',
            sSearch: '',
            lengthMenu: '_MENU_ items/page',
          }
        });


      $('#datatableUbicaciones2').DataTable({
          responsive: true,
          language: {
            searchPlaceholder: 'Buscar...',
            sSearch: '',
            lengthMenu: '_MENU_ items/page',
          }
        });

    

});


$('#guardar_ubicacion').submit(function () {

    $('#modalUbicaciones').modal('hide');

        $('#procesa_ubicacion').delay(800).queue(function(nxt){

            $.post('backend/guardar_ubicacion.php', $('#guardar_ubicacion').serialize(), function (data, textStatus) {
        
                $('#procesa_ubicacion').append(data);
            });
            
        });   
   
    return false;
});



function limpiar_ubicacion(){

   
    document.getElementById("id").value = "" ;
    document.getElementById("ubicacion").value = "" ;


    $("#selectTipo").val(""); 

    $("#selectZona").val(""); 


    /* $("#selectTipo").select2({
      dropdownParent: $("#modalUbicaciones")
    });

    $("#selectZona").select2({
      dropdownParent: $("#modalUbicaciones")
    });*/

    
}


</script>