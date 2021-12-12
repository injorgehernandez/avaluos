
<?php


//include("backend/seguridad.php");
//require("backend/connection.php");


?>
<div class="br-pageheader pd-y-15 pd-l-20">
  <nav class="breadcrumb pd-0 mg-0 tx-12">
    <a class="breadcrumb-item" href="index.php">Inicio</a>
    <span class="breadcrumb-item active">Pedido de venta</span>
  </nav>
</div><!-- br-pageheader -->
<div class="pd-x-20 pd-sm-x-30 pd-t-20 pd-sm-t-30">
  <h4 class="tx-gray-800 mg-b-5">Pedido de venta</h4>
  <p class="mg-b-0"></p>
</div>

<div class="br-pagebody">
  <div class="br-section-wrapper">


     <div class="row">


        <div class="col-md-6">
            <div class="form-group">
                <label class="control-label">Comercial de venta:</label>
                <select data-title="SELECCIONA" name="es_usuario" id="es_usuario" data-live-search="true"  class="selectpicker form-control" value="<?=$tipo_marca?>" onchange="select_es_usuario();" readonly>
                </select>  
            </div>
        </div>


        <div class="col-md-6">
            <div class="form-group">
                <label class="control-label">Producto:</label>
                <select data-title="SELECCIONA" name="es_usuario" id="es_usuario" data-live-search="true"  class="selectpicker form-control" value="<?=$tipo_marca?>" onchange="select_es_usuario();">
                </select>  
            </div>
        </div>

        <div class="col-md-6">
            <div class="form-group">
                <label class="control-label">Cliente:</label>
                <select data-title="SELECCIONA" name="es_usuario" id="es_usuario" data-live-search="true"  class="selectpicker form-control" value="<?=$tipo_marca?>" onchange="select_es_usuario();">
                </select>  
            </div>
        </div>

        <div class="col-md-6">
            <div class="form-group">
                <label class="control-label">Incoterm:</label>
                <select data-title="SELECCIONA" name="es_usuario" id="es_usuario" data-live-search="true"  class="selectpicker form-control" value="<?=$tipo_marca?>" onchange="select_es_usuario();">
                  <option>DDP</option>
                  <option>EXW</option>
                  <option>FOB</option>
                  <option>CIF</option>
                  <option>DDP</option>
                </select>  
            </div>
        </div>
       
        <div class="col-md-6">
            <div class="form-group">
                <label class="control-label">Precio de venta:</label>
                <input class="form-control valid" type="text" name="nombre" value="" placeholder="">
            </div>
        </div>


       
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
                  <a href="" data-toggle="modal" data-target="#modaldemo1" class="btn btn-simple btn-icon" onclick="editar_lista('<?=$id?>')"><i class="fa fa-eye"></i></a><input type="checkbox" name="">
                  
              </td>
            </tr>
            <tr>
              <td>PED02</td>
              <td>Dato 1</td>
              <td>Dato 2</td>
              <td>Dato 3</td>
              <td>Dato 4</td>
              <td>Dato 5</td>
              <td>Dato 6</td>
              
             <td>
                 <a href="" data-toggle="modal" data-target="#modaldemo1" class="btn btn-simple btn-icon" onclick="editar_lista('<?=$id?>')"><i class="fa fa-eye"></i></a><input type="checkbox" name="">

                  
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
                  <a href="" data-toggle="modal" data-target="#modaldemo1" class="btn btn-simple btn-icon" onclick="editar_lista('<?=$id?>')"><i class="fa fa-eye"></i></a><input type="checkbox" name="">
                  
              </td>
            </tr>
            <tr>
              <td>PED04</td>    
              <td>Dato 1</td>
              <td>Dato 2</td>
              <td>Dato 3</td>
              <td>Dato 4</td>
              <td>Dato 5</td>
              <td>Dato 6</td>
              
             <td>
                 <a href="" data-toggle="modal" data-target="#modaldemo1" class="btn btn-simple btn-icon" onclick="editar_lista('<?=$id?>')"><i class="fa fa-eye"></i></a><input type="checkbox" name="">

                  
              </td>
            </tr>
        </tbody>
           
     
      </table>
    </div><!-- table-wrapper -->

    <div class="footer">
  
        <legend>
        <a href="" class="btn btn-info btn-with-icon pull-right" data-toggle="modal" data-toggle="modal" data-target="#modaldemo1" >
          <div class="ht-40 justify-content-between">
            <span class="pd-x-15">Crear Pedido de venta</span>
            <span class="icon wd-40"><i class="fa fa-plus-circle"></i></span>
          </div>
        </a>
        </legend>  
   
    </div>
  </div><!-- br-section-wrapper -->



   <br>


   
</div><!-- br-pagebody -->



<div id="modaldemo1" class="modal fade">
  
  <div class="modal-dialog modal-dialog-vertical-center modal-lg" role="document">
    <div class="modal-content bd-0 tx-14">
      <form id="guardar_usuario" method="post" enctype="multipart/form-data"> 
      <div class="modal-header pd-y-20 pd-x-25">
        <h6 class="tx-14 mg-b-0 tx-uppercase tx-inverse tx-bold">Crear Ruta de entrega</h6>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body pd-25" id="div_modal_usuario">
       
        <div class="form-layout">

          <div class="content">    
      
            <h6 class="text-center"></h6>



            <div class="row">


              <div id="wizard1">
                <h3>Pedido de venta</h3>
                <section>

                  <div class="row">

                    <div class="col-md-6">
                        <div class="form-group">
                            <label class="control-label">Cliente:</label>
                            <select data-title="SELECCIONA" name="es_usuario" id="es_usuario" data-live-search="true"  class="selectpicker form-control" value="<?=$tipo_marca?>" onchange="select_es_usuario();">
                            </select>  
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="form-group">
                            <label class="control-label">Comercial de venta:</label>
                            <select data-title="SELECCIONA" name="es_usuario" id="es_usuario" data-live-search="true"  class="selectpicker form-control" value="<?=$tipo_marca?>" onchange="select_es_usuario();" readonly>
                            </select>  
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="form-group">
                            <label class="control-label">Producto:</label>
                            <select data-title="SELECCIONA" name="es_usuario" id="es_usuario" data-live-search="true"  class="selectpicker form-control" value="<?=$tipo_marca?>" onchange="select_es_usuario();">
                            </select>  
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="form-group">
                            <label class="control-label">Incoterm:</label>
                            <select data-title="SELECCIONA" name="es_usuario" id="es_usuario" data-live-search="true"  class="selectpicker form-control" value="<?=$tipo_marca?>" onchange="select_es_usuario();">
                              <option>DDP</option>
                              <option>EXW</option>
                              <option>FOB</option>
                              <option>CIF</option>
                              <option>DDP</option>
                            </select>  
                        </div>
                    </div>
                   
                    <div class="col-md-6">
                        <div class="form-group">
                            <label class="control-label">Precio de venta:</label>
                            <input class="form-control valid" type="text" name="nombre" value="" placeholder="">
                        </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-md-12">
                        <div class="table-wrapper">
                          <table id="datatableUbicaciones3" class="table display responsive nowrap">
                           <thead>
                              <tr>
                                 <th class="wd-10p">Folio</th>
                                <th class="wd-10p">Proveedor</th>
                                <th class="wd-20p">Variedad</th>
                                <th class="wd-10p">Fecha de carga estimada</th>
                                
                                <th class="wd-10p">Numero de pallets</th>
                                <th class="wd-10p">Peso neto estimado</th>
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
                                  
                                 <td>
                                     <a href="#"  class="btn btn-simple btn-danger btn-icon delete" ><i class="fa fa-trash"></i></a>
                                      
                                  </td>
                                </tr>
                                <tr>
                                  <td>PED03</td>
                                  <td>Dato 1</td>
                                  <td>Dato 2</td>
                                  <td>Dato 3</td>
                                  <td>Dato 4</td>
                                  <td>Dato 5</td>
                                  
                                 <td>
                                      <a href="#"  class="btn btn-simple btn-danger btn-icon delete" ><i class="fa fa-trash"></i></a>

                                      
                                  </td>
                                </tr>
                            </tbody>
                          </table>
                        </div><!-- table-wrapper -->
                    </div>
                  </div>
                  
                </section>
                <h3>Ruta de entrega</h3>
                <section style="width: 900px;">
                  <div class="row">
                    <div class="col-md-12">
                        <div class="form-group">
                            <label class="control-label">Nombre de la Ruta:</label>
                            <input class="form-control valid" type="text" name="nombre" value="" placeholder="">
                        </div>
                    </div>

                  
                  </div>
                  <div class="row">
                    <div class="col-md-12">

                      <div class="header">
                
                          <legend>
                          <a href="" class="btn btn-info btn-with-icon pull-right" data-toggle="modal" data-toggle="modal" data-target="#modaldemo1" >
                            <div class="ht-40 justify-content-between">
                              <span class="pd-x-15">Agregar prestador de servicio</span>
                              <span class="icon wd-40"><i class="fa fa-plus-circle"></i></span>
                            </div>
                          </a>
                          </legend>  
                     
                      </div>
                      
                     

                      <div class="table-wrapper">
                        <table id="datatableServicios" class="table display responsive nowrap" style="width: 100%;">
                          <thead>
                            <tr>
                              <th class="wd-10p">ID</th>
                               <th class="wd-10p">Prestador</th>
                              <th class="wd-10p">Servicio</th>
                              <th class="wd-10p">Costo</th>
                              
                              <th class="wd-10p">Acciones</th>
                             
                            </tr>
                          </thead>

                          <tbody>
                              <tr>
                                <td>1</td>
                                <td>Dato 1</td>
                                <td>Dato 2</td>
                                <td>Dato 3</td>
                                
                                
                               <td>
                                   <a href="#"  class="btn btn-simple btn-danger btn-icon delete" ><i class="fa fa-trash"></i></a>
                                    
                                </td>
                              </tr>
                              <tr>
                                <td>2</td>
                                <td>Dato 1</td>
                                <td>Dato 2</td>
                                <td>Dato 3</td>
                                
                               <td>
                                   <a href="#"  class="btn btn-simple btn-danger btn-icon delete" ><i class="fa fa-trash"></i></a>

                                    
                                </td>
                              </tr>

                              
                          </tbody>
                            
                        </table>
                      </div><!-- table-wrapper -->
                        
                    </div>
                  </div>

                  <div class="row">

                    <div class="col-md-6">
                        <div class="form-group">
                            <label class="control-label">Matricula del camión:</label>
                            <input class="form-control valid" type="text" name="nombre" value="" placeholder="">
                        </div>
                    </div>

                     <div class="col-md-6">
                        <div class="form-group">
                            <label class="control-label">Fecha de descarga estimada:</label>
                            <input class="form-control valid" type="date" name="nombre" value="" placeholder="">
                        </div>
                    </div>

                     <div class="col-md-6">
                        <div class="form-group">
                            <label class="control-label">Teléfono del transportista:</label>
                            <input class="form-control valid" type="text" name="nombre" value="" placeholder="">
                        </div>
                    </div>
                  </div>
                </section>
                <h3>Detalle Pedido de Venta</h3>
                <section>

                  <h3>Pedido de venta</h3>
                <div>

                  <div class="row">

                    <div class="col-md-6">
                        <div class="form-group">
                            <label class="control-label">Cliente:</label>
                            <select data-title="SELECCIONA" name="es_usuario" id="es_usuario" data-live-search="true"  class="selectpicker form-control" value="<?=$tipo_marca?>" onchange="select_es_usuario();">
                            </select>  
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="form-group">
                            <label class="control-label">Comercial de venta:</label>
                            <select data-title="SELECCIONA" name="es_usuario" id="es_usuario" data-live-search="true"  class="selectpicker form-control" value="<?=$tipo_marca?>" onchange="select_es_usuario();" readonly>
                            </select>  
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="form-group">
                            <label class="control-label">Producto:</label>
                            <select data-title="SELECCIONA" name="es_usuario" id="es_usuario" data-live-search="true"  class="selectpicker form-control" value="<?=$tipo_marca?>" onchange="select_es_usuario();">
                            </select>  
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="form-group">
                            <label class="control-label">Incoterm:</label>
                            <select data-title="SELECCIONA" name="es_usuario" id="es_usuario" data-live-search="true"  class="selectpicker form-control" value="<?=$tipo_marca?>" onchange="select_es_usuario();">
                              <option>DDP</option>
                              <option>EXW</option>
                              <option>FOB</option>
                              <option>CIF</option>
                              <option>DDP</option>
                            </select>  
                        </div>
                    </div>
                   
                    <div class="col-md-6">
                        <div class="form-group">
                            <label class="control-label">Precio de venta:</label>
                            <input class="form-control valid" type="text" name="nombre" value="" placeholder="">
                        </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-md-12">
                        <div class="table-wrapper">
                          <table id="datatableUbicaciones5" class="table display responsive nowrap">
                           <thead>
                              <tr>
                                 <th class="wd-10p">Folio</th>
                                <th class="wd-10p">Proveedor</th>
                                <th class="wd-20p">Variedad</th>
                                <th class="wd-10p">Fecha de carga estimada</th>
                                
                                <th class="wd-10p">Numero de pallets</th>
                                <th class="wd-10p">Peso neto estimado</th>
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
                                  
                                 <td>
                                     <a href="#"  class="btn btn-simple btn-danger btn-icon delete" ><i class="fa fa-trash"></i></a>
                                      
                                  </td>
                                </tr>
                                <tr>
                                  <td>PED03</td>
                                  <td>Dato 1</td>
                                  <td>Dato 2</td>
                                  <td>Dato 3</td>
                                  <td>Dato 4</td>
                                  <td>Dato 5</td>
                                  
                                 <td>
                                      <a href="#"  class="btn btn-simple btn-danger btn-icon delete" ><i class="fa fa-trash"></i></a>

                                      
                                  </td>
                                </tr>
                            </tbody>
                          </table>
                        </div><!-- table-wrapper -->
                    </div>
                  </div>
                  
                </div>
                <br>
                <h3>Ruta de entrega</h3>
                <div>
                  <div class="row">
                    <div class="col-md-12">
                        <div class="form-group">
                            <label class="control-label">Nombre de la Ruta:</label>
                            <input class="form-control valid" type="text" name="nombre" value="" placeholder="">
                        </div>
                    </div>

                  
                  </div>
                  <div class="row">
                    <div class="col-md-12">

                     
                      
                     

                      <div class="table-wrapper">
                        <table id="datatableServicios2" class="table display responsive nowrap" style="width: 100%;">
                          <thead>
                            <tr>
                              <th class="wd-10p">ID</th>
                              <th class="wd-10p">Prestador</th>
                              <th class="wd-10p">Servicio</th>
                              <th class="wd-10p">Costo</th>
                              
                              <th class="wd-10p">Acciones</th>
                             
                            </tr>
                          </thead>

                          <tbody>
                              <tr>
                                <td>1</td>
                                <td>Dato 1</td>
                                <td>Dato 2</td>
                                <td>Dato 3</td>
                                
                               <td>
                                   <a href="#"  class="btn btn-simple btn-danger btn-icon delete" ><i class="fa fa-trash"></i></a>
                                    
                                </td>
                              </tr>
                              <tr>
                                <td>2</td>
                                <td>Dato 1</td>
                                <td>Dato 2</td>
                                <td>Dato 3</td>
                                
                               <td>
                                   <a href="#"  class="btn btn-simple btn-danger btn-icon delete" ><i class="fa fa-trash"></i></a>

                                    
                                </td>
                              </tr>

                              
                          </tbody>
                            
                        </table>
                      </div><!-- table-wrapper -->
                        
                    </div>
                  </div>

                  <div class="row">

                    <div class="col-md-6">
                        <div class="form-group">
                            <label class="control-label">Matricula del camión:</label>
                            <input class="form-control valid" type="text" name="nombre" value="" placeholder="">
                        </div>
                    </div>

                     <div class="col-md-6">
                        <div class="form-group">
                            <label class="control-label">Fecha de descarga estimada:</label>
                            <input class="form-control valid" type="date" name="nombre" value="" placeholder="">
                        </div>
                    </div>

                     <div class="col-md-6">
                        <div class="form-group">
                            <label class="control-label">Teléfono del transportista:</label>
                            <input class="form-control valid" type="text" name="nombre" value="" placeholder="">
                        </div>
                    </div>

                     <div class="col-md-6">
                        <div class="form-group">
                            <label class="control-label">Enviar confirmación al cliente</label>
                            <input class="form-control valid" type="checkbox" name="nombre" value="" placeholder="">
                        </div>
                    </div>
                  </div>
                </div>
                  
                </section>
              </div>
               
                
            </div>


            

          
              
          </div>


        
        </div><!-- form-layout -->
      </div>
      <!--div class="modal-footer">
        
        <button type="button" class="btn btn-secondary tx-11 tx-uppercase pd-y-12 pd-x-25 tx-mont tx-medium" data-dismiss="modal">Cerrar</button>
        <input id="guardar" type="submit" name="" class="btn btn-primary tx-11 tx-uppercase pd-y-12 pd-x-25 tx-mont tx-medium" value="Generar"> 
      </div-->

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

     $('#datatableServicios').DataTable({
          responsive: true,
          language: {
            searchPlaceholder: 'Buscar...',
            sSearch: '',
            lengthMenu: '_MENU_ items/page',
          },

          "searching": false
        });

     $('#datatableServicios2').DataTable({
          responsive: true,
          language: {
            searchPlaceholder: 'Buscar...',
            sSearch: '',
            lengthMenu: '_MENU_ items/page',
          },
          "bInfo" : false,
          "bPaginate": false,
          "searching": false
        });



      $('#datatableUbicaciones2').DataTable({
          responsive: true,
          language: {
            searchPlaceholder: 'Buscar...',
            sSearch: '',
            lengthMenu: '_MENU_ items/page',
          }
        });


       $('#datatableUbicaciones3').DataTable({
          responsive: true,
          language: {
            searchPlaceholder: 'Buscar...',
            sSearch: '',
            lengthMenu: '_MENU_ items/page',
          },
          "bInfo" : false,
          "bPaginate": false,
          "searching": false
        });



 $('#datatableUbicaciones5').DataTable({
          responsive: true,
          language: {
            searchPlaceholder: 'Buscar...',
            sSearch: '',
            lengthMenu: '_MENU_ items/page',
          },
          "bInfo" : false,
          "bPaginate": false,
          "searching": false
        });



       $('#wizard1').steps({
          headerTag: 'h3',
          bodyTag: 'section',
          autoFocus: true,
          titleTemplate: '#index# #title#',

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