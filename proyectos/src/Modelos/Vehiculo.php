<?php

namespace Parqueo\Modelos;

use Parqueo\Contratos\Cobrable;

abstract class Vehiculo implements Cobrable
{
    public function __construct(public readonly string $placa, public readonly string $propietario)
    {

    }

    abstract public function tarifaPorHora(): float;

    public function calcularTarifa(int $minutos): float
    {
        if ($minutos <= 15) { 
            return 0;
        }

        return $this->calcularTarifa($minutos) * $this->tarifaPorHora();
    }
}