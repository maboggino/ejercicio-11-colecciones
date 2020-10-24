<?php

require_once "models/PedidoDeCompra.php";

$prov = new Proveedor;

$prov->setDescripcion("Arcor");
$prov->setId("4");

$prod1 = new Producto;

$prod1->setCodigo("3333");
$prod1->setDescripcion("Galletitas");
$prod1->setPrecioVenta(60);

$prod2 = new Producto;

$prod2->setCodigo("5656");
$prod2->setDescripcion("Obleas");
$prod2->setPrecioVenta(80);

$lin1 = new LineaDeCompra;

$lin1->setProducto($prod1);
$lin1->setCantidad(4);
$lin1->setCostoUnitario(30);
$lin1->setIsEntregado(true);

$lin2 = new LineaDeCompra;

$lin2->setProducto($prod2);
$lin2->setCantidad(15);
$lin2->setCostoUnitario(40);
$lin2->setIsEntregado(false);

$pedido = new PedidoDeCompra;

$pedido->setFecha("23/10/20");
$pedido->setProveedor($prov);
$pedido->setFechaEntrega("27/10/20");
$pedido->setCostoTotal(120);
$pedido->setIsCerrado(false);
$pedido->setLineaDeCompras($lin1);
$pedido->setLineaDeCompras($lin2);

$pedido->MostrarDatos();