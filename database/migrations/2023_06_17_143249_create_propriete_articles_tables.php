<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProprieteArticlesTables extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('propriete_articles_tables', function (Blueprint $table) {
            $table->id();
            $table->string("nom");
            $table->boolean("estObligatoire")->default(1);
            $table->foreignId("type_articles_tables_id")->constrained("type_articles_tables");
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
        Schema::table('propriete_articles_tables', function (Blueprint $table) {
            $table->dropForeign("type_articles_tables_id");
        });
        Schema::dropIfExists('propriete_articles_tables');
    }
}