<?php

namespace Parqueo\Enums;

use Parqueo\Modelos\Vehiculo;

enum TipoVehiculo: string {
    case Automovil = "A" ;
    case Motocicleta = "M";
    case Pickup = "P";

    public function etiqueta(): string {
        return match ($this) {
            self::Automovil => "Automovil",
            self::Motocicleta =>  "Motocicleta" ,
            self::Pickup => "Pickup"
        };
    }

     public function crearVehiculo(string $placa, string $propietario): Vehiculo {
        return match ($placa) {
            self::Automovil => self::crearVehiculo($placa, $propietario),
            self::Pickup => self::crearVehiculo($placa, $propietario),
            self::Motocicleta => self::crearVehiculo($placa, $propietario)
        };
    }
}
