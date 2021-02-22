<?php 
$url = "http://servicioweb.local/servicioweb/servidor.php";
$uri = "http://servicioweb.local/servicioweb/cliente.php";
$productos = new SoapClient(null, array('location'=>$url, 'uri'=>$uri));

$prod = new SimpleXMLElement($productos->recuperaProductos());

?>

<pre>
<?php var_dump ($prod); ?>
</pre>

<!doctype html>
<html lang="es">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
    <title>Jardineria</title>
  </head>
  <body>

    <div class="container">
        <nav class="navbar navbar-light">
            <div class="container-fluid">
                <h1>Lista de productos de Jardinería</h1>
            </div>
        </nav>

        <table class="table table-hover">
        <thead>
            <tr>
            <th scope="col">#</th>
            <th scope="col">Nombre</th>
            <th scope="col">Gama</th>
            <th scope="col">Dimensiones</th>
            <th scope="col">Proveedor</th>
            <th scope="col">Descripción</th>
            <th scope="col">Cantidad</th>
            <th scope="col">Precio de venta</th>
            <th scope="col">Precio de proveedor</th>
            </tr>
        </thead>
        <tbody>
            <?php for ($i=0; $i < count($prod); $i++) : ?>
            <tr>
            <td><?php echo $prod->producto[$i]->codigoProducto; ?></td>
            <td></td>
            <td></td>
            <td><?php echo $prod->producto[$i]->dimensiones; ?></td>
            <td><?php echo $prod->producto[$i]->proveedores; ?></td>
            <td></td>
            <td><?php echo $prod->producto[$i]->cantidad; ?></td>
            <td><?php echo $prod->producto[$i]->precioVenta; ?></td>
            <td><?php echo $prod->producto[$i]->precioProveedor; ?></td>
            </tr>
            <?php endfor; ?>
        </tbody>
        </table>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.6.0/dist/umd/popper.min.js" integrity="sha384-KsvD1yqQ1/1+IA7gi3P0tyJcT3vR+NdBTt13hSJ2lnve8agRGXTTyNaBYmCR/Nwi" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.min.js" integrity="sha384-nsg8ua9HAw1y0W1btsyWgBklPnCUAFLuTMS2G72MMONqmOymq585AcH49TLBQObG" crossorigin="anonymous"></script>

  </body>
</html>
