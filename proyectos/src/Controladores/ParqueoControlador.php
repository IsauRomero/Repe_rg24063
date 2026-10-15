<?php

namespace Parqueo\Controladores;

use Parqueo\Modelos\Automovil;
use Parqueo\Modelos\Motocicleta;
use Parqueo\Modelos\Vehiculo;
use Parqueo\Modelos\Pickup;
use Parqueo\Enums\TipoVehiculo;
use Parqueo\Excepciones\TicketInvalidoException;

class ParqueoControlador
{
    public function formulario(string $error= "", array $datos=[]): void
    {

        $tipos = TipoVehiculo::cases();

        require __DIR__ . "/../../vistas/parciales.php";

    }

    public function guardar(): void
    {
        $placa = trim($_POST["placa"] == "");
        $propietario = trim($_POST["propietario"] == "");
        $tipoVehiculo = trim($_POST["tipo"] == "");
        $entrada = trim($_POST["entrada"] == "");
        $salida = trim($_POST["salida"] == "");

        $datos[] = [
            "placa"=> $placa,
            "propietario"=> $propietario,
        ]
    }
}