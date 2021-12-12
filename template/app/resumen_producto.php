
<?php


//include("backend/seguridad.php");
//require("backend/connection.php");


?>
<div class="br-pageheader pd-y-15 pd-l-20">
  <nav class="breadcrumb pd-0 mg-0 tx-12">
    <a class="breadcrumb-item" href="index.php">Inicio</a>
    <span class="breadcrumb-item active">Productos</span>
  </nav>
</div><!-- br-pageheader -->
<div class="pd-x-20 pd-sm-x-30 pd-t-20 pd-sm-t-30">
  <h4 class="tx-gray-800 mg-b-5">Productos</h4>
  <p class="mg-b-0"></p>
</div>

<div class="br-pagebody">
  <div class="br-section-wrapper">


    <div class="header">
  
        <legend>Listado de Productos
        <a href="" class="btn btn-info btn-with-icon pull-right" href="" data-toggle="modal" data-target="#modal_producto"  onclick="limpiar()">
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
            <th class="wd-10p">Producto</th>
            <th class="wd-20p">Temperatura óptica</th>
            <th class="wd-10p">Comisión de compra</th>
            
            <th class="wd-10p">Comisión de venta</th>
            <th class="wd-10p">Acciones</th>
           
          </tr>
        </thead>

        <tbody>
           
        </tbody>
           
     
      </table>
    </div><!-- table-wrapper -->
  </div><!-- br-section-wrapper -->
   
</div><!-- br-pagebody -->



<div id="modal_producto" class="modal fade">
  
  <div class="modal-dialog modal-dialog-vertical-center modal-lg" role="document">
    <div class="modal-content bd-0 tx-14">
      <form id="guardar_producto" method="post" enctype="multipart/form-data"> 
      <div class="modal-header pd-y-20 pd-x-25">
        <h6 class="tx-14 mg-b-0 tx-uppercase tx-inverse tx-bold">Producto</h6>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body pd-25" id="div_modal_producto">
       
        <div class="form-layout">

          <div class="content">    
      
            <h6 class="text-center"></h6>
            <div class="row">
                <div class="col-md-6">
                    <div class="form-group">
                        <label class="control-label">Proucto Nombre</label>
                        <input class="form-control valid" type="text" name="producto"  id="producto" value="" placeholder="" required="">
                    </div>
                </div>


                <div class="col-md-6">
                    <div class="form-group">
                        <label class="control-label">Temperatura óptima de transporte</label>
                        <input class="form-control valid" type="text" name="temperatura_optima" id="temperatura_optima"  value="" placeholder="" required="">
                    </div>
                </div>

                <div class="col-md-6">
                    <div class="form-group">
                        <label class="control-label">Comisión de compra que genera al comercial (€/Kg)</label>
                        <input class="form-control valid" type="number" step="0.01" name="comision_compra" id="comision_compra" value="" placeholder="" required="">
                    </div>
                </div>

                 <div class="col-md-6">
                    <div class="form-group">
                        <label class="control-label">Comisión de venta que genera al comercial (€/Kg)</label>
                        <input class="form-control valid"  type="number" step="0.01" name="comision_venta" value=""  id="comision_venta" value="" placeholder="" required="">
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






<div id="procesa_producto"></div>


<script>

$(document).ready (function() {
  $.ajax({
      url: "../backend/get_productos.php",
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
                
                 $('#procesa_producto').load('../backend/guardar_producto.php?id_borrar='+list_id);
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


              document.getElementById("div_modal_producto").innerHTML = "";
              
              $('#div_modal_producto').load('edita_producto.php?id='+list_id);
              $('#modal_producto').modal('show');
              e.preventDefault();
          });
      }       
  });

});


$('#guardar_producto').submit(function () {

    $('#modal_producto').modal('hide');

        $('#procesa_producto').delay(800).queue(function(nxt){

            $.post('../backend/guardar_producto.php', $('#guardar_producto').serialize(), function (data, textStatus) {
        
                $('#procesa_producto').append(data);
            });
            
        });   
   
    return false;
});



function limpiar(){

  document.getElementById("producto").value = "" ;
  document.getElementById("temperatura_optima").value = "" ;
  document.getElementById("comision_compra").value = "" ;
  document.getElementById("comision_venta").value = "" ;
  document.getElementById("id").value = "" ;

}






</script>