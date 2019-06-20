<?php
include "Iconversion.php";
include "monedas/euro.php";
include "monedas/dolar.php";
include "monedas/pesoArg.php";
include "monedas/pesoCol.php";
include "monedas/bolivar.php";
class convertidor
{
    public function convertir()
    {
        $moneda = $_POST['moneda'];
        switch ($moneda) 
        {
            case 'EUR':
            {
                $euro = new Euro();
                $euro->Convertir();
                break;
            }
            case 'USD':
            {
                $dolar = new Dolar();
                $dolar->Convertir();
                break;
            }
            case 'ARS':
            {
                $pesoArs = new PesoArg();
                $pesoArs->Convertir();
                break;
            }
            case 'COP':
            {
                $pesoCop = new PesoCol();
                $pesoCop->Convertir();
                break;
            }
            case 'BSS':
            {
                $bolivar = new Bolivar();
                $bolivar->Convertir();
                break;
            }
        }
    }
}
?>