<?php declare(strict_types=1);

namespace App\Entities\Interfaces;

interface VehicleInterface{

    public function setPlate(string $plate) : void;

    public function getPlate() : string;

    public function setColor(string $color) : void;

    public function getColor() : string;

}