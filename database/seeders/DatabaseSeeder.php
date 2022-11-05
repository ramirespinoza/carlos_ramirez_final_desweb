<?php

namespace Database\Seeders;

use App\Models\Criptomoneda;
use Illuminate\Database\Seeder;
use App\Models\LenguajeProgramacion;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();

        LenguajeProgramacion::factory(1000)->create();
        Criptomoneda::factory(1000)->create();

    }
}
