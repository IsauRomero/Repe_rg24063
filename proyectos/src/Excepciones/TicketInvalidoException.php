<?php

namespace Parqueo\Excepciones;

use InvalidArgumentException;

class TicketInvalidoException extends InvalidArgumentException
{
    public function __construct(public readonly string $campo)
    {
        parent::__construct("Error en el campo" . $campo);
    }

}