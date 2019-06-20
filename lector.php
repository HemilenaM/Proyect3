<?php  
require_once('venta.php');
require_once('producto.php');
class Lector
{
    public function impresionVentas()
    {           //LECTURA DE TRANSACCIONES
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
        echo "Cantidad de ventas: ". $long;
        for ($i=0; $i<$long ; $i++)
        {
            echo "<br><br>Producto: ". $arrayVentas[$i]->getProducto();           
            echo "<br>Codigo: " . $arrayVentas[$i]->getCodigo();
            echo "<br>Precio: ". $arrayVentas[$i]->getPrecio() . " ". $arrayVentas[$i]->getMonedaVenta();
        }
    }
    public function impresionMonedas()
    {        //LECTURA DE Monedas
		$arrayMonedas = array();
		$data = file_get_contents('json/monedas.json');
        $monedas = json_decode($data);
        foreach ($monedas as $key => $value)
        {
            array_push($arrayMonedas, new Producto($value->code, $value->name));        
        }
        $longMonedas = count($arrayMonedas);
        $monedaSelect = $_POST['moneda'];
        
        foreach ($arrayMonedas as $moneda) 
        {
            $codMoneda = $moneda->getCodigo();
            if ($codMoneda == $monedaSelect)
            echo "<br>" . $moneda->getNombre();

        }
    }
}
?>