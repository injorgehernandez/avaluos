
<?php


//include("backend/seguridad.php");
//require("backend/connection.php");


?>
<div class="br-pageheader pd-y-15 pd-l-20">
  <nav class="breadcrumb pd-0 mg-0 tx-12">
    <a class="breadcrumb-item" href="index.php">Inicio</a>
    <span class="breadcrumb-item active">Usuarios</span>
  </nav>
</div><!-- br-pageheader -->
<div class="pd-x-20 pd-sm-x-30 pd-t-20 pd-sm-t-30">
  <h4 class="tx-gray-800 mg-b-5">Uusuarios</h4>
  <p class="mg-b-0"></p>
</div>

<div class="br-pagebody">
  <div class="br-section-wrapper">


    <div class="header">
  
        <legend>Listado de Usuario
        <a href="" class="btn btn-info btn-with-icon pull-right" href="" data-toggle="modal" data-target="#modal_usuario" onclick="limpiar();">
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



<div id="modal_usuario" class="modal fade">
  
  <div class="modal-dialog modal-dialog-vertical-center modal-lg" role="document">
    <div class="modal-content bd-0 tx-14">
      <form id="guardar_usuario" method="post" enctype="multipart/form-data"> 
      <div class="modal-header pd-y-20 pd-x-25">
        <h6 class="tx-14 mg-b-0 tx-uppercase tx-inverse tx-bold">Usuario</h6>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body pd-25" id="div_modal_usuario">
       
        <div class="form-layout">

          <div class="content">    
      
            <h6 class="text-center"></h6>
            <div class="row">
               <div class="header col-md-12">
                    <legend>Datos Generales</legend>
                </div>
                <div class="col-md-4">
                    <div class="form-group">
                        <label class="control-label">Nombre</label>
                        <input class="form-control valid" type="text" name="nombre" id="nombre" value="" placeholder="" required="">
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="form-group">
                        <label class="control-label">Apellidos</label>
                        <input class="form-control valid" type="text" name="apellidos" id="apellidos" value="" placeholder="" required="">
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="form-group">
                        <label class="control-label">Nombre corto</label>
                        <input class="form-control valid" type="text" name="nombre_corto" id="nombre_corto" value="" placeholder="" required="">
                    </div>
                </div>
            </div>
            <div class="row">

                 <div class="col-md-4">
                    <div class="form-group">
                        <label class="control-label">Direccion residencia</label>
                        <input class="form-control valid" type="text" name="direccion_residencia" id="direccion_residencia"  value="" placeholder="" required="">
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="form-group">
                        <label class="control-label">C??digo postal</label>
                        <input class="form-control valid" type="text" name="cp" id="cp" placeholder="" required="">
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="form-group">
                        <label class="control-label">Municipio</label>
                        <input class="form-control valid" type="text" name="municipio" id="municipio"  placeholder="" required="">
                    </div>
                </div>

                 <div class="col-md-4">
                    <div class="form-group">
                        <label class="control-label">Pa??s</label>
                       <input class="form-control valid" type="text" name="pais" id="pais"  placeholder="" required="">
                    </div>
                </div>
            </div>
            
            <div class="row">

                 <div class="col-md-4">
                    <div class="form-group">
                        <label class="control-label">EORI/VAT</label>
                        <input class="form-control valid" type="text" name="eori_vat" id="eori_vat" placeholder="" required="">
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="form-group">
                        <label class="control-label">Email Sifresh</label>
                       <input class="form-control valid" type="email" name="email_sifresh"  id="email_sifresh" value="" placeholder="" required="">
                    </div>
                </div>

                 <div class="col-md-4">
                    <div class="form-group">
                        <label class="control-label">Email Pagos</label>
                       <input class="form-control valid" type="email" name="email_pagos"  id="email_pagos" value="" placeholder="" required="">
                    </div>
                </div>
            </div>
            
            <div class="row">
                <div class="header col-md-12">
                    <legend>Informaci??n bancaria</legend>
                </div>

                <div class="col-md-4">
                    <div class="form-group">
                        <label class="control-label">Banco moneda</label>
                       <input class="form-control valid" type="text" name="banco_moneda"  id="banco_moneda" value="" placeholder="" required="">
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="form-group">
                        <label class="control-label">Banco nombre</label>
                       <input class="form-control valid" type="text" name="banco_nombre" id="banco_nombre" value="" placeholder="" required="">
                    </div>
                </div>
                 <div class="col-md-4">
                    <div class="form-group">
                        <label class="control-label">Banco cuenta</label>
                       <input class="form-control valid" type="text" name="banco_cuenta" id="banco_cuenta" value="" placeholder="" required="">
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="form-group">
                        <label class="control-label">Banco SWIFT</label>
                       <input class="form-control valid" type="text" name="banco_swift" id="banco_swift" value="" placeholder="" required="">
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="form-group">
                        <label class="control-label">Banco BIC</label>
                       <input class="form-control valid" type="text" name="banco_bic" id="banco_bic" value="" placeholder="" required="">
                    </div>
                </div>
            </div>
            <div class="row" >
                <div class="header col-md-12">
                    <legend>Usuario</legend>
                </div>
              
                <div class="col-md-4" >
                    <div class="form-group">
                        <label class="control-label">Tipo de Usuario</label>
                        <select data-title="SELECCIONA" name="tipo_usuario" id="tipo_usuario" data-live-search="true"  class="selectpicker form-control" value="<?=$tipo_usuario?>" required="">
                            <option disabled="" selected="">SELECCIONA</option> 
                            <option value="1">DIRECCI??N</option> 
                            <option value="2">ADMINISTRACI??N</option>
                            <option value="3">LOG??STICA</option>
                            <option value="4">COMERCIAL COMPRA</option>
                            <option value="5">COMERCIAL VENTA</option>
                            
                        </select>  
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="form-group">
                        <label class="control-label">Contrase??a</label>
                        <input class="form-control valid" type="password" id="contrasenia" name="contrasenia" required="true" placeholder="" aria-required="true"   onChange="validarContrasenia();">
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="form-group">
                        <label class="control-label">Confirma Contrase??a</label>
                        <input class="form-control valid" type="password" id="contrasenia2" name="contrasenia2" required="true" placeholder="" aria-required="true"   onChange="verificarContrasenia();">
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






<div id="procesa_usuario"></div>


<script>

$(document).ready (function() {
  $.ajax({
      url: "../backend/get_usuario.php",
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
                  "last":       "??ltima",
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
            var confirma = confirm('??Esta seguro de borrar el registro?');
            if (confirma == true){
                $tr = $(this).closest('tr');
                var data = table.row($tr).data();
                var closestRow = $(this).closest('tr');
                var data = table.row( $(this).parents(closestRow)).data();
                var list_id = data[0];
                
                 $('#procesa_usuario').load('../backend/guardar_usuario.php?id_borrar='+list_id);
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


              document.getElementById("div_modal_usuario").innerHTML = "";
              
              $('#div_modal_usuario').load('edita_usuario.php?id='+list_id);
              $('#modal_usuario').modal('show');
              e.preventDefault();
          });
      }       
  });

});


$('#guardar_usuario').submit(function () {

    $('#modal_usuario').modal('hide');

        $('#procesa_usuario').delay(800).queue(function(nxt){

            $.post('../backend/guardar_usuario.php', $('#guardar_usuario').serialize(), function (data, textStatus) {
        
                $('#procesa_usuario').append(data);
            });
            
        });   
   
    return false;
});



function limpiar(){

  
  document.getElementById("nombre").value = "" ;
  document.getElementById("apellidos").value = "" ;
  document.getElementById("nombre_corto").value = "" ;
  document.getElementById("direccion_residencia").value = "" ;
  document.getElementById("cp").value = "" ;
  document.getElementById("pais").value = "" ;
  document.getElementById("municipio").value = "" ;
  document.getElementById("eori_vat").value = "" ;
  document.getElementById("email_sifresh").value = "" ;
  document.getElementById("email_pagos").value = "" ;
  document.getElementById("banco_moneda").value = "" ;
  document.getElementById("banco_nombre").value = "" ;
  document.getElementById("banco_cuenta").value = "" ;
  document.getElementById("banco_swift").value = "" ;
  document.getElementById("banco_bic").value = "" ;
  document.getElementById("contrasenia").value = "" ;
  document.getElementById("contrasenia2").value = "" ;

  $("#tipo_usuario").val(""); 

  //document.getElementById("id").value = "" ;

}




function verificarContrasenia(){
  var p1 = document.getElementById("contrasenia").value;
  var p2 = document.getElementById("contrasenia2").value;
  

  if (p1 != p2) {
      document.getElementById("contrasenia2").setAttribute("class", "form-control error");
      $('#guardar').hide();
      alert("Las contrase??as deben de coincidir");
    
      return false;
  } else {

    $('#guardar').show();

      document.getElementById("contrasenia2").setAttribute("class", "form-control valid");
      return true; 
  }

}

function validarContrasenia(){
   var p1 = document.getElementById("contrasenia").value;
  var p2 = document.getElementById("contrasenia2").value;
  var espacios = false;
  var cont = 0;
  
   
  while (!espacios && (cont < p1.length)) {
    if (p1.charAt(cont) == " ")
      espacios = true;
    cont++;
  }
   
  if (espacios) {
    $('#guardar').hide();
      document.getElementById("contrasenia").setAttribute("class", "form-control error");
      alert ("La contrase??a no puede contener espacios en blanco");
      return false;
  }else{
    $('#guardar').show();
      document.getElementById("contrasenia").setAttribute("class", "form-control valid");

  }
  

}


 








</script>