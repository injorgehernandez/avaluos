<?php
//include("../assets/includes/functions.php");
//include("../assets/includes/seguridad.php");
//session_start();

require("../backend/connection.php");



$id_cliente = $_GET["id_cliente"];



$sqlProducto = "SELECT * FROM producto";
$resultProducto = mysqli_query($conn, $sqlProducto);



$sqlComercialCompra = "SELECT * FROM usuario WHERE tipo_usuario='4'";
$resultComercialCompra=  mysqli_query($conn, $sqlComercialCompra);


?>

   <div class="br-section-wrapper col-md-12">

   <div class="header">
                
        <legend>Listado de Productos que provee
        <a href="" class="btn btn-info btn-with-icon pull-right" href="" data-toggle="modal" data-target="#modal_cliente_producto" onclick="limpiar_producto()">
            <div class="ht-40 justify-content-between">
              <span class="pd-x-15">Nuevo</span>
              <span class="icon wd-40"><i class="fa fa-plus-circle"></i></span>
            </div>
          </a>
          </legend>  
     
      </div>
                  
    <div class="table-wrapper">
        <table id="datatableProductos" class="table display responsive nowrap" style="width:100%">
          <thead>
            <tr>
              <th class="wd-10p">ID</th>
              <th class="wd-10p">Producto</th>
              <th class="wd-10p">Precio de venta</th>
              <th class="wd-10p">Email del comercia</th>
              <th class="wd-20p">Teléfono Whatsapp </th>
              <th class="wd-10p">Comercial de compra asignado</th>
              
              <th class="wd-10p">Comisión que genera</th>
              <th class="wd-10p">Acciones</th>
             
            </tr>
          </thead>

          <tbody>
              
             
          </tbody>
             
       
        </table>
      </div><!-- table-wrapper -->
</div><!-- end content-->


<div id="modal_cliente_producto" class="modal fade">
  
  <div class="modal-dialog modal-dialog-vertical-center modal-lg" role="document" style="max-width: 850px;">
    <div class="modal-content bd-0 tx-14">
      <form id="guardar_cliente_producto" method="post" enctype="multipart/form-data"> 
      <div class="modal-header pd-y-20 pd-x-25">
        <h6 class="tx-14 mg-b-0 tx-uppercase tx-inverse tx-bold">Producto</h6>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body pd-25" id="div_modal_cliente_producto">
        <input class="form-control valid" type="hidden" name="id_cliente"  id="id_cliente" value="<?=$id_cliente?>" placeholder="">
       
       <div class="form-layout">

          <div class="content">    

            <h6 class="text-center"></h6>
            <div class="row">
                <div class="col-md-6">
                    <div class="form-group">
                        <label class="control-label">Producto</label>
                         <select data-title="SELECCIONA" name="id_producto" id="id_producto"  value=""data-live-search="true"  class="selectpicker form-control" required="">
                          <?php
                            while($rowProducto =mysqli_fetch_array($resultProducto,MYSQLI_ASSOC)){
                              $id_p= $rowProducto["id"];
                              $nombre = $rowProducto["producto"];
                              ?>
                                  <option value="<?=$id_p?>"><?=$nombre?></option>  
                              <?php
                            }
                          ?>
                        </select>  
                    </div>
                </div>

                <div class="col-md-6">
                    <div class="form-group">
                        <label class="control-label">Precio de venta (€/Kg)</label>
                        <input class="form-control valid" type="number" step="0.01" name="precio_venta"  id="precio_venta" value="" placeholder="" required="">
                    </div>
                </div>

                <div class="col-md-6">
                    <div class="form-group">
                        <label class="control-label">Email del comercial que vende el producto (para comunicaciones comerciales)</label>
                        <input class="form-control valid" type="email" name="email_comercial_compra" id="email_comercial_compra" value="" placeholder="" required="">
                    </div>
                </div>

              </div>

              <div class="row">

                <div class="col-md-4">
                    <div class="form-group">
                        <label class="control-label">Prefijo país teléfono Whatsapp comercial</label>
                        <input class="form-control valid" type="text" name="prefijo_pais" id="prefijo_pais" placeholder="" required="">
                    </div>
                </div>
                
                <div class="col-md-8">
                    <div class="form-group">
                        <label class="control-label">Teléfono Whatsapp del comercial que <br>vende el producto</label>
                        <input class="form-control valid" type="text" name="telefono" id="telefono"  placeholder="" required="">
                    </div>
                </div>

              </div>

              <div class="row">

                 <div class="col-md-6">
                    <div class="form-group">
                        <label class="control-label">Comercial de compra asignado</label>
                       <select data-title="SELECCIONA" name="id_comercial_venta" id="id_comercial_venta"  value=""data-live-search="true"  class="selectpicker form-control" required="">
                         <?php
                            while($rowComercialCompra =mysqli_fetch_array($resultComercialCompra,MYSQLI_ASSOC)){
                              $id_c = $rowComercialCompra["id"];
                              $nombre = $rowComercialCompra["nombre"]." ".$rowComercialCompra["apellidos"];
                              ?>
                                  <option value="<?=$id_c?>"><?=$nombre?></option>  
                              <?php
                            }
                          ?>
                        </select>  
                    </div>
                </div>

                <div class="col-md-6">
                    <div class="form-group">
                        <label class="control-label">Comisión</label>
                        <input class="form-control valid" type="number" step="0.01" name="comision" id="comision"  placeholder="" required="">
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


<div id="procesa_cliente_producto"></div>





<script>

$(document).ready (function() {
  $.ajax({
      url: "../backend/get_cliente_producto.php?id_cliente=<?=$id_cliente?>",
      beforeSend: function(){
            //imagen de carga
            $("#procesa").html("<p align='center'><img src='../img/ajax-loader.gif' /></p>");
      },
      success : function(data) {
          var o = JSON.parse(data);//A la variable le asigno el json decodificado
          $('#datatableProductos').dataTable( {
              data : o,
              columns: [
                    { },
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


          var table = $('#datatableProductos').DataTable();
          // Borrar Lista
          table.on( 'click', '.delete', function (e) {
            var confirma = confirm('¿Esta seguro de borrar el registro?');
            if (confirma == true){
                $tr = $(this).closest('tr');
                var data = table.row($tr).data();
                var closestRow = $(this).closest('tr');
                var data = table.row( $(this).parents(closestRow)).data();
                var list_id = data[0];
                
                 $('#procesa_cliente_producto').load('../backend/guardar_cliente_producto.php?id_borrar='+list_id);
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


              document.getElementById("div_modal_cliente_producto").innerHTML = "";
              
              $('#div_modal_cliente_producto').load('edita_cliente_producto.php?id='+list_id);
              $('#modal_cliente_producto').modal('show');
              e.preventDefault();
          });
      }       
  });

});


$('#guardar_cliente_producto').submit(function () {

    $('#modal_cliente_producto').modal('hide');

        $('#procesa_cliente_producto').delay(800).queue(function(nxt){

            $.post('../backend/guardar_cliente_producto.php', $('#guardar_cliente_producto').serialize(), function (data, textStatus) {
        
                $('#procesa_cliente_producto').append(data);
            });
            
        });   
   
    return false;
});



function limpiar_producto(){

  document.getElementById("id_producto").value = "" ;
  document.getElementById("precio_venta").value = "" ;
  document.getElementById("email_comercial_compra").value = "" ;
  document.getElementById("prefijo_pais").value = "" ;
  document.getElementById("telefono").value = "" ;
  document.getElementById("id_comercial_venta").value = "" ;
  document.getElementById("comision").value = "" ;

}

</script>

