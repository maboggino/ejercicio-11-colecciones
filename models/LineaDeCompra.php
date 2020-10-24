<?php

require_once "Producto.php";

class LineaDeCompra
{
    private $costoUnitario;
    private $producto;
    private $cantidad;
    private $isEntregado;

    public function getProducto()
    {
        return $this->producto;
    }

    public function setProducto($p)
    {
        $this->producto = $p;
    }

    public function getCantidad()
    {
        return $this->cantidad;
    }

    public function setCantidad($cant)
    {
        $this->cantidad = $cant;
    }

    public function getCostoUnitario()
    {
        return $this->costoUnitario;
    }

    public function setCostoUnitario($cu)
    {
        $this->costoUnitario = $cu;
    }

    public function getIsEntregado()
    {
        return $this->isEntregado;
    }

    public function setIsEntregado($ie)
    {
        $this->isEntregado = $ie;
    }

}