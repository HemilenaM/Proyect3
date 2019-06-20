<?php
class Venta
{
    Private $Producto;
    Private $Codigo;
    Private $Precio;
    Private $MonedaVenta;
    
    function __construct($name, $code, $amount, $currency) 
    {
        $this->Producto = $name;
        $this->Codigo = $code;
        $this->Precio = $amount;
        $this->MonedaVenta = $currency;
    }
     // Get para leer u acceder
    public function getProducto()
    {
        return $this->Producto;
    }
    public function getCodigo()
    {
        return $this->Codigo;
    }
    public function getPrecio()
    {
        return $this->Precio;
    }
    public function getMonedaVenta()
    {
        return $this->MonedaVenta;
    }
}

?>