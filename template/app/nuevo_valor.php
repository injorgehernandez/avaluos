
<?php


//include("backend/seguridad.php");
//require("backend/connection.php");


?>
<div class="br-pageheader pd-y-15 pd-l-20">
  <nav class="breadcrumb pd-0 mg-0 tx-12">
    <a class="breadcrumb-item" href="index.php">Inicio</a>
    <span class="breadcrumb-item active">Valor Catasral</span>
  </nav>
</div><!-- br-pageheader -->
<div class="pd-x-20 pd-sm-x-30 pd-t-20 pd-sm-t-30">
  <h4 class="tx-gray-800 mg-b-5">Valor Catastral</h4>
  <p class="mg-b-0"></p>
</div>

<div class="br-pagebody">
  <div class="br-section-wrapper">

    


    <div class="content">    
      
            <h6 class="text-center"></h6>
            <div class="row">
              <div class="header col-md-12">
                    <legend>Datos generales</legend>
                </div><br>
                <div class="col-md-4">
                    <div class="form-group">
                        <label class="control-label">Ubicación </label>
                        <input class="form-control valid" type="text" name="nombre" value="<?=$nombre?>" placeholder="">
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="form-group">
                        <label class="control-label">Municipio</label>
                         <select data-title="SELECCIONA" name="es_usuario" id="es_usuario" data-live-search="true"  class="selectpicker form-control" value="<?=$tipo_marca?>" onchange="select_es_usuario();">
                        </select>  
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="form-group">
                        <label class="control-label">Solicitante</label>
                       <select data-title="SELECCIONA" name="es_usuario" id="es_usuario" data-live-search="true"  class="selectpicker form-control" value="<?=$tipo_marca?>" onchange="select_es_usuario();">
                        </select>  
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="form-group">
                        <label class="control-label">No. Expediente</label>
                        <input class="form-control valid" type="text" name="puesto" required="true" placeholder="" aria-required="true"  value="<?=$puesto?>">
                    </div>
                </div>

                 <div class="col-md-4">
                    <div class="form-group">
                        <label class="control-label">Notaria</label>
                        <select data-title="SELECCIONA" name="es_usuario" id="es_usuario" data-live-search="true"  class="selectpicker form-control" value="<?=$tipo_marca?>" onchange="select_es_usuario();">
                        </select>  
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="form-group">
                        <label class="control-label">Cuenta predial</label>
                        <input class="form-control valid" type="text" id="fecha_baja" name="fecha_baja" required="true" placeholder="" aria-required="true"  value="<?=$fecha_baja?>" >
                    </div>
                </div>

                 <div class="col-md-4">
                    <div class="form-group">
                        <label class="control-label">Recaudadora</label>
                        <input class="form-control valid" type="text" id="fecha_baja" name="fecha_baja" required="true" placeholder="" aria-required="true"  value="<?=$fecha_baja?>" >
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="form-group">
                        <label class="control-label">Fecha</label>
                        <input class="form-control valid" type="date" id="fecha_baja" name="fecha_baja" required="true" placeholder="" aria-required="true"  value="<?=$fecha_baja?>" >
                    </div>
                </div>
                
            </div>
          
          


           
              
          </div>



          <div class="row">
              <div class="header col-md-12">
                    <legend>Datos del terreno </legend>
                </div><br>
                <div class="col-md-12">
                   <div class="header">
                    
                      <legend>
                      <a href="" class="btn btn-info btn-with-icon pull-right" data-toggle="modal" data-target="#modaldemo1">
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
                            <th class="wd-10p">Fracción</th>
                            <th class="wd-20p">Superficie</th>
                            <th class="wd-30p">Valor X M2 *</th>
                            <th class="wd-20p">Factor * </th>
                            <th class="wd-10p">Valor unitario </th>
                            <th class="wd-10p">Valor del terreno </th>
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
                                  <a href="" data-toggle="modal" data-target="#modaldemo1" class="btn btn-simple btn-icon" onclick="editar_lista('<?=$id?>')"><i class="fa fa-trash"></i></a>
                                  
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
                                  <a href="" data-toggle="modal" data-target="#modaldemo1" class="btn btn-simple btn-icon" onclick="editar_lista('<?=$id?>')"><i class="fa fa-trash"></i></a>
                                  
                              </td>
                            </tr>
                        </tbody>
                           
                     
                      </table>
                    </div><!-- table-wrapper -->

                </div>

                <div class="col-md-4">
                    <div class="form-group">
                        <label class="control-label">Indiviso: $</label><br>
                        <label class="control-label">Total: $</label>
                        
                    </div>
                </div><br>
          </div><br>


           <div class="row">
              <div class="header col-md-12">
                    <legend>Datos de la construcción </legend>
                </div><br>
                <div class="col-md-4">
                    <div class="form-group">
                        <label class="control-label">La construcción es de uso:</label>
                         <select data-title="SELECCIONA" name="es_usuario" id="es_usuario" data-live-search="true"  class="selectpicker form-control" value="<?=$tipo_marca?>" onchange="select_es_usuario();">
                        </select>  
                    </div>
                </div>

                <div class="col-md-8">
                  <legend>
                      <a href="" class="btn btn-info btn-with-icon pull-right" data-toggle="modal" data-target="#modaldemo2">
                        <div class="ht-40 justify-content-between">
                          <span class="pd-x-15">Agregar</span>
                          <span class="icon wd-40"><i class="fa fa-plus-circle"></i></span>
                        </div>
                      </a>
                       <a href="" class="btn btn-info btn-with-icon pull-right" data-toggle="modal" data-target="#modaldemo3">
                        <div class="ht-40 justify-content-between">
                          <span class="pd-x-15">Edad de remodelación</span>
                          <span class="icon wd-40"><i class="fa fa-plus-circle"></i></span>
                        </div>
                      </a>
                      </legend>  
                </div>
                <div class="col-md-12">
                   
                   <div class="table-wrapper">
                      <table id="datatableUbicaciones2" class="table display responsive nowrap">
                        <thead>
                          <tr>
                            <th class="wd-10p">Tipo </th>
                            <th class="wd-20p">Superficie</th>
                            <th class="wd-30p">Valor X M2 *</th>
                            <th class="wd-20p">Demérito ** </th>
                            <th class="wd-10p">Valor unitario </th>
                            <th class="wd-10p">Valor del terreno </th>
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
                                  <a href="" data-toggle="modal" data-target="#modaldemo1" class="btn btn-simple btn-icon" onclick="editar_lista('<?=$id?>')"><i class="fa fa-trash"></i></a>
                                  
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
                                  <a href="" data-toggle="modal" data-target="#modaldemo1" class="btn btn-simple btn-icon" onclick="editar_lista('<?=$id?>')"><i class="fa fa-trash"></i></a>
                                  
                              </td>
                            </tr>
                        </tbody>
                           
                     
                      </table>
                    </div><!-- table-wrapper -->



                </div>

                <div class="col-md-4">
                    <div class="form-group">
                        <label class="control-label">Indiviso: $</label><br>
                        <label class="control-label">Valor total de las contrucciones: $</label>
                        
                    </div>
                </div><br>

              
          </div>


           <div class="row">
              
                <div class="col-md-4">
                    <div class="form-group">
                        <label class="control-label">Valor Total </label>
                        <input class="form-control valid" type="text" name="nombre" value="<?=$nombre?>" placeholder="">
                    </div>
                </div>
               
                
                
            </div>

            <div class="row">
              
                <div class="col-md-4">
                    <div class="form-group">
                        <label class="control-label">Coordenadas geográficas </label>
                        <input class="form-control valid" type="text" name="nombre" value="<?=$nombre?>" placeholder="">
                    </div>
                </div>
            </div>

             <div class="row">
              
                <div class="col-md-4">
                    <div class="form-group">
                        <label class="control-label">Se realizó visita al inueble </label>
                         <select data-title="SELECCIONA" name="es_usuario" id="es_usuario" data-live-search="true"  class="selectpicker form-control" value="<?=$tipo_marca?>" onchange="select_es_usuario();">
                        </select>  
                    </div>
                </div>
            </div>



             <div class="row">
              <div class="header col-md-12">
                    <legend>Valor referido por año </legend>
                </div><br>
                  <div class="col-md-4">
                    <div class="form-group">
                        <label class="control-label">Selecciona el año:</label>
                         <select data-title="SELECCIONA" name="es_usuario" id="es_usuario" data-live-search="true"  class="selectpicker form-control" value="<?=$tipo_marca?>" onchange="select_es_usuario();">
                        </select>  
                    </div>
                </div>

                <!--div class="col-md-8">
                  <legend>
                      <a href="" class="btn btn-info btn-with-icon pull-right" data-toggle="modal" data-target="#modalUbicaciones">
                        <div class="ht-40 justify-content-between">
                          <span class="pd-x-15">Agregar</span>
                          <span class="icon wd-40"><i class="fa fa-plus-circle"></i></span>
                        </div>
                      </a>
                      </legend>  
                </div-->
                 <div class="col-md-12">
                   <div class="table-wrapper">
                      <table id="datatableUbicaciones3" class="table display responsive nowrap">
                        <thead>
                          <tr>
                            <th class="wd-10p">Fracción</th>
                            <th class="wd-20p">Superficie</th>
                            <th class="wd-30p">Valor X M2 *</th>
                            <th class="wd-20p">Factor * </th>
                            <th class="wd-10p">Valor unitario </th>
                            <th class="wd-10p">Valor del terreno </th>
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
                                  <a href="" data-toggle="modal" data-target="#modaldemo1" class="btn btn-simple btn-icon" onclick="editar_lista('<?=$id?>')"><i class="fa fa-trash"></i></a>
                                  
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
                                  <a href="" data-toggle="modal" data-target="#modaldemo1" class="btn btn-simple btn-icon" onclick="editar_lista('<?=$id?>')"><i class="fa fa-trash"></i></a>
                                  
                              </td>
                            </tr>
                        </tbody>
                           
                     
                      </table>
                    </div><!-- table-wrapper -->

                  </div>


                <div class="col-md-4">
                    <div class="form-group">
                        <label class="control-label">Indiviso: $</label><br>
                        <label class="control-label">Total: $</label>
                        
                    </div>
                </div><br>
          </div><br>


           <div class="row">
              <div class="header col-md-12">
                    <legend>Datos de la construcción </legend>
                </div><br>
                <!--div class="col-md-12">
                  <legend>
                      <a href="" class="btn btn-info btn-with-icon pull-right" data-toggle="modal" data-target="#modalUbicaciones">
                        <div class="ht-40 justify-content-between">
                          <span class="pd-x-15">Agregar</span>
                          <span class="icon wd-40"><i class="fa fa-plus-circle"></i></span>
                        </div>
                      </a>
                      </legend>  
                </div-->
                <div class="col-md-12">
                   
                   <div class="table-wrapper">
                      <table id="datatableUbicaciones4" class="table display responsive nowrap">
                        <thead>
                          <tr>
                            <th class="wd-10p">Tipo </th>
                            <th class="wd-20p">Superficie</th>
                            <th class="wd-30p">Valor X M2 *</th>
                            <th class="wd-20p">Demérito ** </th>
                            <th class="wd-10p">Valor unitario </th>
                            <th class="wd-10p">Valor del terreno </th>
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
                                  <a href="" data-toggle="modal" data-target="#modaldemo1" class="btn btn-simple btn-icon" onclick="editar_lista('<?=$id?>')"><i class="fa fa-trash"></i></a>
                                  
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
                                  <a href="" data-toggle="modal" data-target="#modaldemo1" class="btn btn-simple btn-icon" onclick="editar_lista('<?=$id?>')"><i class="fa fa-trash"></i></a>
                                  
                              </td>
                            </tr>
                        </tbody>
                           
                     
                      </table>
                    </div><!-- table-wrapper -->



                </div>

                <div class="col-md-4">
                    <div class="form-group">
                        <label class="control-label">Indiviso: $</label><br>
                        <label class="control-label">Valor total de las contrucciones: $</label>
                        
                    </div>
                </div><br>

              
          </div>




            <div class="row">
              
                <div class="col-md-12">
                    <div class="form-group">
                        <label class="control-label">Observaciones </label>
                         <input type="text" name="" class="form-control valid"> 
                    </div>
                </div>
            </div>


            <div class="modal-footer">
        
        <input id="guardar" type="submit" name="" class="btn btn-primary tx-11 tx-uppercase pd-y-12 pd-x-25 tx-mont tx-medium" value="Guardar"> 
      </div>

       </form>



   
    
   

   
  </div><!-- br-section-wrapper -->
</div><!-- br-pagebody -->




<div id="modaldemo1" class="modal fade">
  
  <div class="modal-dialog modal-dialog-vertical-center modal-lg" role="document">
    <div class="modal-content bd-0 tx-14">
      <form id="guardar_usuario" method="post" enctype="multipart/form-data"> 
      <div class="modal-header pd-y-20 pd-x-25">
        <h6 class="tx-14 mg-b-0 tx-uppercase tx-inverse tx-bold">Factor GDL</h6>
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
                        <label class="control-label">Superficie</label>
                        <input class="form-control valid" type="text" name="nombre" value="<?=$nombre?>" placeholder="">
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="form-group">
                        <label class="control-label">Zona valor</label>
                         <select data-title="SELECCIONA" name="es_usuario" id="es_usuario" data-live-search="true"  class="selectpicker form-control" value="<?=$tipo_marca?>" onchange="select_es_usuario();"></select>
                            
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="form-group">
                        <label class="control-label">Frente tipo</label>
                        <input class="form-control valid" type="text" name="apellido_materno" required="true" placeholder="" aria-required="true"  value="<?=$apellido_materno?>">
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="form-group">
                        <label class="control-label">Fondo tipo</label>
                        <input class="form-control valid" type="text" name="puesto" required="true" placeholder="" aria-required="true"  value="<?=$puesto?>">
                    </div>
                </div>

                 <div class="col-md-4">
                    <div class="form-group">
                        <label class="control-label">Perimetro tipo</label>
                        <input class="form-control valid" type="text" id="fecha_alta" name="fecha_alta" required="true" placeholder="" aria-required="true"  value="<?=$fecha_alta?>" >
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="form-group">
                        <label class="control-label">Area tipo</label>
                        <input class="form-control valid" type="text" id="fecha_baja" name="fecha_baja" required="true" placeholder="" aria-required="true"  value="<?=$fecha_baja?>" >
                    </div>
                </div>
                 <div class="col-md-4">
                    <div class="form-group">
                        <label class="control-label">Valor de zona</label>
                        <input class="form-control valid" type="text" id="fecha_baja" name="fecha_baja" required="true" placeholder="" aria-required="true"  value="<?=$fecha_baja?>" >
                    </div>
                </div>
                 <div class="col-md-4">
                    <div class="form-group">
                        <label class="control-label">Cuadrante</label>
                        <input class="form-control valid" type="text" id="fecha_baja" name="fecha_baja" required="true" placeholder="" aria-required="true"  value="<?=$fecha_baja?>" >
                    </div>
                </div>
                 <div class="col-md-4">
                    <div class="form-group">
                        <label class="control-label">Nombre de colonia</label>
                        <input class="form-control valid" type="text" id="fecha_baja" name="fecha_baja" required="true" placeholder="" aria-required="true"  value="<?=$fecha_baja?>" >
                    </div>
                </div>

                  <div class="col-md-4">
                    <div class="form-group">
                        <label class="control-label">Frente</label>
                        <input class="form-control valid" type="text" id="fecha_baja" name="fecha_baja" required="true" placeholder="" aria-required="true"  value="<?=$fecha_baja?>" >
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="form-group">
                        <label class="control-label">Frente</label>
                        <input class="form-control valid" type="text" id="fecha_baja" name="fecha_baja" required="true" placeholder="" aria-required="true"  value="<?=$fecha_baja?>" >
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="form-group">
                        <label class="control-label">Profundidad </label>
                        <input class="form-control valid" type="text" id="fecha_baja" name="fecha_baja" required="true" placeholder="" aria-required="true"  value="<?=$fecha_baja?>" >
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="form-group">
                        <label class="control-label">Perimetro probable</label>
                        <input class="form-control valid" type="text" id="fecha_baja" name="fecha_baja" required="true" placeholder="" aria-required="true"  value="<?=$fecha_baja?>" >
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="form-group">
                        <label class="control-label">Perimetro</label>
                        <input class="form-control valid" type="text" id="fecha_baja" name="fecha_baja" required="true" placeholder="" aria-required="true"  value="<?=$fecha_baja?>" >
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="form-group">
                        <label class="control-label">Frente discontinuo</label>
                        <input class="form-control valid" type="text" id="fecha_baja" name="fecha_baja" required="true" placeholder="" aria-required="true"  value="<?=$fecha_baja?>" >
                    </div>
                </div>


                <div class="col-md-12">
                    <div class="form-group">
                        <label class="control-label">Factor</label>
                        <input class="form-control valid" type="text" id="fecha_baja" name="fecha_baja" required="true" placeholder="" aria-required="true"  value="<?=$fecha_baja?>" >
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





<div id="modaldemo2" class="modal fade">
  
  <div class="modal-dialog modal-dialog-vertical-center modal-lg" role="document">
    <div class="modal-content bd-0 tx-14">
      <form id="guardar_usuario" method="post" enctype="multipart/form-data"> 
      <div class="modal-header pd-y-20 pd-x-25">
        <h6 class="tx-14 mg-b-0 tx-uppercase tx-inverse tx-bold">Valor unitario Promedio</h6>
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
                        <label class="control-label">Frente 1</label>
                        <input class="form-control valid" type="text" name="nombre" value="<?=$nombre?>" placeholder="">
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="form-group">
                        <label class="control-label">Valor1</label>
                        <input class="form-control valid" type="text" name="nombre" value="<?=$nombre?>" placeholder="">
                            
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="form-group">
                        <label class="control-label">Frente 2</label>
                        <input class="form-control valid" type="text" name="nombre" value="<?=$nombre?>" placeholder="">
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="form-group">
                        <label class="control-label">Valor 2</label>
                        <input class="form-control valid" type="text" name="nombre" value="<?=$nombre?>" placeholder="">
                            
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="form-group">
                        <label class="control-label">Frente 3</label>
                        <input class="form-control valid" type="text" name="nombre" value="<?=$nombre?>" placeholder="">
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="form-group">
                        <label class="control-label">Valor 3</label>
                        <input class="form-control valid" type="text" name="nombre" value="<?=$nombre?>" placeholder="">
                            
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="form-group">
                        <label class="control-label">Frente 4</label>
                        <input class="form-control valid" type="text" name="nombre" value="<?=$nombre?>" placeholder="">
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="form-group">
                        <label class="control-label">Valor 4</label>
                        <input class="form-control valid" type="text" name="nombre" value="<?=$nombre?>" placeholder="">
                            
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="form-group">
                        <label class="control-label">Suma de frentes</label>
                        <input class="form-control valid" type="text" name="nombre" value="<?=$nombre?>" placeholder="">
                            
                    </div>
                </div>

                <div class="col-md-12">
                    <div class="form-group">
                        <label class="control-label">Valor * M2 Promedio</label>
                        <input class="form-control valid" type="text" name="nombre" value="<?=$nombre?>" placeholder="">
                            
                    </div>
                </div>

               
                
            </div>
           
           
           
         


              
          </div>


        
        </div><!-- form-layout -->
      </div>
      <div class="modal-footer">
        
        <button type="button" class="btn btn-secondary tx-11 tx-uppercase pd-y-12 pd-x-25 tx-mont tx-medium" data-dismiss="modal">Cerrar</button>
        <input id="guardar" type="submit" name="" class="btn btn-primary tx-11 tx-uppercase pd-y-12 pd-x-25 tx-mont tx-medium" value="Aceptar"> 
      </div>

       </form>
    </div>
  </div><!-- modal-dialog -->
</div><!-- modal -->




<div id="modaldemo3" class="modal fade">
  
  <div class="modal-dialog modal-dialog-vertical-center modal-lg" role="document">
    <div class="modal-content bd-0 tx-14">
      <form id="guardar_usuario" method="post" enctype="multipart/form-data"> 
      <div class="modal-header pd-y-20 pd-x-25">
        <h6 class="tx-14 mg-b-0 tx-uppercase tx-inverse tx-bold">Edad de remodelación</h6>
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
                        <label class="control-label">Edad original</label>
                        <input class="form-control valid" type="text" name="nombre" value="<?=$nombre?>" placeholder="">
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="form-group">
                        <label class="control-label">Edad remodelacion</label>
                        <input class="form-control valid" type="text" name="nombre" value="<?=$nombre?>" placeholder="">
                            
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="form-group">
                        <label class="control-label">% remodelacion</label>
                        <input class="form-control valid" type="text" name="nombre" value="<?=$nombre?>" placeholder="">
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="form-group">
                        <label class="control-label">Edad resultante</label>
                        <input class="form-control valid" type="text" name="nombre" value="<?=$nombre?>" placeholder="">
                            
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="form-group">
                        <label class="control-label">Vida util remanente</label>
                        <input class="form-control valid" type="text" name="nombre" value="<?=$nombre?>" placeholder="">
                    </div>
                </div>
               

               
                
            </div>
           
           
           
         


              
          </div>


        
        </div><!-- form-layout -->
      </div>
      <div class="modal-footer">
        
        <button type="button" class="btn btn-secondary tx-11 tx-uppercase pd-y-12 pd-x-25 tx-mont tx-medium" data-dismiss="modal">Cerrar</button>
        <input id="guardar" type="submit" name="" class="btn btn-primary tx-11 tx-uppercase pd-y-12 pd-x-25 tx-mont tx-medium" value="Calcular"> 
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
          },
          "bInfo" : false,
          "bPaginate": false,
          "searching": false
        });

    $('#datatableUbicaciones2').DataTable({
          responsive: true,
          language: {
            searchPlaceholder: 'Buscar...',
            sSearch: '',
            lengthMenu: '_MENU_ items/page',
          },
          "bInfo" : false,
          "bPaginate": false,
          "searching": false
        });


     $('#datatableUbicaciones3').DataTable({
          responsive: true,
          language: {
            searchPlaceholder: 'Buscar...',
            sSearch: '',
            lengthMenu: '_MENU_ items/page',
          },
          "bInfo" : false,
          "bPaginate": false,
          "searching": false
        });

    $('#datatableUbicaciones4').DataTable({
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
