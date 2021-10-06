
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
  <h4 class="tx-gray-800 mg-b-5">Usuarios</h4>
  <p class="mg-b-0"></p>
</div>

<div class="br-pagebody">
  <div class="br-section-wrapper">

    <div class="header">
  
        <legend>
        <a href="" class="btn btn-info btn-with-icon pull-right" data-toggle="modal" data-target="#modalUbicaciones">
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




<div id="modaldemo1" class="modal fade">
  
  <div class="modal-dialog modal-dialog-vertical-center modal-lg" role="document">
    <div class="modal-content bd-0 tx-14">
      <form id="guardar_usuario" method="post" enctype="multipart/form-data"> 
      <div class="modal-header pd-y-20 pd-x-25">
        <h6 class="tx-14 mg-b-0 tx-uppercase tx-inverse tx-bold">Nuevo Usuario</h6>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body pd-25" id="div_modal_usuario">
       
        <div class="form-layout">

          <div class="content">    
      
            <h6 class="text-center"></h6>
            <div class="row">
                <div class="col-md-4">
                    <div class="form-group">
                        <label class="control-label">Nombre</label>
                        <input class="form-control valid" type="text" name="nombre" value="<?=$nombre?>" placeholder="">
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="form-group">
                        <label class="control-label">Apellido Paterno</label>
                        <input class="form-control valid" type="text"  name="apellido_paterno" required="true" placeholder="" aria-required="true"  value="<?=$apellido_paterno?>">
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="form-group">
                        <label class="control-label">Apellido Materno</label>
                        <input class="form-control valid" type="text" name="apellido_materno" required="true" placeholder="" aria-required="true"  value="<?=$apellido_materno?>">
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="form-group">
                        <label class="control-label">Puesto</label>
                        <input class="form-control valid" type="text" name="puesto" required="true" placeholder="" aria-required="true"  value="<?=$puesto?>">
                    </div>
                </div>

                 <div class="col-md-4">
                    <div class="form-group">
                        <label class="control-label">Fecha alta</label>
                        <input class="form-control valid" type="date" id="fecha_alta" name="fecha_alta" required="true" placeholder="" aria-required="true"  value="<?=$fecha_alta?>" >
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="form-group">
                        <label class="control-label">Fecha baja</label>
                        <input class="form-control valid" type="date" id="fecha_baja" name="fecha_baja" required="true" placeholder="" aria-required="true"  value="<?=$fecha_baja?>" >
                    </div>
                </div>
                
            </div>
            <div class="row">
              <div class="header col-md-12">
                    <legend>Domicilio</legend>
                </div><br>
                <div class="col-md-4">
                    <div class="form-group">
                        <label class="control-label">Calle</label>
                        <input class="form-control valid" type="text" name="calle" required="true" placeholder="" aria-required="true" value="<?=$calle?>">
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="form-group">
                        <label class="control-label">Número</label>
                        <input class="form-control valid" type="text" name="numero" required="true" placeholder="" aria-required="true" value="<?=$numero?>">
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="form-group">
                        <label class="control-label">Municipio</label>
                        <input class="form-control valid" type="text" name="municipio" required="true" placeholder="" aria-required="true" value="<?=$municipio?>">
                    </div>
                </div>
            </div>
            <div class="row">
              <div class="col-md-4">
                    <div class="form-group">
                        <label class="control-label">Código postal</label>
                        <input class="form-control valid" type="text" name="cp" required="true" placeholder="" aria-required="true" value="<?=$cp?>">
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="form-group">
                        <label class="control-label">Estado</label>
                        <input class="form-control valid" type="text" name="estado" required="true" placeholder="" aria-required="true" value="<?=$estado?>">
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="form-group">
                        <label class="control-label">País</label>
                        <input class="form-control valid" type="text" name="pais" required="true" placeholder="" aria-required="true" value="<?=$pais?>">
                    </div>
                </div>
            </div>
            <div class="row">
              <div class="header col-md-12">
                    <legend>Contacto</legend>
                </div><br>
                <div class="col-md-4">
                    <div class="form-group">
                        <label class="control-label">Telefono</label>
                        <input class="form-control valid" type="text" name="telefono" required="true" placeholder="" aria-required="true" value="<?=$telefono?>">
                    </div>
                </div>
              <div class="col-md-4">
                    <div class="form-group">
                        <label class="control-label">Extención</label>
                        <input class="form-control valid" type="text" name="telefono_extencion" required="true" placeholder="" aria-required="true" value="<?=$telefono_extencion?>">
                    </div>
                </div>
                
                <div class="col-md-4">
                    <div class="form-group">
                        <label class="control-label">Correo</label>
                        <input class="form-control valid" type="text" name="correo" required="true" placeholder="" aria-required="true" value="<?=$correo?>">
                    </div>
                </div>
            </div>

            <div class="row">
             
                <div class="col-md-4">
                    <div class="form-group">
                        <label class="control-label">¿Es un usuario?</label>
                        <select data-title="SELECCIONA" name="es_usuario" id="es_usuario" data-live-search="true"  class="selectpicker form-control" value="<?=$tipo_marca?>" onchange="select_es_usuario();">
                            <option value="NO">NO</option> 
                            <option value="SI">SI</option>
                            
                        </select>  
                    </div>
                </div>
              
            </div>


            <div  id='div_usuario'>
            <div class="row" >
              <div class="header col-md-12">
                    <legend>Usuario</legend>
                </div>
              
                <div class="col-md-4" >
                    <div class="form-group">
                        <label class="control-label">Nivel</label>
                        <select data-title="SELECCIONA" name="nivel" id="nivel" data-live-search="true"  class="selectpicker form-control" value="<?=$nivel?>" onchange="select_permisos();">
                            <option value="1">SUPER ADMINISTRADOR</option> 
                            <option value="2">ADMINISTRADOR</option>
                            <option value="3">USUARIO</option>
                            
                        </select>  
                    </div>
                </div>

              <div class="col-md-4" id='div_permisos'>
                    <div class="form-group">
                        <label class="control-label">Permisos</label>
                        <select data-title="SELECCIONA" name="permisos[]" id="permisos" data-live-search="true"  class="selectpicker form-control" multiple="" data-actions-box="true">

                        
                            
                            <optgroup label="VALOR CATASTRAL">
                  <option value="1.1">GENERACION DE CITA</option>
                  <option value="2.2">VISITA AL INMUEBLE</option>
              </optgroup> 

              <optgroup label="AVALUO">
                  <option value="2.1">GENERACION DE CITA</option>
                  <option value="2.2">VISITA AL INMUEBLE</option>
                  <option value="2.3">ELABORACION</option>
                  <option value="2.3">CATASTRO</option>
                  <option value="2.3">ENTREGA</option>
                  <option value="2.3">PAGOS</option>
                  
              </optgroup> 

              <optgroup label="ADMINISTRATIVO">
                  <option value="4.1">USUARIOS</option>
                  <option value="4.1">CATALOGO</option>
              </optgroup> 

                            
                            
                        </select>  
                    </div>
                </div>
                
            </div>

            <div class="row">
              <div class="col-md-4">
                    <div class="form-group">
                        <label class="control-label">Usuario</label>
                        <input class="form-control valid" type="text" name="usuario" required="true" placeholder="" aria-required="true"  value="<?=$usuario?>">
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="form-group">
                        <label class="control-label">Contraseña</label>
                        <input class="form-control valid" type="password" id="contrasenia" name="contrasenia" required="true" placeholder="" aria-required="true"  value="<?=$password?>" onChange="validarContrasenia();">
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="form-group">
                        <label class="control-label">Confirma Contraseña</label>
                        <input class="form-control valid" type="password" id="contrasenia2" name="contrasenia2" required="true" placeholder="" aria-required="true"  value="<?=$password?>" onChange="verificarContrasenia();">
                    </div>
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


<script type="text/javascript">

  $(document).ready(function() {

    
        $('#tipo').selectpicker('val', '<?=$tipo?>');
        $('#es_usuario').selectpicker('val', '<?=$es_usuario?>');
        $('#nivel').selectpicker('val', '<?=$nivel?>');
        $('#permisos').selectpicker('val', [<?=$permisos?>]);

        if ('<?=$es_usuario?>' == '' || '<?=$es_usuario?>' == 'NO') {

          $("#div_usuario").css("display", "none");

        }else{
          $("#div_usuario").css("display", "block");
        }


        if ('<?=$nivel?>' == '3') {

          $("#div_permisos").css("display", "block");
        }else{
          $("#div_permisos").css("display", "none");
        }


        
  });
  
</script>

<script type="text/javascript">
  $('#guardar_abogado').submit(function () {

        $.post('../assets/includes/guardar_abogado.php', $('#guardar_abogado').serialize(), function (data, textStatus) {
            $('#procesa').append(data);
        });
        
       
        return false;
    });


    function verificarContrasenia(){
    var p1 = document.getElementById("contrasenia").value;
    var p2 = document.getElementById("contrasenia2").value;
    

    if (p1 != p2) {
      document.getElementById("contrasenia2").setAttribute("class", "form-control error");
        alert("Las contraseñas deben de coincidir");
      
        return false;
    } else {

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
      document.getElementById("contrasenia").setAttribute("class", "form-control error");
        alert ("La contraseña no puede contener espacios en blanco");
        return false;
    }else{
      document.getElementById("contrasenia").setAttribute("class", "form-control valid");

    }
    

  }

  function select_es_usuario() {
      var x = document.getElementById("es_usuario").value;

     switch (x) {
        case "NO": 
            $("#div_usuario").css("display", "none");
            
            break;
        case "SI": //etapa_patentes
             $("#div_usuario").css("display", "block");
            break;
        
        }
    }

    function select_permisos() {
     var x = document.getElementById("nivel").value;

     switch (x) {
        case "3": 
            $("#div_permisos").css("display", "block");
            
            break;
        default: 
             $("#div_permisos").css("display", "none");
            break;
        
        }
    }

</script>
