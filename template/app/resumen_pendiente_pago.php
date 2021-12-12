
<?php


//include("backend/seguridad.php");
//require("backend/connection.php");


?>
<div class="br-pageheader pd-y-15 pd-l-20">
  <nav class="breadcrumb pd-0 mg-0 tx-12">
    <a class="breadcrumb-item" href="index.php">Inicio</a>
    <span class="breadcrumb-item active">Pedidos pendientes de pago</span>
  </nav>
</div><!-- br-pageheader -->
<div class="pd-x-20 pd-sm-x-30 pd-t-20 pd-sm-t-30">
  <h4 class="tx-gray-800 mg-b-5">Pedidos pendientes de pago</h4>
  <p class="mg-b-0"></p>
</div>

<div class="br-pagebody">
  <div class="br-section-wrapper">


    <div class="header">
  
        <legend>Listado de Pedidos pendientes de pago
        
        </legend>  
   
    </div>
    
   

    <div class="table-wrapper">
      <table id="datatableUbicaciones" class="table display responsive nowrap">
        <thead>
          <tr>
            <th class="wd-10p">Folio</th>
            <th class="wd-10p">Proveedor</th>
            <th class="wd-20p">Variedad</th>
            <th class="wd-10p">Fecha de carga estimada</th>
            
            <th class="wd-10p">Numero de pallets</th>
            <th class="wd-10p">Peso neto estimado</th>
            <th class="wd-10p">Status</th>
            <th class="wd-10p">Acciones</th>
           
          </tr>
        </thead>

        <tbody>
            <tr>
              <td>PED01</td>
              <td>Dato 1</td>
              <td>Dato 2</td>
              <td>Dato 3</td>
              <td>Dato 4</td>
              <td>Dato 5</td>
              <td>Dato 6</td>
              
             <td>
                  <a href="" data-toggle="modal" data-target="#modaldemo1" class="btn btn-simple btn-icon" onclick="editar_lista('<?=$id?>')"><i class="fa fa-eye"></i></a>
                  
                  <!--a href="" data-toggle="modal" data-target="#modaldemo1" class="btn btn-simple btn-icon" onclick="editar_lista('<?=$id?>')"><i class="fa fa-file-pdf-o"></i></a>
                  <a href="#"  class="btn btn-simple btn-icon modify" ><i class="fa fa-edit"></i></a-->
                  
              </td>
            </tr>
            
            <tr>
              <td>PED03</td>
              <td>Dato 1</td>
              <td>Dato 2</td>
              <td>Dato 3</td>
              <td>Dato 4</td>
              <td>Dato 5</td>
              <td>Dato 6</td>
              
             <td>
                   <a href="" data-toggle="modal" data-target="#modaldemo1" class="btn btn-simple btn-icon" onclick="editar_lista('<?=$id?>')"><i class="fa fa-eye"></i></a>
                  <!--a href="" data-toggle="modal" data-target="#modaldemo1" class="btn btn-simple btn-icon" onclick="editar_lista('<?=$id?>')"><i class="fa fa-file-pdf-o"></i></a>
                  <a href="#"  class="btn btn-simple btn-icon modify" ><i class="fa fa-edit"></i></a-->
                  
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
        <h6 class="tx-14 mg-b-0 tx-uppercase tx-inverse tx-bold">Pedido</h6>
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
                        <label class="control-label">Proveedor</label>
                        <select data-title="SELECCIONA" name="es_usuario" id="es_usuario" data-live-search="true"  class="selectpicker form-control" value="<?=$tipo_marca?>" onchange="select_es_usuario();"  readonly="">
                        </select>  
                    </div>
                </div>


                <div class="col-md-6">
                    <div class="form-group">
                        <label class="control-label">Variedad</label>
                        <input class="form-control valid" type="text" name="nombre" value="" placeholder=""  readonly="">
                    </div>
                </div>

                 <div class="col-md-6">
                    <div class="form-group">
                        <label class="control-label">Fecha de carga estimada</label>
                        <input class="form-control valid" type="date" name="nombre" value="" placeholder=""  readonly="">
                    </div>
                </div>

                <div class="col-md-6">
                    <div class="form-group">
                        <label class="control-label">Numero de pallets</label>
                       <input class="form-control valid" type="text" name="nombre" value="" placeholder=""  readonly="">
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label class="control-label">Peso neto estimado</label>
                        <input class="form-control valid" type="text" name="nombre" value="" placeholder=""  readonly="">
                    </div>
                </div>

                <div class="col-md-6">
                    <div class="form-group">
                        <label class="control-label">Peso neto real</label>
                        <input class="form-control valid" type="text" name="nombre" value="" placeholder=""  readonly="">
                    </div>
                </div>

                <div class="col-md-6">
                    <div class="form-group">
                        <label class="control-label">Precio de compra</label>
                        <input class="form-control valid" type="text" name="nombre" value="" placeholder=""  readonly="">
                    </div>
                </div>

                <div class="col-md-6">
                    <div class="form-group">
                        <label class="control-label">Referencia de carga</label>
                        <input class="form-control valid" type="text" name="nombre" value="" placeholder=""  readonly="">
                    </div>
                </div>

                <div class="col-md-12">
                    <div class="form-group">
                        <label class="control-label">Dirección de carga</label>
                        <input class="form-control valid" type="text" name="nombre" value="" placeholder=""  readonly="">
                    </div>
                </div>



                <div class="col-md-12">
                    <div class="form-group">
                        <label class="control-label">Número de factura de venta asociado</label>
                        <input class="form-control valid" type="text" name="nombre" value="" placeholder="" readonly="">
                    </div>
                </div>


                <div class="col-md-12">
                    <div class="form-group">
                        <label class="control-label">Número de factura de compra asociado</label>
                        <input class="form-control valid" type="text" name="nombre" value="" placeholder="" readonly="">
                    </div>
                </div>

                <div class="col-md-12">
                    <div class="form-group">
                        <label class="control-label">Importe</label>
                        <input class="form-control valid" type="text" name="nombre" value="" placeholder="" readonly="">
                    </div>
                </div>

            </div>
              
          </div>


        
        </div><!-- form-layout -->
      </div>
      <div class="modal-footer">
        
        <button type="button" class="btn btn-secondary tx-11 tx-uppercase pd-y-12 pd-x-25 tx-mont tx-medium" data-dismiss="modal">Cerrar</button>


         <a href="" class="btn btn-primary tx-11 tx-uppercase pd-y-12 pd-x-25 tx-mont tx-medium" href="" data-toggle="modal" data-target="#modaldemo2" >
          <div class=" justify-content-between">
            <span class="pd-x-15">Gestionar Pago</span>
          </div>
        </a>
      </div>

       </form>
    </div>
  </div><!-- modal-dialog -->
</div><!-- modal -->



<div id="modaldemo2" class="modal fade">
  
  <div class="modal-dialog modal-dialog-vertical-center modal-sm" role="document">
    <div class="modal-content bd-0 tx-14">
      <form id="guardar_usuario" method="post" enctype="multipart/form-data"> 
      <div class="modal-header pd-y-20 pd-x-25">
        <h6 class="tx-14 mg-b-0 tx-uppercase tx-inverse tx-bold">Gestionar pago</h6>
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
                        <label class="control-label">Adjuntar pago</label>
                        <input class="form-control valid" type="file" name="nombre" value="" placeholder=""  readonly="">
                    </div>
                </div>

                

            </div>
              
          </div>


        
        </div><!-- form-layout -->
      </div>
      <div class="modal-footer">
        
        <button type="button" class="btn btn-secondary tx-11 tx-uppercase pd-y-12 pd-x-25 tx-mont tx-medium" data-dismiss="modal">Cerrar</button>
        <input id="guardar" type="submit"  name="" class="btn btn-primary tx-11 tx-uppercase pd-y-12 pd-x-25 tx-mont tx-medium" value="Realizar pago"> 
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





</script>