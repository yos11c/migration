<?php

namespace Database\Seeders;

use App\Models\camiones;
use Illuminate\Database\Seeder;

class camion_seeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $camiones = new camiones();
        $camiones->placa ='20235';
        $camiones->placa_camion ='8527';
        $camiones->marca='mercedez benz';
        $camiones->color='rojo';
        $camiones->capacidad_toneladas='10';
        $camiones->transporte_id='12145';

        $camiones->save();
    }
}
