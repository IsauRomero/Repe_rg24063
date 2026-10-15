<?php
namespace Parqueo\Modelos;
use Parqueo\Modelos\Vehiculo;
class Pickup extends Vehiculo
{
    public function tarifaPorHora(): float
    {
        return 1;
    }
}