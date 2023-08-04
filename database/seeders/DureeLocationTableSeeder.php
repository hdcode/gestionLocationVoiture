<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DureeLocationTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table("duree_locations_tables")->insert([
            ["libelle" => "Journée", "valeurEnHeure"=>24],
            ["libelle" => "Demi-Journée", "valeurEnHeure"=>12]
        ]);
    }
}