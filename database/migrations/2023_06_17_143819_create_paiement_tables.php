<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePaiementTables extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('paiement_tables', function (Blueprint $table) {
            $table->id();
            $table->double("montantPaye");
            $table->dateTime("datePaiement");
            $table->foreignId("users_id")->constrained("users");
            $table->foreignId("locations_tables_id")->constrained("locations_tables");
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
        Schema::table('paiement_tables', function (Blueprint $table) {
            $table->dropForeign(["users_id", "locations_tables_id"]);
            /*$table->dropConstrainedForeignId("articles_id");*/
        });
        Schema::dropIfExists('paiement_tables');
    }
}