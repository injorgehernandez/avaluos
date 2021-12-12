
<?php
 //include("../backend/seguridad.php");
require("../backend/connection.php");

$id = $_GET["id"];


$stmt = $conn->prepare("SELECT id_comercial_compra, id_producto, id_proveedor, precio_compra, fecha_carga_estimada, numero_pallets, peso_neto_estimado, peso_neto_real, referencia_carga, id_direccion FROM pedido_compra where id=?");

$stmt->bind_param("i", $id);
$stmt->execute();
$stmt->bind_result($id_comercial_compra_bdd, $id_producto_bdd, $id_proveedor_bdd, $precio_compra_bdd, $fecha_carga_estimada_bdd, $numero_pallets_bdd, $peso_neto_estimado_bdd, $peso_neto_real_bdd, $referencia_carga_bdd, $id_direccion_bdd);


while ($stmt->fetch()) {
  $id_comercial_compra = $id_comercial_compra_bdd;
  $id_producto = $id_producto_bdd;
  $id_proveedor = $id_proveedor_bdd;
  $precio_compra = $precio_compra_bdd;
  $fecha_carga_estimada = $fecha_carga_estimada_bdd;
  $numero_pallets = $numero_pallets_bdd;
  $peso_neto_estimado = $peso_neto_estimado_bdd;
  $peso_neto_real = $peso_neto_real_bdd;
  $referencia_carga = $referencia_carga_bdd;
  $id_direccion = $id_direccion_bdd;
}

$sqlProveedor = "SELECT * FROM proveedor";
$resultProveedor=  mysqli_query($conn, $sqlProveedor);



$stmt = $conn->prepare("SELECT proveedor_producto.id_comercial_compra, usuario.nombre, usuario.apellidos, proveedor_producto.precio_venta FROM proveedor_producto INNER JOIN usuario ON proveedor_producto.id_comercial_compra = usuario.id  WHERE proveedor_producto.id=?");

$stmt->bind_param("i", $id_producto);
$stmt->execute();
$stmt->bind_result($id_comercial_compra_bdd, $nombre_bdd, $apellidos_bdd, $precio_venta_bdd);


while ($stmt->fetch()) {
  $id_comercial_compra = $id_comercial_compra_bdd;
  $nombre_comercial = $nombre_bdd." ".$apellidos_bdd;
  $precio_venta = $precio_venta_bdd;
}



$sqlProducto = "SELECT proveedor_producto.id, producto.producto FROM proveedor_producto INNER JOIN producto ON proveedor_producto.id_producto = producto.id WHERE proveedor_producto.id_proveedor='".$id_proveedor."'";
$resultProducto = mysqli_query($conn, $sqlProducto);



$sqlDireccion = "SELECT * FROM proveedor_direccion WHERE id_proveedor='".$id_proveedor."'";
$resultDireccion=  mysqli_query($conn, $sqlDireccion);



$stmt = $conn->prepare("SELECT id, no_factura, factura, base_imponible, iva  FROM pedido_compra_factura where id_pedido=?");

$stmt->bind_param("i", $id);
$stmt->execute();
$stmt->bind_result($id_factura_bdd, $no_factura_bdd, $factura_bdd, $base_imponible_bdd, $iva_bdd);


while ($stmt->fetch()) {
  $no_factura= $no_factura_bdd;
  $factura= $factura_bdd;
  $base_imponible= $base_imponible_bdd;
  $iva=$iva_bdd;
  $id_factura =$id_factura_bdd; 
}




?>
 <div class="form-layout">
        <input class="form-control valid" type="hidden" name="id" id="id" value="<?=$id?>" placeholder="">
        <input class="form-control valid" type="hidden" name="id_factura" id="id_factura" value="<?=$id_factura?>" placeholder="" >

          <div class="content">    
      
            <h6 class="text-center"></h6>
            <div class="row">
                <div class="col-md-12">
                    <div class="form-group">
                        <label class="control-label">Proveedor</label>
                        <select data-title="SELECCIONA" name="id_proveedor" id="id_proveedor" data-live-search="true"  class="selectpicker form-control" onchange="datos_proveedor();" required="">
                          <option disabled="" selected="">Selecciona</option>
                            <?php
                              while($rowProveedor =mysqli_fetch_array($resultProveedor,MYSQLI_ASSOC)){
                                $id_p= $rowProveedor["id"];
                                $nombre = $rowProveedor["nombre_fiscal"];
                                ?>
                                    <option value="<?=$id_p?>"><?=$nombre?></option>  
                                <?php
                              }
                            ?>
                        </select>  
                    </div>
                </div>
              </div>
              <div class="row" id="datos_proveedor">
               
               <div class="col-md-6">
                    <div class="form-group">
                        <label class="control-label">Producto</label>
                        <select data-title="SELECCIONA" name="id_producto" id="id_producto" data-live-search="true"  class="selectpicker form-control"  onchange="datos_producto();" required="">
                            <option disabled="" selected="">Selecciona</option>
                           <?php
                              while($rowProducto =mysqli_fetch_array($resultProducto,MYSQLI_ASSOC)){
                                $id_p= $rowProducto["id"];
                                $nombre = $rowProducto["producto"];
                                ?>
                                    <option value="<?=$id_p?>"><?=$nombre?></option>  
                                <?php
                              }
                            ?>
                        </select>  
                    </div>
                </div>

                <div class="col-md-6">
                  <div class="form-group">
                      <label class="control-label">Dirección de carga</label>
                      <select data-title="SELECCIONA" name="id_direccion" id="id_direccion" data-live-search="true"  class="selectpicker form-control" required="">
                        <option disabled="" selected="">Selecciona</option>

                        <?php
                            while($rowDireccion =mysqli_fetch_array($resultDireccion,MYSQLI_ASSOC)){
                              $id_d= $rowDireccion["id"];
                              $nombre = $rowDireccion["calle"]." #".$rowDireccion["numero_exterior"].", CP:".$rowDireccion["cp"].", ".$rowDireccion["municipio"].", ".$rowDireccion["estado"].", ".$rowDireccion["pais"];
                              ?>
                                  <option value="<?=$id_d?>"><?=$nombre?></option>  
                              <?php
                            }
                          ?>
                      </select> 
                  </div>
                </div>
              </div>

               <div class="row" id="datos_producto">
                <div class="col-md-6">
                    <div class="form-group">
                        <label class="control-label">Comercial de compra</label>
                        <input class="form-control valid" type="text" name="omercial_compra" id="comercial_compra" value="<?=$nombre_comercial?>" placeholder="" required="" readonly="">

                        <input class="form-control valid" type="hidden" name="id_comercial_compra" id="id_comercial_compra" value="<?=$id_comercial_compra?>" placeholder="" >
                    </div>
                </div>

                <div class="col-md-6">
                    <div class="form-group">
                        <label class="control-label">Precio de compra</label>
                        <input class="form-control valid" type="number" name="precio_compra" id="precio_compra" value="<?=$precio_venta?>" placeholder="" required="">
                    </div>
                </div>
              </div>

              <div class="row">


                 <div class="col-md-6">
                    <div class="form-group">
                        <label class="control-label">Fecha de carga estimada</label>
                        <input class="form-control valid" type="date" name="fecha_carga_estimada"  id="fecha_carga_estimada" value="" placeholder="" required="" value="<?=$fecha_carga_estimada?>">
                    </div>
                </div>

                <div class="col-md-6">
                    <div class="form-group">
                        <label class="control-label">Numero de pallets</label>
                       <input class="form-control valid" type="number" name="numero_pallets" id="numero_pallets"  placeholder="" required="" value="<?=$numero_pallets?>">
                    </div>
                </div>


                <div class="col-md-6">
                    <div class="form-group">
                        <label class="control-label">Peso neto estimado</label>
                        <input class="form-control valid" type="number" name="peso_neto_estimado" id="peso_neto_estimado" placeholder="" required="" value="<?=$peso_neto_estimado?>">
                    </div>
                </div>

               

                <div class="col-md-6">
                    <div class="form-group">
                        <label class="control-label">Peso neto real</label>
                        <input class="form-control valid" type="text" name="peso_neto_real" id="peso_neto_real"  placeholder="" readonly="" >
                    </div>
                </div>

                <div class="col-md-6">
                    <div class="form-group">
                        <label class="control-label">Referencia de carga</label>
                        <input class="form-control valid" type="text" name="referencia_carga" id="referencia_carga" placeholder="" required="" value="<?=$referencia_carga?>">
                    </div>
                </div>
            </div>



            <h3>Factura de compra al Proveedor</h3>
            <div class="row">
               <div class="col-md-12">
                    <div class="form-group">
                        <label class="control-label">Número de factura de venta asociado</label>
                        <input class="form-control valid" type="text" name="no_factura" id="no_factura"  placeholder="" value="<?=$no_factura?>">
                    </div>
                </div>

                <div class="col-md-12">
                    <div class="form-group">
                        <label class="control-label">Ver factura</label>
                        
                    </div>
                </div>

                <div class="col-md-12">
                    <div class="form-group">
                        <label class="control-label">Factura (Editar) | </label>

                        <a href="<?=$factura?>"  target="blank"><i class="fa fa-file-pdf-o" aria-hidden="true"></i> Ver archivo</a>
                        <input class="form-control valid" type="file" name="factura" id="factura"  placeholder="" >
                    </div>
                </div>


                 <div class="col-md-12">
                    <div class="form-group">
                        <label class="control-label">Base imponible</label>
                        <input class="form-control valid" type="text" name="base_imponible" id="base_imponible"  placeholder="" value="<?=$base_imponible?>">
                    </div>
                </div>


                <div class="col-md-12">
                    <div class="form-group">
                        <label class="control-label">IVA</label>
                        <input class="form-control valid" type="text" name="iva" id="iva"  placeholder="" value="<?=$iva?>">
                    </div>
                </div>
            </div>
              
          </div>


        
        </div><!-- form-layout -->


<script type="text/javascript">
    

  $(function(){
   
    $("#id_proveedor").val("<?=$id_proveedor?>");

    $("#id_producto").val("<?=$id_producto?>");

    $("#id_direccion").val("<?=$id_direccion?>");

   
    

  });
</script>