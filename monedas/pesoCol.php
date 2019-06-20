<?php
class PesoCol implements IConversion
{  
    public function Convertir()
    { //LECTURA DE TRANSACCIONES
		$arrayVentas = array();
		$data = file_get_contents('json/transacciones.json');
        $ventas = json_decode($data);
                //LECTOR DE PRODUCTOS
        $arrayProductos = array();
        $data = file_get_contents('json/productos.json');
        $productos = json_decode($data);
        foreach ($ventas as $key => $value)
        {
            foreach ($productos as $llave => $valor)
            {
                if ($value->code == $valor->code)       
                array_push($arrayVentas, new Venta($valor->name, $value->code, $value->amount, $value->currency));     
            }
        }
        $long = count($arrayVentas);
        $arrayConvert = array();
        for ($i=0; $i<$long ; $i++)
        {
            $MonedaVenta = $arrayVentas[$i]->getMonedaVenta();
            switch ($MonedaVenta) 
            {
                case 'USD':
                {
                    $precioNew = $arrayVentas[$i]->getPrecio() /3083.05;
                    array_push($arrayConvert, "$precioNew");   
                    break;
                } 
                case 'ARS':
                {
                    $precioNew = $arrayVentas[$i]->getPrecio() /46.34;
                    $precioNew = $precioNew / 0.88;
                    $precioNew = $precioNew * 3083.05;
                    array_push($arrayConvert, "$precioNew");   
                    break;
                }
                case 'COP':
                {
                    $precioNew = $arrayVentas[$i]->getPrecio(); 
                    array_push($arrayConvert, "$precioNew");   
                    break;
                }
                case 'BSS':
                {
                    $precioNew = $arrayVentas[$i]->getPrecio() / 3726.04;
                    $precioNew = $arrayVentas[$i]->getPrecio() / 0.88;
                    array_push($arrayConvert, "$precioNew");   
                    break;
                }
                case 'EUR':
                {
                    $precioNew = $arrayVentas[$i]->getPrecio() / 3726.04;
                    $precioNew = $precioNew * 46.34;    
                    array_push($arrayConvert, "$precioNew");   
                    break;
                } 
            }
        } 
        for ($x=0; $x<$long ; $x++) 
        {
            echo "<br><br>Producto: ". $arrayVentas[$x]->getProducto(). " - " . $arrayVentas[$x]->getCodigo();
            echo "<br>Precio Legal: ". $arrayVentas[$x]->getPrecio() . " ". $arrayVentas[$x]->getMonedaVenta();
            echo "<br>Precio solicitado:  " . round($arrayConvert[$x],2). " $"; 
        }
    }
}
?>