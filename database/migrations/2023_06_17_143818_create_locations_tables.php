<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLocationsTables extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('locations_tables', function (Blueprint $table) {
            $table->id();
            $table->dateTime("dateDebut");
            $table->dateTime("dateFin");
            $table->foreignId("client_tables_id");
            $table->foreignId("users_id")->constrained("users");
            $table->foreignId("statut_location_tables")->constrained("statut_location_tables");
        });

        Schema::enableForeignKeyConstraints();
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('locations_tables', function (Blueprint $table) {
            $table->dropForeign(["client_tables_id", "users_id", "statut_location_tables"]);
            /*$table->dropConstrainedForeignId("articles_id");*/
        });
        Schema::dropIfExists('locations_tables');
    }
}