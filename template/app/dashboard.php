
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
  <h4 class="tx-gray-800 mg-b-5">DASHBOARD - Comercial de compra</h4>
  <p class="mg-b-0"></p>
</div>

<div class="br-pagebody">

     
     <div class="row row-sm mg-t-20">
          <div class="col-lg-6">
            <div class="card shadow-base card-body pd-25 bd-0">
              <div class="row">
                <div class="col-sm-12">
                  <h6 class="card-title tx-uppercase tx-12">Total de Kg comprados </h6>
                  <p class="display-4 tx-medium tx-inverse mg-b-5 tx-lato">2,000 kg</p>
                  <div class="progress mg-b-10">
                    <div class="progress-bar bg-primary progress-bar-xs wd-100p" role="progressbar" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"></div>
                  </div><!-- progress -->
                  
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
                  <h6 class="card-title tx-uppercase tx-12 tx-inverse">Total de Pallets</h6>
                  <p class="display-4 tx-medium tx-inverse mg-b-5 tx-lato">20</p>
                  <div class="progress mg-b-10">
                    <div class="progress-bar bg-info progress-bar-xs wd-100p" role="progressbar" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"></div>
                  </div><!-- progress -->
                  
                </div><!-- col-6 -->
                <!--div class="col-sm-6 mg-t-20 mg-sm-t-0 d-flex align-items-end justify-content-center">
                   <span class="peity-donut" data-peity='{ "fill": ["#0866C6", "#E9ECEF"],  "innerRadius": 60, "radius": 90 }'>80%</span>
                </div--><!-- col-6 -->
              </div><!-- row -->
            </div><!-- card -->
          </div><!-- col-6 -->
        </div><!-- row -->



        <div class="row row-sm mg-t-20">
          <div class="col-lg-12">
          <div class="br-section-wrapper">


            <div class="header">
          
                <legend>Listado de Proveedores Asignados ordenados por número de Kg
                <!--a href="" class="btn btn-info btn-with-icon pull-right" href="" data-toggle="modal" data-target="#modaldemo1" >
                  <div class="ht-40 justify-content-between">
                    <span class="pd-x-15">Nuevo</span>
                    <span class="icon wd-40"><i class="fa fa-plus-circle"></i></span>
                  </div>
                </a-->
                </legend>  
           
            </div>
            
           

            <div class="table-wrapper">
              <table id="datatableUbicaciones" class="table display responsive nowrap">
                <thead>
                  <tr>
                    <th class="wd-10p">Nombre</th>
                    <th class="wd-20p">KG Adquiridos</th>
                   
                  </tr>
                </thead>

                <tbody>
                    <tr>

                      <td>Dato 1</td>
                      <td>1,500 kg</td>
                      
                     
                    </tr>
                    <tr>

                      <td>Dato 1</td>
                      <td>500 kg</td>
                    </tr>
                </tbody>
                   
             
              </table>
            </div><!-- table-wrapper -->
          </div><!-- br-section-wrapper -->
        </div>
   
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