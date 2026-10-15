<?php
namespace Parqueo\Modelos;
use Parqueo\Modelos\Vehiculo;
class Automovil extends Vehiculo
{
    public function tarifaPorHora(): float
    {
        return 0.75;
    }
}