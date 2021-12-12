
<?php


//include("backend/seguridad.php");
//require("backend/connection.php");


?>
<div class="br-pageheader pd-y-15 pd-l-20">
  <nav class="breadcrumb pd-0 mg-0 tx-12">
    <a class="breadcrumb-item" href="index.php">Inicio</a>
    <span class="breadcrumb-item active">Prestador de servicios</span>
  </nav>
</div><!-- br-pageheader -->
<div class="pd-x-20 pd-sm-x-30 pd-t-20 pd-sm-t-30">
  <h4 class="tx-gray-800 mg-b-5">Prestador de servicios</h4>
  <p class="mg-b-0"></p>
</div>

<div class="br-pagebody">
  <div class="br-section-wrapper">


    <div class="header">
  
        <legend>Listado de Prestador de servicios
        <a href="" class="btn btn-info btn-with-icon pull-right" href="" data-toggle="modal" data-target="#modal_prestador_servicios" >
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
            <th class="wd-10p">Nombre</th>
            <th class="wd-20p">Direccion residencia</th>
            <th class="wd-10p">EORI/VAT</th>
            
            <th class="wd-10p">Email sifresh</th>
            <th class="wd-10p">Email pagos</th>
            <th class="wd-10p">Acciones</th>
           
          </tr>
        </thead>

        <tbody>
            
        </tbody>
           
     
      </table>
    </div><!-- table-wrapper -->
  </div><!-- br-section-wrapper -->
   
</div><!-- br-pagebody -->



<div id="modal_prestador_servicios" class="modal fade">
  
  <div class="modal-dialog modal-dialog-vertical-center modal-lg" role="document">
    <div class="modal-content bd-0 tx-14">
      <form id="guardar_prestador_servicios" method="post" enctype="multipart/form-data"> 
      <div class="modal-header pd-y-20 pd-x-25">
        <h6 class="tx-14 mg-b-0 tx-uppercase tx-inverse tx-bold">Comercial de compra</h6>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body pd-25" id="div_modal_prestador_servicios">
       
        <div class="form-layout">

          <div class="content">    
      
            <h6 class="text-center"></h6>
            <div class="row">


                <div class="col-md-6">
                    <div class="form-group">
                        <label class="control-label">Servicio que presta</label>
                        <input class="form-control valid" type="text" name="servicio_que_presta" id="servicio_que_presta" value="" placeholder="" required="">
                    </div>
                </div>

                <div class="col-md-6">
                    <div class="form-group">
                        <label class="control-label">Nombre fiscal</label>
                        <input class="form-control valid" type="text" name="nombre_fiscal" id="nombre_fiscal" value="" placeholder="" required="">
                    </div>
                </div>


                <div class="col-md-6">
                    <div class="form-group">
                        <label class="control-label">Nombre corto</label>
                        <input class="form-control valid" type="text" name="nombre_corto" id="nombre_corto" value="" placeholder="" required="">
                    </div>
                </div>

                 <div class="col-md-6">
                    <div class="form-group">
                        <label class="control-label">Direccion fiscal</label>
                        <input class="form-control valid" type="text" name="direccion_fiscal" id="direccion_fiscal"  value="" placeholder="" required="">
                    </div>
                </div>

                <div class="col-md-6">
                    <div class="form-group">
                        <label class="control-label">Código postal</label>
                        <input class="form-control valid" type="text" name="cp" id="cp" placeholder="" required="">
                    </div>
                </div>

                <div class="col-md-6">
                    <div class="form-group">
                        <label class="control-label">Municipio</label>
                        <input class="form-control valid" type="text" name="municipio" id="municipio" placeholder="" required="">
                    </div>
                </div>

                 <div class="col-md-6">
                    <div class="form-group">
                        <label class="control-label">País</label>
                       <input class="form-control valid" type="text" name="pais" id="pais" placeholder="" required="">
                    </div>
                </div>

                 <div class="col-md-6">
                    <div class="form-group">
                        <label class="control-label">EORI/VAT</label>
                        <input class="form-control valid" type="text" name="eori_vat" id="eori_vat" placeholder="" required="">
                    </div>
                </div>

              

                 <div class="col-md-6">
                    <div class="form-group">
                        <label class="control-label">Email Pagos</label>
                       <input class="form-control valid" type="email" name="email_pagos"  id="email_pagos" value="" placeholder="" required="">
                    </div>
                </div>

                  <div class="col-md-6">
                    <div class="form-group">
                        <label class="control-label">Email Comercial</label>
                       <input class="form-control valid" type="email" name="email_comercial"  id="email_comercial" value="" placeholder="" required="">
                    </div>
                </div>

                <div class="col-md-6">
                    <div class="form-group">
                        <label class="control-label">Teléfono Comercial</label>
                       <input class="form-control valid" type="text" name="telefono_comercial"  id="telefono_comercial" value="" placeholder="" required="">
                    </div>
                </div>


                <div class="col-md-6">
                    <div class="form-group">
                        <label class="control-label">Banco moneda</label>
                       <input class="form-control valid" type="text" name="banco_moneda"  id="banco_moneda" value="" placeholder="" required="">
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label class="control-label">Banco nombre</label>
                       <input class="form-control valid" type="text" name="banco_nombre" id="banco_nombre" value="" placeholder="" required="">
                    </div>
                </div>
                 <div class="col-md-6">
                    <div class="form-group">
                        <label class="control-label">Banco cuenta</label>
                       <input class="form-control valid" type="text" name="banco_cuenta" id="banco_cuenta" value="" placeholder="" required="">
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label class="control-label">Banco SWIFT</label>
                       <input class="form-control valid" type="text" name="banco_swift" id="banco_swift" value="" placeholder="" required="">
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label class="control-label">Banco BIC</label>
                       <input class="form-control valid" type="text" name="banco_bic" id="banco_bic" value="" placeholder="" required="">
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






<div id="procesa_prestador_servicios"></div>


<script>

$(document).ready (function() {
  $.ajax({
      url: "../backend/get_prestador_servicios.php",
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
                
                 $('#procesa_comercial_compra').load('../backend/guardar_prestador_servicios.php?id_borrar='+list_id);
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


              document.getElementById("div_modal_prestador_servicios").innerHTML = "";
              
              $('#div_modal_prestador_servicios').load('edita_prestador_servicios.php?id='+list_id);
              $('#modal_prestador_servicios').modal('show');
              e.preventDefault();
          });
      }       
  });

});


$('#guardar_prestador_servicios').submit(function () {

    $('#modal_prestador_servicios').modal('hide');

        $('#procesa_prestador_servicios').delay(800).queue(function(nxt){

            $.post('../backend/guardar_prestador_servicios.php', $('#guardar_prestador_servicios').serialize(), function (data, textStatus) {
        
                $('#procesa_prestador_servicios').append(data);
            });
            
        });   
   
    return false;
});



function limpiar(){

  document.getElementById("id").value = "" ;
  document.getElementById("nombre").value = "" ;
  document.getElementById("apellidos").value = "" ;
  document.getElementById("nombre_corto").value = "" ;
  document.getElementById("direccion_residencia").value = "" ;
  document.getElementById("cp").value = "" ;
  document.getElementById("pais").value = "" ;
  document.getElementById("eori_vat").value = "" ;
  document.getElementById("email_sifresh").value = "" ;
  document.getElementById("email_pagos").value = "" ;
  document.getElementById("banco_moneda").value = "" ;
  document.getElementById("banco_nombre").value = "" ;
  document.getElementById("banco_cuenta").value = "" ;
  document.getElementById("banco_swift").value = "" ;
  document.getElementById("banco_bic").value = "" ;

}

</script>