<?php declare(strict_types=1);

namespace App\Services;

class VehicleService{

    public function vender(string $comprador) : void {
        if($comprador === 'Victor'){
            $vehicle = new VehiculoEntity();
            .... Aqui va la logica del negocio ...
        }
    }

}