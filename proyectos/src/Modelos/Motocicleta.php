<?php
namespace Parqueo\Modelos;
use Parqueo\Modelos\Vehiculo;
class Motocicleta extends Vehiculo
{
    public function tarifaPorHora(): float
    {
        return 0.40;
    }
}