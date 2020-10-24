<?php

require_once "Proveedor.php";
require_once "LineaDeCompra.php";

class PedidoDeCompra
{
    private $fecha;
    private $proveedor;
    private $fechaEntrega;
    private $costoTotal;
    private $isCerrado;
    private $lineasDeCompra = array();

    public function getFecha()
    {
        return $this->fecha;
    }

    public function setFecha($f)
    {
        $this->fecha = $f;
    }


    public function getProveedor()
    {
        return $this->proveedor;
    }

    public function setProveedor($p)
    {
        $this->proveedor = $p;
    }


    public function getFechaEntrega()
    {
        return $this->fechaEntrega;
    }

    public function setFechaEntrega($fe)
    {
        $this->fechaEntrega = $fe;
    }


    public function getCostoTotal()
    {
        return $this->cosTot;
    }

    public function setCostoTotal($ct)
    {
        $this->cosTot = $ct;
    }


    public function getIsCerrado()
    {
        return $this->isCerrado;
    }

    public function setIsCerrado($ic)
    {
        $this->isCerrado = $ic;
    }


    public function getLineasDeCompras()
    {
        return $this->linCom;
    }

    public function setLineaDeCompras($lc)
    {
        $this->linCom[] = $lc;
    }

    public function MostrarDatos()
    {
        echo "Fecha de compra: ".$this->getFecha().".<br>";
        echo "Proveedor: ".$this->getProveedor()->getDescripcion().", ID: ".$this->getProveedor()->getId().".<br>";
        echo "Fecha estimada de entrega: ".$this->getFechaEntrega().".<br>";
        echo "Costo total: ".$this->getCostoTotal().".<br>";
        if ($this->getIsCerrado())
        {
            echo "Pedido cerrado: Si.<br><br>";
        }else{
            echo "Pedido cerrado: No.<br><br>";
        };
        foreach ($this->getLineasDeCompras() as $lineas)
        {
            echo "Producto: ".$lineas->getProducto()->getCodigo().".<br>";
            echo "Descripcion: ".$lineas->getProducto()->getDescripcion().".<br>";
            echo "Precio de Venta: ".$lineas->getProducto()->getPrecioVenta().".<br>";
            echo "Cantidad: ".$lineas->getCantidad().".<br>";
            echo "Producto: ".$lineas->getCostoUnitario().".<br>";            
            if ($lineas->getIsEntregado())
            {
                echo "Pedido entregado: Si.<br><br>";
            }else{
                echo "Pedido entregado: No.<br><br>";
            };
        }
    }

}