<?php declare(strict_types=1);

namespace App\Repositories;

use App\Entities\Interfaces\VehicleInterface;

interface VehicleRepositoryInterface{

    public function save(VehicleInterface $vehicle) : VehicleInterface;

    public function getByPlate(string $plate) : VehicleInterface;

    public function getByVendor(string $vendor) : VehicleInterface;

    public function update(VehicleInterface $vehicle) : void;

    public function delete(VehicleInterface $vehicle) : void;

}