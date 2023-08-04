<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateArticleProprieteTables extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('article_propriete_tables', function (Blueprint $table) {
            $table->foreignId("articles_id")->constrained("articles");
            $table->foreignId("propriete_articles_tables_id")->constrained("propriete_articles_tables");
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
        Schema::table('article_propriete_tables', function (Blueprint $table) {
            $table->dropForeign(["articles_id"]);
            $table->dropForeign(["propriete_articles_tables_id"]);
        });
        Schema::dropIfExists('article_propriete_tables');
    }
}