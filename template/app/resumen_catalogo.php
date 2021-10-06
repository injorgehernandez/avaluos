
<?php


//include("backend/seguridad.php");
//require("backend/connection.php");


?>
<div class="br-pageheader pd-y-15 pd-l-20">
  <nav class="breadcrumb pd-0 mg-0 tx-12">
    <a class="breadcrumb-item" href="index.php">Inicio</a>
    <span class="breadcrumb-item active">Catalogo</span>
  </nav>
</div><!-- br-pageheader -->
<div class="pd-x-20 pd-sm-x-30 pd-t-20 pd-sm-t-30">
  <h4 class="tx-gray-800 mg-b-5">Catalogo X</h4>
  <p class="mg-b-0"></p>
</div>

<div class="br-pagebody">
  <div class="br-section-wrapper">

    <div class="header">
  
        <legend>LISTADO CATALOGO X
        <a href="" class="btn btn-info btn-with-icon pull-right" data-toggle="modal" data-target="#modalUbicaciones" onclick="limpiar_ubicacion()">
          <div class="ht-40 justify-content-between">
            <span class="pd-x-15">Agregar</span>
            <span class="icon wd-40"><i class="fa fa-plus-circle"></i></span>
          </div>
        </a>
        </legend>  
   
    </div>
    
   

    <div class="table-wrapper">
      <table id="datatableUbicaciones" class="table display responsive nowrap">
        <thead>
          <tr>
            <th class="wd-10p">Dato1</th>
            <th class="wd-20p">Dato2</th>
            <th class="wd-30p">Dato3</th>
            <th class="wd-20p">Dato4</th>
            <th class="wd-10p">Dato5</th>
            <th class="wd-10p">Dato6</th>
            <th class="wd-30p">Acciones</th>
           
          </tr>
        </thead>

        <tbody>
            <tr>

              <td>Dato 1</td>
              <td>Dato 2</td>
              <td>Dato 3</td>
              <td>Dato 4</td>
              <td>Dato 5</td>
              <td>Dato 6</td>
              
             <td>
                  <a href="" data-toggle="modal" data-target="#modaldemo1" class="btn btn-simple btn-icon" onclick="editar_lista('<?=$id?>')"><i class="fa fa-eye"></i></a>
                  
              </td>
            </tr>
            <tr>

              <td>Dato 1</td>
              <td>Dato 2</td>
              <td>Dato 3</td>
              <td>Dato 4</td>
              <td>Dato 5</td>
              <td>Dato 6</td>
              
             <td>
                  <a href="" data-toggle="modal" data-target="#modaldemo1" class="btn btn-simple btn-icon" onclick="editar_lista('<?=$id?>')"><i class="fa fa-eye"></i></a>
                  
              </td>
            </tr>
        </tbody>
           
     
      </table>
    </div><!-- table-wrapper -->
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