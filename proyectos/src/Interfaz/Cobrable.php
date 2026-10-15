<?php

namespace Parqueo\Interfaz;

interface Cobrable
{
    public function calcularTarifa(int $minutos): float;
    
}