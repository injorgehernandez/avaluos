
<?php


//include("backend/seguridad.php");
//require("backend/connection.php");


?>
<div class="br-pageheader pd-y-15 pd-l-20">
  <nav class="breadcrumb pd-0 mg-0 tx-12">
    <a class="breadcrumb-item" href="index.php">Inicio</a>
    <span class="breadcrumb-item active">Manifiestos</span>
  </nav>
</div><!-- br-pageheader -->
<div class="pd-x-20 pd-sm-x-30 pd-t-20 pd-sm-t-30">
  <h4 class="tx-gray-800 mg-b-5">Manifiestos</h4>
  <p class="mg-b-0"></p>
</div>

<div class="br-pagebody">
  <div class="br-section-wrapper">

    
    <div class="header">
  
    <img src="https://tulumcircula.com/assets/img/Logo_TulumCircula.jpg" class="logo-main" style="width: 70%">
   
    </div>
    
   

    <div class="row">
    <div class="header col-md-12">
          <legend>Realiza tu cotización</legend>
      </div><br>

      <div class="col-md-12">
          <div class="form-group">
              <label class="control-label">Tipo del generador / usuario</label>
              <select name="cars" id="cars" class="form-control">
                <optgroup label="Hotel">
                  <option value="volvo">a. 1-9 habitaciones</option>
                  <option value="volvo">b. 9-50 habitaciones</option>
                  <option value="volvo">c. 50 habitaciones o mas</option>
                </optgroup>
                <optgroup label="Hostal">
                </optgroup>
                <optgroup label="Restaurante / Bar / Fonda">
                  <option value="volvo">a. 1-5 mesas</option>
                  <option value="volvo">b. 5-15 mesas</option>
                  <option value="volvo">c. 15-30 mesas</option>
                  <option value="volvo">d. 30 mesas o más</option>
                </optgroup>
                <optgroup label="Minisuper">
                </optgroup>
                <optgroup label="Plaza comercial">
                  <option value="volvo">a. 1-5 locales</option>
                  <option value="volvo">b. 5-15 locales</option>
                  <option value="volvo">c. 15 locales o más</option>
                </optgroup>
                <optgroup label="Otro">
                </optgroup>
              </select>
          </div>
      </div>

      <div class="col-md-12">
          <div class="form-group">
              <label class="control-label">Categoría del generador</label>
              <select name="cars" id="cars" class="form-control">
                <optgroup label="Ya separa">
                  <option value="volvo">a. Requiere capacitacion</option>
                  <option value="volvo">b. No Requiere capacitacion</option>
                  <option value="volvo">c. Requiere certificacion</option>
                </optgroup>
                <optgroup label="No separa">
                  <option value="volvo">a. Requiere capacitacion</option>
                  <option value="volvo">b. No Requiere capacitacion</option>
                  <option value="volvo">c. Requiere certificacion</option>
                </optgroup>
                <optgroup label="Cuenta con centro de acopio/almacenamiento">
                  <option value="volvo">a. Sí</option>
                  <option value="volvo">b. No </option>
                </optgroup>
               
              </select>
          </div>
      </div>

      <div class="col-md-12">
          <div class="form-group">
              <label class="control-label">Ubicación del generador</label>
              <select name="cars" id="cars" class="form-control">
                <optgroup label="Zona hotelera">
                  <option value="volvo">a. Parque nacional</option>
                  <option value="volvo">b. Zona costera</option>
                  <option value="volvo">c. Avenidad principales</option>
                </optgroup>
                <optgroup label="Pueblo">
                  <option value="volvo">a. Zona 1</option>
                  <option value="volvo">b. Zona 2</option>
                  <option value="volvo">c. Zona 3</option>
                  <option value="volvo">d. Zona 4</option>
                  <option value="volvo">e. Zona 5</option>
                </optgroup>
               
              </select>
          </div>
      </div>

      <div class="col-md-12">

      <input type="submit" name="" class="btn btn-info">
    </div>
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