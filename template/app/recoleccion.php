
<?php


//include("backend/seguridad.php");
//require("backend/connection.php");


?>
<div class="br-pageheader pd-y-15 pd-l-20">
  <nav class="breadcrumb pd-0 mg-0 tx-12">
    <a class="breadcrumb-item" href="index.php">Inicio</a>
    <span class="breadcrumb-item active">Avisos de recoleccion</span>
  </nav>
</div><!-- br-pageheader -->
<div class="pd-x-20 pd-sm-x-30 pd-t-20 pd-sm-t-30">
  <h4 class="tx-gray-800 mg-b-5">Avisos de recolección</h4>
  <p class="mg-b-0"></p>
</div>

<div class="br-pagebody">
  <div class="br-section-wrapper">

    
    <div class="header">
  
        <legend>Recolección
        <!--a href="" class="btn btn-info btn-with-icon pull-right" data-toggle="modal" data-target="#modalUbicaciones" onclick="cargaContenido('nuevo_valor.php')">
          <div class="ht-40 justify-content-between">
            <span class="pd-x-15">Agregar</span>
            <span class="icon wd-40"><i class="fa fa-plus-circle"></i></span>
          </div>
        </a-->
        </legend>  
   
    </div>
    
   

    <div class="table-wrapper">
      <table id="datatableUbicaciones" class="table display responsive nowrap">
        <thead>
          <tr>
            <th class="wd-10p">Día</th>
            <th class="wd-30p">Hora</th>
           
          </tr>
        </thead>

        <tbody>
            <tr>

              <td>Lunes</td>
              
              <td>9:30 AM</td>
            </tr>
            <tr>

              <td>Miercoles</td>
              
              <td>10:30 AM</td>
            </tr>
            <tr>

              <td>Viernes</td>
              
              <td>9:00 AM</td>
            </tr>
        </tbody>
           
     
      </table>
    </div><!-- table-wrapper -->

    <div>
      <div class="fc-datepicker"></div>
    </div>
  </div><!-- br-section-wrapper -->
</div><!-- br-pagebody -->






<div id="procesa_ubicacion"></div>


<script>

  $(document).ready (function() {


    $('#datatableUbicaciones').DataTable({
          responsive: true,
          language: {
            searchPlaceholder: 'Buscar...',
            sSearch: '',
            lengthMenu: '_MENU_ items/page',
          },
          "bInfo" : false
          ,"bPaginate": false,"searching": false
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