<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateArticleLocationTables extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('article_location_tables', function (Blueprint $table) {
            $table->foreignId("articles_id")->constrained("articles");
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
        Schema::table('article_location_tables', function (Blueprint $table) {
            $table->dropForeign(["articles_id", "locations_tables"]);
            /*$table->dropConstrainedForeignId("articles_id");*/
        });
        Schema::dropIfExists('article_location_tables');
    }
}