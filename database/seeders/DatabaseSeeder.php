<?php

namespace Database\Seeders;

use App\Models\transporte;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $transporte = new transporte();
        $transporte->id ='1214';
        $transporte->nombre='trailera';
        $transporte->razon_social='camiones';

        $transporte->save();

    }
}
