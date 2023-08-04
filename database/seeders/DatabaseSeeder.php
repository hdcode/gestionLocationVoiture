<?php

namespace Database\Seeders;

use App\Models\Article;
use App\Models\Client;
use App\Models\Role;
use App\Models\TypeArticle;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // User::factory(10)->create();
        $this->call(TypeArticleTableSeeder::class);

        Article::factory(10)->create();
        Client::factory(10)->create();
        User::factory(10)->create();


        $this->call(RoleTableSeeder::class);
        $this->call(DureeLocationTableSeeder::class);
        $this->call(PermissionTableSeeder::class);
        $this->call(StatutLocationTableSeeder::class);

        // $user = User::find(1);
        // $role = Role::find(1);

        // DB::table("user_role_tables")->insert([
        //     "users_id" => $user->id,
        //     "roles_tables_id" => $role->id
        // ]);

        User::find(1)->roles()->attach(1);
        User::find(2)->roles()->attach(2);
        User::find(3)->roles()->attach(3);
        User::find(4)->roles()->attach(4);
    }
}