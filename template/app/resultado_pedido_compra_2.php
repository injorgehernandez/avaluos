<?php
//include("../assets/includes/functions.php");
//include("../assets/includes/seguridad.php");
//session_start();

require("../backend/connection.php");



$id_producto = $_GET["id_producto"];



$stmt = $conn->prepare("SELECT proveedor_producto.id_comercial_compra, usuario.nombre, usuario.apellidos, proveedor_producto.precio_venta FROM proveedor_producto INNER JOIN usuario ON proveedor_producto.id_comercial_compra = usuario.id  WHERE proveedor_producto.id=?");

$stmt->bind_param("i", $id_producto);
$stmt->execute();
$stmt->bind_result($id_comercial_compra_bdd, $nombre_bdd, $apellidos_bdd, $precio_venta_bdd);


while ($stmt->fetch()) {
  $id_comercial_compra = $id_comercial_compra_bdd;
  $nombre_comercial = $nombre_bdd." ".$apellidos_bdd;
  $precio_venta = $precio_venta_bdd;
}


?>


<div class="col-md-6">
    <div class="form-group">
        <label class="control-label">Comercial de compra</label>
        <input class="form-control valid" type="text" name="comercial_compra" id="comercial_compra" value="<?=$nombre_comercial?>" placeholder="" required="" readonly="">

        <input class="form-control valid" type="hidden" name="id_comercial_compra" id="id_comercial_compra" value="<?=$id_comercial_compra?>" placeholder="" >
    </div>
</div>

<div class="col-md-6">
    <div class="form-group">
        <label class="control-label">Precio de compra</label>
        <input class="form-control valid" type="number" name="precio_compra" id="precio_compra" value="<?=$precio_venta?>" placeholder="" required="">
    </div>
</div>

