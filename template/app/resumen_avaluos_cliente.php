
<?php


//include("backend/seguridad.php");
//require("backend/connection.php");


?>
<div class="br-pageheader pd-y-15 pd-l-20">
  <nav class="breadcrumb pd-0 mg-0 tx-12">
    <a class="breadcrumb-item" href="index.php">Inicio</a>
    <span class="breadcrumb-item active">Valores Avalúos</span>
  </nav>
</div><!-- br-pageheader -->
<div class="pd-x-20 pd-sm-x-30 pd-t-20 pd-sm-t-30">
  <h4 class="tx-gray-800 mg-b-5">Avalúos</h4>
  <p class="mg-b-0"></p>
</div>

<div class="br-pagebody">
  <div class="br-section-wrapper">

    <div class="header">
  
        <legend>Listado de Solicitudes de Avalúos
        <a href="" class="btn btn-info btn-with-icon pull-right" data-toggle="modal" data-target="#modalUbicaciones" onclick="cargaContenido('nuevo_valor.php')">
          <div class="ht-40 justify-content-between">
            <span class="pd-x-15">Nueva Solicitud</span>
            <span class="icon wd-40"><i class="fa fa-plus-circle"></i></span>
          </div>
        </a>
        </legend>  
   
    </div>
    
   

    <div class="table-wrapper">
      <table id="datatableUbicaciones" class="table display responsive nowrap">
        <thead>
          <tr>
            <th class="wd-10p">Folio </th>
            <th class="wd-10p">Solicitante </th>
            <th class="wd-20p">No. Expediente</th>
            <th class="wd-30p">Predial</th>
            <th class="wd-20p">Escritura</th>
            <th class="wd-10p">Contacto Nombre</th>
            <th class="wd-10p">Telefono</th>
            <th class="wd-10p">Status</th>

            <th class="wd-10p">Acciones</th>
           
          </tr>
        </thead>

        <tbody>
            <tr>
              <td>Dato 0</td>
              <td>Dato 1</td>
              <td>Dato 2</td>
              <td>Dato 3</td>
              <td>Dato 4</td>
              <td>Dato 5</td>
              <td>Dato 6</td>
              <td>Pendiente</td>
              
             <td>
                  <a href="" data-toggle="modal" data-target="#modaldemo1" class="btn btn-simple btn-icon" onclick="editar_lista('<?=$id?>')"><i class="fa fa-eye"></i></a>

                  <a href="" data-toggle="modal" data-target="#modaldemo1" class="btn btn-simple btn-icon" onclick="editar_lista('<?=$id?>')"><i class="fa fa-file-pdf-o"></i></a>
                  <a href="#"  class="btn btn-simple btn-icon modify" ><i class="fa fa-edit"></i></a><a href="#"  class="btn btn-simple btn-danger btn-icon delete" ><i class="fa fa-trash"></i></a>
                  
              </td>
            </tr>
            <tr>

              <td>Dato 0</td>

              <td>Dato 1</td>
              <td>Dato 2</td>
              <td>Dato 3</td>
              <td>Dato 4</td>
              <td>Dato 5</td>
              <td>Dato 6</td>
              <td>Pendiente</td>
              
             <td>
                  <a href="" data-toggle="modal" data-target="#modaldemo1" class="btn btn-simple btn-icon" onclick="editar_lista('<?=$id?>')"><i class="fa fa-eye"></i></a>
                  <a href="" data-toggle="modal" data-target="#modaldemo1" class="btn btn-simple btn-icon" onclick="editar_lista('<?=$id?>')"><i class="fa fa-file-pdf-o"></i></a>
                  <a href="#"  class="btn btn-simple btn-icon modify" ><i class="fa fa-edit"></i></a><a href="#"  class="btn btn-simple btn-danger btn-icon delete" ><i class="fa fa-trash"></i></a>

                  
              </td>
            </tr>
        </tbody>
           
     
      </table>
    </div><!-- table-wrapper -->
  </div><!-- br-section-wrapper --><br>




  <div class="br-section-wrapper">

    <div class="header">
  
        <legend>Histórico
        
        </legend>  
   
    </div>
    
   

    <div class="table-wrapper">
      <table id="datatableUbicaciones2" class="table display responsive nowrap">
        <thead>
          <tr>
            <th class="wd-10p">Folio </th>
            <th class="wd-10p">Solicitante </th>
            <th class="wd-20p">No. Expediente</th>
            <th class="wd-30p">Predial</th>
            <th class="wd-20p">Escritura</th>
            <th class="wd-10p">Contacto Nombre</th>
            <th class="wd-10p">Telefono</th>
            <th class="wd-10p">Status</th>
            <th class="wd-10p">Acciones</th>
           
          </tr>
        </thead>

        <tbody>
            <tr>
              <td>Dato 0</td>

              <td>Dato 1</td>
              <td>Dato 2</td>
              <td>Dato 3</td>
              <td>Dato 4</td>
              <td>Dato 5</td>
              <td>Dato 6</td>
              <td>Completo</td>
              
             <td>
                  <a href="" data-toggle="modal" data-target="#modaldemo1" class="btn btn-simple btn-icon" onclick="editar_lista('<?=$id?>')"><i class="fa fa-eye"></i></a>

                  <a href="" data-toggle="modal" data-target="#modaldemo1" class="btn btn-simple btn-icon" onclick="editar_lista('<?=$id?>')"><i class="fa fa-file-pdf-o"></i></a>
                 <a href="#"  class="btn btn-simple btn-danger btn-icon delete" ><i class="fa fa-trash"></i></a>
                  
              </td>
            </tr>
            <tr>
              <td>Dato 0</td>

              <td>Dato 1</td>
              <td>Dato 2</td>
              <td>Dato 3</td>
              <td>Dato 4</td>
              <td>Dato 5</td>
              <td>Dato 6</td>
              <td>Completo</td>
              
             <td>
                  <a href="" data-toggle="modal" data-target="#modaldemo1" class="btn btn-simple btn-icon" onclick="editar_lista('<?=$id?>')"><i class="fa fa-eye"></i></a>
                  <a href="" data-toggle="modal" data-target="#modaldemo1" class="btn btn-simple btn-icon" onclick="editar_lista('<?=$id?>')"><i class="fa fa-file-pdf-o"></i></a>
                  <a href="#"  class="btn btn-simple btn-danger btn-icon delete" ><i class="fa fa-trash"></i></a>

                  
              </td>
            </tr>
        </tbody>
           
     
      </table>
    </div><!-- table-wrapper -->
  </div><!-- br-section-wrapper -->
</div><!-- br-pagebody -->



<div id="modaldemo1" class="modal fade">
  
  <div class="modal-dialog modal-dialog-vertical-center modal-lg" role="document">
    <div class="modal-content bd-0 tx-14">
      <form id="guardar_usuario" method="post" enctype="multipart/form-data"> 
      <div class="modal-header pd-y-20 pd-x-25">
        <h6 class="tx-14 mg-b-0 tx-uppercase tx-inverse tx-bold">Nueva solicitud</h6>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body pd-25" id="div_modal_usuario">
       
        <div class="form-layout">

          <div class="content">    
      
            <h6 class="text-center"></h6>


            

            <div class="row">


                


                <div class="col-md-6">
                    <div class="form-group">
                        <label class="control-label">Solicitante:</label>
                        <select data-title="SELECCIONA" name="es_usuario" id="es_usuario" data-live-search="true"  class="selectpicker form-control" value="<?=$tipo_marca?>" onchange="select_es_usuario();"></select>
                          
                    </div>
                </div>

                 <div class="col-md-6">
                    <div class="form-group">
                        <label class="control-label">No. Expediente:</label>
                       <input class="form-control valid" type="text" name="apellido_materno" required="true" placeholder="" aria-required="true"  value="<?=$apellido_materno?>">
                    </div>
                </div>
              </div>


              <div class="row">
              <div class="header col-md-12">
                    <legend>Predial</legend>
                </div><br>

                <div class="col-md-12">
                    <div class="form-group">
                        <label class="control-label">Adjuntar archivo</label>
                        <input class="form-control valid" type="file" name="apellido_materno" required="true" placeholder="" aria-required="true"  value="<?=$apellido_materno?>">
                    </div>
                </div>
                <hr>


                 <div class="col-md-6">
                    <div class="form-group">
                        <label class="control-label">Cuenta*</label>
                        <input class="form-control valid" type="text" name="apellido_materno" required="true" placeholder="" aria-required="true"  value="<?=$apellido_materno?>">
                    </div>
                </div>

                <div class="col-md-6">
                    <div class="form-group">
                        <label class="control-label">Clave</label>
                        <input class="form-control valid" type="text" name="apellido_materno" required="true" placeholder="" aria-required="true"  value="<?=$apellido_materno?>">
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label class="control-label">Superficie terreno</label>
                        <input class="form-control valid" type="text" name="apellido_materno" required="true" placeholder="" aria-required="true"  value="<?=$apellido_materno?>">
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label class="control-label">Superficie construccion</label>
                        <input class="form-control valid" type="text" name="apellido_materno" required="true" placeholder="" aria-required="true"  value="<?=$apellido_materno?>">
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label class="control-label">Ubicación *</label>
                        <input class="form-control valid" type="text" name="apellido_materno" required="true" placeholder="" aria-required="true"  value="<?=$apellido_materno?>">
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label class="control-label">Valor fiscal</label>
                        <input class="form-control valid" type="text" name="apellido_materno" required="true" placeholder="" aria-required="true"  value="<?=$apellido_materno?>">
                    </div>
                </div>
            </div>


            <div class="row">
              <div class="header col-md-12">
                    <legend>Escritura</legend>
                </div><br>

                <div class="col-md-12">
                    <div class="form-group">
                        <label class="control-label">Adjuntar archivo</label>
                        <input class="form-control valid" type="file" name="apellido_materno" required="true" placeholder="" aria-required="true"  value="<?=$apellido_materno?>">
                    </div>
                </div>
                <hr>


                 <div class="col-md-6">
                    <div class="form-group">
                        <label class="control-label">Ubicación del inmueble según escritura</label>
                        <input class="form-control valid" type="text" name="apellido_materno" required="true" placeholder="" aria-required="true"  value="<?=$apellido_materno?>">
                    </div>
                </div>

                <div class="col-md-6">
                    <div class="form-group">
                        <label class="control-label">Superficie según escrturas</label>
                        <input class="form-control valid" type="text" name="apellido_materno" required="true" placeholder="" aria-required="true"  value="<?=$apellido_materno?>">
                    </div>
                </div>
            </div>

            <div class="row">
              <div class="header col-md-12">
                    <legend>Avaluo del banco</legend>
                </div><br>

                <div class="col-md-12">
                    <div class="form-group">
                        <label class="control-label">Adjuntar archivo</label>
                        <input class="form-control valid" type="file" name="apellido_materno" required="true" placeholder="" aria-required="true"  value="<?=$apellido_materno?>">
                    </div>
                </div>
              </div>



              <div class="row">
              <div class="header col-md-12">
                    <legend>Fotos</legend>
                </div><br>

                <div class="col-md-12">
                    <div class="form-group">
                        <label class="control-label">Adjuntar archivos</label>
                        <input class="form-control valid" type="file" name="apellido_materno" required="true" placeholder="" aria-required="true"  value="<?=$apellido_materno?>">
                    </div>
                </div>
              </div>


              <div class="row">
              <div class="header col-md-12">
                    <legend>Datos del contacto</legend>
                </div><br>

                <div class="col-md-6">
                    <div class="form-group">
                        <label class="control-label">Nombre</label>
                        <input class="form-control valid" type="text" name="apellido_materno" required="true" placeholder="" aria-required="true"  value="<?=$apellido_materno?>">
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label class="control-label">Telefono</label>
                        <input class="form-control valid" type="text" name="apellido_materno" required="true" placeholder="" aria-required="true"  value="<?=$apellido_materno?>">
                    </div>
                </div>
              </div>



                <div class="row">
              

                <div class="col-md-6">
                    <div class="form-group">
                        <label class="control-label">Comentarios</label>
                        <input class="form-control valid" type="text" name="apellido_materno" required="true" placeholder="" aria-required="true"  value="<?=$apellido_materno?>">
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label class="control-label">Status</label>
                        <select data-title="SELECCIONA" name="es_usuario" id="es_usuario" data-live-search="true"  class="selectpicker form-control" value="<?=$tipo_marca?>" onchange="select_es_usuario();"></select>
                    </div>
                </div>
              </div>


              
          </div>


        
        </div><!-- form-layout -->
      </div>
      <div class="modal-footer">
        
        <button type="button" class="btn btn-secondary tx-11 tx-uppercase pd-y-12 pd-x-25 tx-mont tx-medium" data-dismiss="modal">Cerrar</button>
        <input id="guardar" type="submit" name="" class="btn btn-primary tx-11 tx-uppercase pd-y-12 pd-x-25 tx-mont tx-medium" value="Solicitar"> 
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