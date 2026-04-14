<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class PartidosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('partidos')->insert([
            [
                'fecha' => '2025-01-10',
                'ubicacion' => 'Estadio Nacional',
                'equiporival' => 'Real Madrid',
                'resultado' => '2-1',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'fecha' => '2025-01-17',
                'ubicacion' => 'Camp Nou',
                'equiporival' => 'Barcelona',
                'resultado' => '1-1',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'fecha' => '2025-01-24',
                'ubicacion' => 'Estadio Azteca',
                'equiporival' => 'América',
                'resultado' => '3-0',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'fecha' => '2025-02-01',
                'ubicacion' => 'Estadio Monumental',
                'equiporival' => 'River Plate',
                'resultado' => '0-2',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'fecha' => '2025-02-08',
                'ubicacion' => 'Allianz Arena',
                'equiporival' => 'Bayern Munich',
                'resultado' => '2-2',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'fecha' => '2025-02-15',
                'ubicacion' => 'San Siro',
                'equiporival' => 'AC Milan',
                'resultado' => '1-0',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'fecha' => '2025-02-22',
                'ubicacion' => 'Parque de los Príncipes',
                'equiporival' => 'PSG',
                'resultado' => '0-0',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'fecha' => '2025-03-01',
                'ubicacion' => 'Old Trafford',
                'equiporival' => 'Manchester United',
                'resultado' => '4-2',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'fecha' => '2025-03-08',
                'ubicacion' => 'Anfield',
                'equiporival' => 'Liverpool',
                'resultado' => '1-3',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'fecha' => '2025-03-15',
                'ubicacion' => 'Signal Iduna Park',
                'equiporival' => 'Borussia Dortmund',
                'resultado' => '2-0',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
        ]);
    }
}
