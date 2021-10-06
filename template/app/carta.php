
<?php


//include("backend/seguridad.php");
//require("backend/connection.php");


?>
<div class="br-pageheader pd-y-15 pd-l-20">
  <nav class="breadcrumb pd-0 mg-0 tx-12">
    <a class="breadcrumb-item" href="index.php">Inicio</a>
    <span class="breadcrumb-item active">Carta de relación laboral</span>
  </nav>
</div><!-- br-pageheader -->
<div class="pd-x-20 pd-sm-x-30 pd-t-20 pd-sm-t-30">
  <h4 class="tx-gray-800 mg-b-5">Carta de relación laboral</h4>
  <p class="mg-b-0"></p>
</div>

<div class="br-pagebody">
  <div class="br-section-wrapper">
    <p>Este es el texto del del contrato de la carta de relación la boral. Este es el texto del del contrato de la carta de relación la boral.Este es el texto del del contrato de la carta de relación la boral.Este es el texto del del contrato de la carta de relación la boral.Este es el texto del del contrato de la carta de relación la boral.Este es el texto del del contrato de la carta de relación la boral.Este es el texto del del contrato de la carta de relación la boral.Este es el texto del del contrato de la carta de relación la boral.Este es el texto del del contrato de la carta de relación la boral.Este es el texto del del contrato de la carta de relación la boral.Este es el texto del del contrato de la carta de relación la boral.Este es el texto del del contrato de la carta de relación la boral.Este es el texto del del contrato de la carta de relación la boral.Este es el texto del del contrato de la carta de relación la boral.Este es el texto del del contrato de la carta de relación la boral.Este es el texto del del contrato de la carta de relación la boral.Este es el texto del del contrato de la carta de relación la boral.Este es el texto del del contrato de la carta de relación la boral.Este es el texto del del contrato de la carta de relación la boral.Este es el texto del del contrato de la carta de relación la boral.Este es el texto del del contrato de la carta de relación la boral.Este es el texto del del contrato de la carta de relación la boral.Este es el texto del del contrato de la carta de relación la boral.Este es el texto del del contrato de la carta de relación la boral.Este es el texto del del contrato de la carta de relación la boral.Este es el texto del del contrato de la carta de relación la boral. 
  </div><!-- br-section-wrapper -->



   <br>


  
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