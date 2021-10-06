
<?php


//include("backend/seguridad.php");
//require("backend/connection.php");


?>
<div class="br-pageheader pd-y-15 pd-l-20">
  <nav class="breadcrumb pd-0 mg-0 tx-12">
    <a class="breadcrumb-item" href="index.php">Inicio</a>
  </nav>
</div><!-- br-pageheader -->
<div class="pd-x-20 pd-sm-x-30 pd-t-20 pd-sm-t-30">
  <h4 class="tx-gray-800 mg-b-5">DASHBOARD</h4>
  <p class="mg-b-0"></p>
</div>

<div class="br-pagebody">

     
     <div class="row row-sm mg-t-20">
          <div class="col-lg-6">
            <div class="card shadow-base card-body pd-25 bd-0">
              <div class="row">
                <div class="col-sm-12">
                  <h6 class="card-title tx-uppercase tx-12">AVALUO FOLIO 1</h6>
                  <p class="display-4 tx-medium tx-inverse mg-b-5 tx-lato">25%</p>
                  <div class="progress mg-b-10">
                    <div class="progress-bar bg-primary progress-bar-xs wd-30p" role="progressbar" aria-valuenow="30" aria-valuemin="0" aria-valuemax="100"></div>
                  </div><!-- progress -->
                  <p class="tx-12">Visita al inmueble</p>
                  <p class="tx-11 lh-3 mg-b-0">Para seguir con el proceso <a href="progress.html" target="blank">presiona aquí</a>.</p>
                </div><!-- col-6 -->
                <!--div class="col-sm-6 mg-t-20 mg-sm-t-0 d-flex align-items-center justify-content-center">
                  <span class="peity-donut" data-peity='{ "fill": ["#0866C6", "#E9ECEF"],  "innerRadius": 60, "radius": 90 }'>25%</span>
                </div--><!-- col-6 -->
              </div><!-- row -->
            </div><!-- card -->
          </div><!-- col-6 -->
          <div class="col-lg-6 mg-t-30 mg-lg-t-0">
            <div class="card shadow-base card-body pd-25 bd-0">
              <div class="row">
                <div class="col-sm-12">
                  <h6 class="card-title tx-uppercase tx-12 tx-inverse">AVALUO FOLIO 2</h6>
                  <p class="display-4 tx-medium tx-inverse mg-b-5 tx-lato">80%</p>
                  <div class="progress mg-b-10">
                    <div class="progress-bar bg-info progress-bar-xs wd-45p" role="progressbar" aria-valuenow="45" aria-valuemin="0" aria-valuemax="100"></div>
                  </div><!-- progress -->
                  <p class="tx-12">Catastro</p>
                 <p class="tx-11 lh-3 mg-b-0">Para seguir con el proceso <a href="progress.html" target="blank">presiona aquí</a>.</p>
                </div><!-- col-6 -->
                <!--div class="col-sm-6 mg-t-20 mg-sm-t-0 d-flex align-items-end justify-content-center">
                   <span class="peity-donut" data-peity='{ "fill": ["#0866C6", "#E9ECEF"],  "innerRadius": 60, "radius": 90 }'>80%</span>
                </div--><!-- col-6 -->
              </div><!-- row -->
            </div><!-- card -->
          </div><!-- col-6 -->
        </div><!-- row -->



        <div class="row row-sm mg-t-20">
          <div class="col-lg-6">
            <div class="card shadow-base card-body pd-25 bd-0">
              <div class="row">
                <div class="col-sm-12">
                  <h6 class="card-title tx-uppercase tx-12">AVALUO FOLIO 3</h6>
                  <p class="display-4 tx-medium tx-inverse mg-b-5 tx-lato">90%</p>
                  <div class="progress mg-b-10">
                    <div class="progress-bar bg-primary progress-bar-xs wd-30p" role="progressbar" aria-valuenow="30" aria-valuemin="0" aria-valuemax="100"></div>
                  </div><!-- progress -->
                  <p class="tx-12">Entrega</p>
                  <p class="tx-11 lh-3 mg-b-0">Para seguir con el proceso <a href="progress.html" target="blank">presiona aquí</a>.</p>
                </div><!-- col-6 -->
                <!--div class="col-sm-6 mg-t-20 mg-sm-t-0 d-flex align-items-center justify-content-center">
                  <span class="peity-donut" data-peity='{ "fill": ["#0866C6", "#E9ECEF"],  "innerRadius": 60, "radius": 90 }'>90%</span>
                </div--><!-- col-6 -->
              </div><!-- row -->
            </div><!-- card -->
          </div><!-- col-6 -->
          <div class="col-lg-6 mg-t-30 mg-lg-t-0">
            <div class="card shadow-base card-body pd-25 bd-0">
              <div class="row">
                <div class="col-sm-12">
                  <h6 class="card-title tx-uppercase tx-12 tx-inverse">AVALUO FOLIO 4</h6>
                  <p class="display-4 tx-medium tx-inverse mg-b-5 tx-lato">60%</p>
                  <div class="progress mg-b-10">
                    <div class="progress-bar bg-info progress-bar-xs wd-45p" role="progressbar" aria-valuenow="45" aria-valuemin="0" aria-valuemax="100"></div>
                  </div><!-- progress -->
                  <p class="tx-12">Elaboracion</p>
                 <p class="tx-11 lh-3 mg-b-0">Para seguir con el proceso <a href="progress.html" target="blank">presiona aquí</a>.</p>
                </div><!-- col-6 -->
                <!--div class="col-sm-6 mg-t-20 mg-sm-t-0 d-flex align-items-end justify-content-center">
                   <span class="peity-donut" data-peity='{ "fill": ["#0866C6", "#E9ECEF"],  "innerRadius": 60, "radius": 90 }'>60%</span>
                </div--><!-- col-6 -->
              </div><!-- row -->
            </div><!-- card -->
          </div><!-- col-6 -->
        </div><!-- row -->




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