<?php 

$uri = "http://servicioweb.local/servicioweb/servidor.php";
$servicioWeb = new SoapServer(null, array('uri'=>$uri));
$servicioWeb->addFunction("recuperaProductos");
$servicioWeb->handle();

function recuperaProductos () {
    $conexion = new mysqli('localhost', 'root', '', 'jardineria');
    $consulta = "SELECT * FROM productos;";
    $productos = $conexion->query($consulta);
    
    header("Content-type: text/xml");
    $datos = "<?xml version='1.0' encoding='UTF-8'?>";
    $datos .= "<productos>";
    while ($producto = $productos->fetch_object()){
        
        $datos .= "<producto>";
        $datos .= "<codigoProducto>" .$producto->CodigoProducto. "</codigoProducto>";
        // $datos .= "<nombre>" .$producto->Nombre . "</nombre>";
        // $datos .= "<gama>" .$producto->Gama . "</gama>";
        $datos .= "<dimensiones>" .$producto->Dimensiones . "</dimensiones>";
        $datos .= "<proveedores>" .$producto->Proveedor . "</proveedores>";
        // $datos .= "<descripcion>" .$producto->Descripcion . "</descripcion>";
        $datos .= "<cantidad>" .$producto->CantidadEnStock . "</cantidad>";
        $datos .= "<precioVenta>" .$producto->PrecioVenta . "</precioVenta>";
        $datos .= "<precioProveedor>" .$producto->PrecioProveedor . "</precioProveedor>";
        $datos .= "</producto>";

    }

    $datos .= "</productos>";

    return $datos;
}

?>