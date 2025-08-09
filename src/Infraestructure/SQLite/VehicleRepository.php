<?php declare(strict_types=1);

namespace App\Infraestructure\SQLite;

use App\Entities\Interfaces\VehicleInterface;
use App\Repositories\VehicleRepositoryInterface;

class VehicleRepository implements VehicleRepositoryInterface{

    public function getByPlate(string $plate) : VehicleInterface {
        $query = 'SELECT ....';
    }

}