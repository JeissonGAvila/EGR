<?php declare(strict_types=1);

namespace App\Entities;

use App\Entities\Interfaces\AutoInterface;

class AutoEntity implements AutoInterface{

    private bool $manual;

    private string $plate;

    private string $color;

    public function isManual() : bool {
        return $this->manual;
    }

    public function manual(bool $isManual) : void {
        $this->manual = $isManual;
    }

    public function setPlate(string $plate): void{
        $this->plate = $plate;
    }

    public function setColor(string $color) : void {
        $this->color = $color;
    }

    public function getPlate() : string {
        return $this->plate;
    }

    public function getColor() : string {
        return $this->color;
    }

}