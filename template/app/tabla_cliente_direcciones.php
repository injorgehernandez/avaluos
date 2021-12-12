<?php
//include("../assets/includes/functions.php");
//include("../assets/includes/seguridad.php");
//session_start();

require("../backend/connection.php");



$id_cliente = $_GET["id_cliente"];




?>

   <div class="br-section-wrapper col-md-12">

   <div class="header">
                
        <legend>Listado de Direcciones
        <a href="" class="btn btn-info btn-with-icon pull-right" href="" data-toggle="modal" data-target="#modal_cliente_direccion" onclick="limpiar_direccion()">
            <div class="ht-40 justify-content-between">
              <span class="pd-x-15">Nuevo</span>
              <span class="icon wd-40"><i class="fa fa-plus-circle"></i></span>
            </div>
          </a>
          </legend>  
     
      </div>
                  
    <div class="table-wrapper">
        <table id="datatabledirecciones" class="table display responsive nowrap" style="width:100%">
          <thead>
            <tr>
              <th class="wd-10p">ID</th>
              <th class="wd-10p">Calle</th>
              <th class="wd-10p">Número interior</th>
              <th class="wd-10p">Número exterior</th>
              <th class="wd-10p">Codigo Postal</th>
              <th class="wd-10p">Municipio</th>
              <th class="wd-10p">Estado</th>
              <th class="wd-20p">País</th>
              <th class="wd-10p">Acciones</th>
             
            </tr>
          </thead>

          <tbody>
              
             
          </tbody>
             
       
        </table>
      </div><!-- table-wrapper -->
</div><!-- end content-->


<div id="modal_cliente_direccion" class="modal fade">
  
  <div class="modal-dialog modal-dialog-vertical-center modal-lg" role="document" style="max-width: 850px;">
    <div class="modal-content bd-0 tx-14">
      <form id="guardar_cliente_direccion" method="post" enctype="multipart/form-data"> 
      <div class="modal-header pd-y-20 pd-x-25">
        <h6 class="tx-14 mg-b-0 tx-uppercase tx-inverse tx-bold">Dirección</h6>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body pd-25" id="div_modal_cliente_direccion">
        
       
       <div class="form-layout">
          <input class="form-control valid" type="hidden" name="id_cliente"  id="id_cliente" value="<?=$id_cliente?>" placeholder="">

          <div class="content">    

            <h6 class="text-center"></h6>
            <div class="row">
                
                <div class="col-md-6">
                    <div class="form-group">
                        <label class="control-label">Calle</label>
                        <input class="form-control valid" type="text" name="calle"  id="calle" value="" placeholder="" required="">
                    </div>
                </div>

                <div class="col-md-3">
                    <div class="form-group">
                        <label class="control-label">Número exterior</label>
                        <input class="form-control valid" type="text" name="numero_exterior" id="numero_exterior" value="" placeholder="" required="">
                    </div>
                </div>

                <div class="col-md-3">
                    <div class="form-group">
                        <label class="control-label">Número interior</label>
                        <input class="form-control valid" type="text" name="numero_interior" id="numero_interior" placeholder="" required="">
                    </div>
                </div>

             

                <div class="col-md-3">
                    <div class="form-group">
                        <label class="control-label">Código Postal</label>
                        <input class="form-control valid" type="text" name="cp" id="cp"  placeholder="" required="">
                    </div>
                </div>

                 <div class="col-md-3">
                    <div class="form-group">
                        <label class="control-label">Municipio</label>
                        <input class="form-control valid" type="text" name="municipio" id="municipio"  placeholder="" required="">
                    </div>
                </div>

                <div class="col-md-3">
                    <div class="form-group">
                        <label class="control-label">Estado</label>
                        <input class="form-control valid" type="text" name="estado" id="estado"  placeholder="" required="">
                    </div>
                </div>

                 <div class="col-md-3">
                    <div class="form-group">
                        <label class="control-label">País</label>
                        <input class="form-control valid" type="text" name="pais" id="pais"  placeholder="" required="">
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


<div id="procesa_cliente_direccion"></div>





<script>

$(document).ready (function() {
  $.ajax({
      url: "../backend/get_cliente_direccion.php?id_cliente=<?=$id_cliente?>",
      beforeSend: function(){
            //imagen de carga
            $("#procesa").html("<p align='center'><img src='../img/ajax-loader.gif' /></p>");
      },
      success : function(data) {
          var o = JSON.parse(data);//A la variable le asigno el json decodificado
          $('#datatabledirecciones').dataTable( {
              data : o,
              columns: [
                    { },
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


          var table = $('#datatabledirecciones').DataTable();
          // Borrar Lista
          table.on( 'click', '.delete', function (e) {
            var confirma = confirm('¿Esta seguro de borrar el registro?');
            if (confirma == true){
                $tr = $(this).closest('tr');
                var data = table.row($tr).data();
                var closestRow = $(this).closest('tr');
                var data = table.row( $(this).parents(closestRow)).data();
                var list_id = data[0];
                
                 $('#procesa_cliente_direccion').load('../backend/guardar_cliente_direccion.php?id_borrar='+list_id);
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


              document.getElementById("div_modal_cliente_direccion").innerHTML = "";
              
              $('#div_modal_cliente_direccion').load('edita_cliente_direccion.php?id='+list_id);
              $('#modal_cliente_direccion').modal('show');
              e.preventDefault();
          });
      }       
  });

});


$('#guardar_cliente_direccion').submit(function () {

    $('#modal_cliente_direccion').modal('hide');

        $('#procesa_cliente_direccion').delay(800).queue(function(nxt){

            $.post('../backend/guardar_cliente_direccion.php', $('#guardar_cliente_direccion').serialize(), function (data, textStatus) {
        
                $('#procesa_cliente_direccion').append(data);
            });
            
        });   
   
    return false;
});



function limpiar_direccion(){

  document.getElementById("id_direccion").value = "" ;
  document.getElementById("precio_venta").value = "" ;
  document.getElementById("email_comercial_vende").value = "" ;
  document.getElementById("prefijo_pais").value = "" ;
  document.getElementById("telefono").value = "" ;
  document.getElementById("id_comercial_compra").value = "" ;
  document.getElementById("comision").value = "" ;

}

</script>

