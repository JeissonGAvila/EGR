<?php declare(strict_types=1);

namespace App\Entities\Interfaces;

interface MotoInterface extends VehicleInterface{

    public function setChainVendor(string $vendor) : void;

    public function getChainVendor() : string;

}