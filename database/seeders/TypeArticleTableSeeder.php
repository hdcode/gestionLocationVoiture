<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TypeArticleTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table("type_articles_tables")->insert([
            ["nom" => "Voiture"],
            ["nom" => "Immobilier"],
            ["nom" => "Appareil Electronique"],
            ["nom" => "Salle"]
        ]);
    }
}