<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUserPermissionTables extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('user_permission_tables', function (Blueprint $table) {
            $table->foreignId("users_id")->constrained("users");
            $table->foreignId("permission_tables_id")->constrained("permission_tables");
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
        Schema::table('user_permission_tables', function (Blueprint $table) {
            $table->dropForeign(["users_id"]);
            $table->dropForeign(["permission_tables_id"]);
        });
        Schema::dropIfExists('user_permission_tables');
    }
}