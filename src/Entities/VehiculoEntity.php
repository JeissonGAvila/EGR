<?php declare(strict_types=1);

namespace App\Entities;

use App\Entities\Interfaces\VehicleInterface;

abstract class VehiculoEntity implements VehicleInterface{

    protected int $id;

    protected string $color;

    protected string $plate;

    public function getId() : int {
        return $this->id;
    }

    public function setId(int $id) : void {
        $this->id = $id;
    }

    public function getColor() : string {
        return $this->color;
    }

    public function setColor(string $color) : void {
        $this->color = $color;
    }

    public function getPlate() : string {
        return $this->plate;
    }

    public function setPlate(string $plate) : void {
        $this->plate = $plate;
    }

    //public abstract function setCantidadAsientos(int $cantidadAsientos) : void;

    //public abstract function getCantidadAsientos() : int;

}