
<?php


//include("backend/seguridad.php");
//require("backend/connection.php");
require("../backend/connection.php");




$sqlProveedor = "SELECT * FROM proveedor";
$resultProveedor=  mysqli_query($conn, $sqlProveedor);

?>
<div class="br-pageheader pd-y-15 pd-l-20">
  <nav class="breadcrumb pd-0 mg-0 tx-12">
    <a class="breadcrumb-item" href="index.php">Inicio</a>
    <span class="breadcrumb-item active">Pedidos de Compra</span>
  </nav>
</div><!-- br-pageheader -->
<div class="pd-x-20 pd-sm-x-30 pd-t-20 pd-sm-t-30">
  <h4 class="tx-gray-800 mg-b-5">Pedidos de Compra</h4>
  <p class="mg-b-0"></p>
</div>

<div class="br-pagebody">
  <div class="br-section-wrapper">


    <div class="header">
  
        <legend>Listado de Pedidos
        <a href="" class="btn btn-info btn-with-icon pull-right" href="" data-toggle="modal" data-target="#modal_pedido_compra" onclick="limpiar();">
          <div class="ht-40 justify-content-between">
            <span class="pd-x-15">Nuevo</span>
            <span class="icon wd-40"><i class="fa fa-plus-circle"></i></span>
          </div>
        </a>
        </legend>  
   
    </div>
    
   

    <div class="table-wrapper">
      <table id="datatable" class="table display responsive nowrap">
        <thead>
          <tr>
            <th class="wd-10p">ID</th>
            <th class="wd-10p">Proveedor</th>
            <th class="wd-20p">Producto</th>
            <th class="wd-10p">Fecha de carga estimada</th>
            
            <th class="wd-10p">Numero de pallets</th>
            <th class="wd-10p">Peso neto estimado</th>
            <th class="wd-10p">Acciones</th>
           
          </tr>
        </thead>

        <tbody>
            
           
     
      </table>
    </div><!-- table-wrapper -->
  </div><!-- br-section-wrapper -->
   
</div><!-- br-pagebody -->



<div id="modal_pedido_compra" class="modal fade">
  
  <div class="modal-dialog modal-dialog-vertical-center modal-lg" role="document">
    <div class="modal-content bd-0 tx-14">
      <form id="guardar_pedido_compra" method="post" enctype="multipart/form-data"> 
      <div class="modal-header pd-y-20 pd-x-25">
        <h6 class="tx-14 mg-b-0 tx-uppercase tx-inverse tx-bold">Pedido</h6>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body pd-25" id="div_modal_pedido_compra">
       
        <div class="form-layout">

          <div class="content">    
      
            <h6 class="text-center"></h6>
            <div class="row">
                <div class="col-md-12">
                    <div class="form-group">
                        <label class="control-label">Proveedor</label>
                        <select data-title="SELECCIONA" name="id_proveedor" id="id_proveedor" data-live-search="true"  class="selectpicker form-control" onchange="datos_proveedor();" required="">
                          <option disabled="" selected="">Selecciona</option>
                            <?php
                              while($rowProveedor =mysqli_fetch_array($resultProveedor,MYSQLI_ASSOC)){
                                $id_p= $rowProveedor["id"];
                                $nombre = $rowProveedor["nombre_fiscal"];
                                ?>
                                    <option value="<?=$id_p?>"><?=$nombre?></option>  
                                <?php
                              }
                            ?>
                        </select>  
                    </div>
                </div>
              </div>
              <div class="row" id="datos_proveedor">
               
                <div class="col-md-6">
                    <div class="form-group">
                        <label class="control-label">Producto</label>
                        <select data-title="SELECCIONA" name="id_producto" id="id_producto" data-live-search="true"  class="selectpicker form-control"  required="">
                        </select>  
                    </div>
                </div>

              
                 <div class="col-md-6">
                    <div class="form-group">
                        <label class="control-label">Dirección de carga</label>
                        <select data-title="SELECCIONA" name="id_direccion" id="id_direccion" data-live-search="true"  class="selectpicker form-control" required="">
                        </select> 
                    </div>
                </div>
              </div>

               <div class="row" id="datos_producto">
                <div class="col-md-6">
                    <div class="form-group">
                        <label class="control-label">Comercial de compra</label>
                        <input class="form-control valid" type="text" name="id_comercial_compra" id="id_comercial_compra" value="" placeholder="" required="" readonly="">
                    </div>
                </div>


                <div class="col-md-6">
                    <div class="form-group">
                        <label class="control-label">Precio de compra</label>
                        <input class="form-control valid" type="number" name="precio_compra" id="precio_compra" value="" placeholder="" required="" readonly="">
                    </div>
                </div>
              </div>

              <div class="row">


                 <div class="col-md-6">
                    <div class="form-group">
                        <label class="control-label">Fecha de carga estimada</label>
                        <input class="form-control valid" type="date" name="fecha_carga_estimada"  id="fecha_carga_estimada" value="" placeholder="" required="">
                    </div>
                </div>

                <div class="col-md-6">
                    <div class="form-group">
                        <label class="control-label">Numero de pallets</label>
                       <input class="form-control valid" type="number" name="numero_pallets" id="numero_pallets" value="" placeholder="" required="">
                    </div>
                </div>


                <div class="col-md-6">
                    <div class="form-group">
                        <label class="control-label">Peso neto estimado</label>
                        <input class="form-control valid" type="number" name="peso_neto_estimado" id="peso_neto_estimado" value="" placeholder="" required="">
                    </div>
                </div>

               

                <div class="col-md-6">
                    <div class="form-group">
                        <label class="control-label">Peso neto real</label>
                        <input class="form-control valid" type="text" name="peso_neto_real" id="peso_neto_real" value="" placeholder="" readonly="" >
                    </div>
                </div>

                <div class="col-md-6">
                    <div class="form-group">
                        <label class="control-label">Referencia de carga</label>
                        <input class="form-control valid" type="text" name="referencia_carga" id="referencia_carga" value="" placeholder="" required="">
                    </div>
                </div>
            </div>



            <h3>Factura de compra al Proveedor</h3>
            <div class="row">
               <div class="col-md-12">
                    <div class="form-group">
                        <label class="control-label">Número de factura de venta asociado</label>
                        <input class="form-control valid" type="text" name="no_factura" id="no_factura" value="" placeholder="" >
                    </div>
                </div>


                <div class="col-md-12">
                    <div class="form-group">
                        <label class="control-label">Adjuntar factura</label>
                        <input class="form-control valid" type="file" name="factura" id="factura" value="" placeholder="" >
                    </div>
                </div>


                 <div class="col-md-12">
                    <div class="form-group">
                        <label class="control-label">Base imponible</label>
                        <input class="form-control valid" type="text" name="base_imponible" id="base_imponible" value="" placeholder="" >
                    </div>
                </div>


                <div class="col-md-12">
                    <div class="form-group">
                        <label class="control-label">IVA</label>
                        <input class="form-control valid" type="text" name="iva" id="iva" value="" placeholder="" >
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






<div id="procesa_pedido_compra"></div>


<script>

$(document).ready (function() {
    $.ajax({
        url: "../backend/get_pedido_compra.php",
        beforeSend: function(){
              //imagen de carga
              $("#procesa").html("<p align='center'><img src='../img/ajax-loader.gif' /></p>");
        },
        success : function(data) {
            var o = JSON.parse(data);//A la variable le asigno el json decodificado
            $('#datatable').dataTable( {
                data : o,
                columns: [
                      { },
                      { },
                      { },
                      { },
                      { },
                      { },
                      {
                          data: null,
                          className: "center",
                          defaultContent: '<a href="#"  class="btn btn-simple btn-icon modify" ><i class="fa fa-edit"></i></a><a href="#"  class="btn btn-simple btn-danger btn-icon delete" ><i class="fa fa-trash"></i></a>'
                      }
                ],
                destroy: true,
                responsive: true,
                
                language: {
                search: "",
                searchPlaceholder: "Buscar... ",
                "processing": "Cargando...",
                "sLengthMenu": "Muestra _MENU_ resultados",
                "paginate": {
                    "first":      "Primera",
                    "last":       "Última",
                    "next":       "Siguiente",
                    "previous":   "Anterior"
                },
                "info":           "Mostrando _START_ de _END_ de _TOTAL_ resultados",
                "infoEmpty":      "Mostrando 0 de 0 de 0 resultados",
                }
            });


            var table = $('#datatable').DataTable();
            // Borrar Lista
            table.on( 'click', '.delete', function (e) {
              var confirma = confirm('¿Esta seguro de borrar el registro?');
              if (confirma == true){
                  $tr = $(this).closest('tr');
                  var data = table.row($tr).data();
                  var closestRow = $(this).closest('tr');
                  var data = table.row( $(this).parents(closestRow)).data();
                  var list_id = data[0];
                  
                   $('#procesa_pedido_compra').load('../backend/guardar_pedido_compra.php?id_borrar='+list_id);
                  table.row($tr).remove().draw();
                  e.preventDefault();
              }
            } );


             table.on( 'click', '.modify', function (e) {
               
                $tr = $(this).closest('tr');
                var data = table.row($tr).data();
                var closestRow = $(this).closest('tr');
                var data = table.row( $(this).parents(closestRow)).data();
                var list_id = data[0];


                document.getElementById("div_modal_pedido_compra").innerHTML = "";


                
                $('#div_modal_pedido_compra').load('edita_pedido_compra.php?id='+list_id);
                $('#modal_pedido_compra').modal('show');
                e.preventDefault();
            });
        }       
    });

});

$('#guardar_pedido_compra').submit(function () {

    $('#modal_pedido_compra').modal('hide');

      var formData = new FormData($("#guardar_pedido_compra")[0]);
      $.ajax({
        type: 'POST',
        url: '../backend/guardar_pedido_compra.php',
        data: formData,
        contentType: false,
        processData: false,
        beforeSend: function(){
          $("#procesa_pedido_compra").html("<p align='center'><img src='../ajax-loader.gif' /></p>");
        },
        success: function(data){
          $("#procesa_pedido_compra").empty();
          $("#procesa_pedido_compra").append(data);
        }
      });
   
    return false;
});




function limpiar(){
 
  document.getElementById("id_proveedor").value = "" ;
  datos_proveedor();
  datos_producto();
  document.getElementById("id_comercial_compra").value = "" ;

  document.getElementById("fecha_carga_estimada").value = "" ;
  document.getElementById("numero_pallets").value = "" ;
  document.getElementById("peso_neto_estimado").value = "" ;
  document.getElementById("referencia_carga").value = "" ;
  document.getElementById("no_factura").value = "" ;
  document.getElementById("base_imponible").value = "" ;
  document.getElementById("factura").value = "" ;
  document.getElementById("iva").value = "" ;
  document.getElementById("id").value = "" ;
  document.getElementById("id_factura").value = "" ;
    document.getElementById("comercial_compra").value = "" ;
  document.getElementById("precio_compra").value = "" ;

 
}

function datos_proveedor(){
 
  var id_proveedor = document.getElementById("id_proveedor").value;

  $("#datos_proveedor").load('resultado_pedido_compra.php?id_proveedor='+id_proveedor);


 
}


function datos_producto(){

  
  var id_producto = document.getElementById("id_producto").value;
  
  

  $("#datos_producto").load('resultado_pedido_compra_2.php?id_producto='+id_producto);





}




</script>