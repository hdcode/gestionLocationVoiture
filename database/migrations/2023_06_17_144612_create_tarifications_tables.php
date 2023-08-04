<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTarificationsTables extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tarifications_tables', function (Blueprint $table) {
            $table->id();
            $table->double("prix");
            $table->foreignId("duree_locations_tables_id")->constrained("duree_locations_tables");
            $table->foreignId("articles_id")->constrained("articles");
            $table->timestamps();
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
        Schema::table('tarifications_tables', function (Blueprint $table) {
            $table->dropForeign(["duree_locations_tables_id", "articles_id"]);
            /*$table->dropConstrainedForeignId("articles_id");*/
        });
        Schema::dropIfExists('tarifications_tables');
    }
}