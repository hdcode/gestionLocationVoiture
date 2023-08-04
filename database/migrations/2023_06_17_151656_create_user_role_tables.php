<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUserRoleTables extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('user_role_tables', function (Blueprint $table) {
            $table->foreignId("users_id")->constrained("users");
            $table->foreignId("roles_tables_id")->constrained("roles_tables");
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
        Schema::table('user_role_tables', function (Blueprint $table) {
            $table->dropForeign(["users_id"]);
            $table->dropForeign(["roles_tables_id"]);
        });
        Schema::dropIfExists('user_role_tables');
    }
}