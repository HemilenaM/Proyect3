<?php
class Producto
{
    Private $Codigo;
    Private $Nombre;
    
    function __construct($code, $name) 
    {
        $this->Codigo = $code;
        $this->Nombre = $name;
    }
     // Get para leer u acceder
    public function getCodigo()
    {
        return $this->Codigo;
    }
    public function getNombre()
    {
        return $this->Nombre;
    }
}

?>