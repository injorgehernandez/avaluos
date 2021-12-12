
<?php


//include("backend/seguridad.php");
//require("backend/connection.php");


?>
<div class="br-pageheader pd-y-15 pd-l-20">
  <nav class="breadcrumb pd-0 mg-0 tx-12">
    <a class="breadcrumb-item" href="index.php">Inicio</a>
    <span class="breadcrumb-item active">Transportista</span>
  </nav>
</div><!-- br-pageheader -->
<div class="pd-x-20 pd-sm-x-30 pd-t-20 pd-sm-t-30">
  <h4 class="tx-gray-800 mg-b-5">Transportista</h4>
  <p class="mg-b-0"></p>
</div>

<div class="br-pagebody">
  <div class="br-section-wrapper">


    <div class="header">
  
        <legend>Listado de Transportista
        <a href="" class="btn btn-info btn-with-icon pull-right" href="" data-toggle="modal" data-target="#modal_trasnportista" >
          <div class="ht-40 justify-content-between">
            <span class="pd-x-15">Nuevo</span>
            <span class="icon wd-40"><i class="fa fa-plus-circle"></i></span>
          </div>
        </a>
        </legend>  
   
    </div>
    
   

    <div class="table-wrapper">
      <table id="datatableUbicaciones" class="table display responsive nowrap">
        <thead>
          <tr>
            <th class="wd-10p">Nombre fiscal</th>
            <th class="wd-20p">Dirección fiscal</th>
            <th class="wd-10p">EORI/VAT</th>
            
            <th class="wd-10p">País</th>
            <th class="wd-10p">Email comunicaciones</th>
            <th class="wd-10p">Información Bancaria</th>
            <th class="wd-10p">Acciones</th>
           
          </tr>
        </thead>

        <tbody>
            <tr>

              <td>Dato 1</td>
              <td>Dato 2</td>
              <td>Dato 3</td>
              <td>Dato 4</td>
              <td>Dato 5</td>
              <td>Dato 6</td>
              
              <td>
                  <a href="" data-toggle="modal" data-target="#modaldemo1" class="btn btn-simple btn-icon" onclick="editar_lista('<?=$id?>')"><i class="fa fa-eye"></i></a>
                  <!--a href="" data-toggle="modal" data-target="#modaldemo1" class="btn btn-simple btn-icon" onclick="editar_lista('<?=$id?>')"><i class="fa fa-file-pdf-o"></i></a>
                  <a href="#"  class="btn btn-simple btn-icon modify" ><i class="fa fa-edit"></i></a--><a href="#"  class="btn btn-simple btn-danger btn-icon delete" ><i class="fa fa-trash"></i></a>

              </td>
            </tr>
            <tr>

              <td>Dato 1</td>
              <td>Dato 2</td>
              <td>Dato 3</td>
              <td>Dato 4</td>
              <td>Dato 5</td>
              <td>Dato 6</td>
              
             <td>
                  <a href="" data-toggle="modal" data-target="#modaldemo1" class="btn btn-simple btn-icon" onclick="editar_lista('<?=$id?>')"><i class="fa fa-eye"></i></a>
                  <!--a href="" data-toggle="modal" data-target="#modaldemo1" class="btn btn-simple btn-icon" onclick="editar_lista('<?=$id?>')"><i class="fa fa-file-pdf-o"></i></a>
                  <a href="#"  class="btn btn-simple btn-icon modify" ><i class="fa fa-edit"></i></a--><a href="#"  class="btn btn-simple btn-danger btn-icon delete" ><i class="fa fa-trash"></i></a>

                  
              </td>
            </tr>
        </tbody>
           
     
      </table>
    </div><!-- table-wrapper -->
  </div><!-- br-section-wrapper -->
   
</div><!-- br-pagebody -->



<div id="modal_trasnportista" class="modal fade">
  
  <div class="modal-dialog modal-dialog-vertical-center modal-lg" role="document">
    <div class="modal-content bd-0 tx-14">
      <form id="guardar_transportista" method="post" enctype="multipart/form-data"> 
      <div class="modal-header pd-y-20 pd-x-25">
        <h6 class="tx-14 mg-b-0 tx-uppercase tx-inverse tx-bold">Transportista</h6>
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
                        <label class="control-label">Nombre fiscal</label>
                        <input class="form-control valid" type="text" name="nombre_fiscal" value="" placeholder="">
                    </div>
                </div>


                <div class="col-md-6">
                    <div class="form-group">
                        <label class="control-label">Dirección fiscal</label>
                        <input class="form-control valid" type="text" name="direccion_fiscal" value="" placeholder="">
                    </div>
                </div>

                 <div class="col-md-6">
                    <div class="form-group">
                        <label class="control-label">EORI/VAT</label>
                        <input class="form-control valid" type="text" name="eori_vat" value="" placeholder="">
                    </div>
                </div>

                <div class="col-md-6">
                    <div class="form-group">
                        <label class="control-label">País</label>
                       <input class="form-control valid" type="text" name="pais" value="" placeholder="">
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label class="control-label">Email comunicaciones</label>
                        <input class="form-control valid" type="text" name="email" value="" placeholder="">
                    </div>
                </div>

                 <div class="col-md-6">
                    <div class="form-group">
                        <label class="control-label">Banco nombre</label>
                       <input class="form-control valid" type="text" name="banco_nombre" value="" placeholder="">
                    </div>
                </div>
                 <div class="col-md-6">
                    <div class="form-group">
                        <label class="control-label">Banco cuenta</label>
                       <input class="form-control valid" type="text" name="banco_cuenta" value="" placeholder="">
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label class="control-label">Banco swift</label>
                       <input class="form-control valid" type="text" name="banco_swift" value="" placeholder="">
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label class="control-label">Banco bic</label>
                       <input class="form-control valid" type="text" name="banco_bic" value="" placeholder="">
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






<div id="procesa_transportista"></div>


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


$('#guardar_transportista').submit(function () {

    $('#modal_trasnportista').modal('hide');

        $('#procesa_transportista').delay(800).queue(function(nxt){

            $.post('../backend/guardar_transportista.php', $('#guardar_transportista').serialize(), function (data, textStatus) {
        
                $('#procesa_transportista').append(data);
            });
            
        });   
   
    return false;
});




</script>