<?php

namespace Parqueo\Contratos;

interface Cobrable
{
    public function calcularTarifa(int $minutos): float;
    
}