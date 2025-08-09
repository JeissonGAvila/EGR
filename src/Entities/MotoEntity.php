<?php declare(strict_types=1);

namespace App\Entities;

class MotoEntity extends VehiculoEntity{

    //¿Por qué la parte superior nos muestra un error y cuando lo hicimos
    // de esta manera NO mostraba error alguno?

    /**
     * El error que señala esta clase se debe a que ya existe una
     * clase con el mismo nombre en el mismo archivo pero no tiene
     * que ver con la implementación. ¿Entonces, a qué se debe?
     */

    public function prueba() : void {
        $this->plate;
    }

}