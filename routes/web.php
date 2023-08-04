<?php

use App\Http\Controllers\UserController;
use App\Http\Livewire\Utilisateurs;
use App\Models\Article;
use App\Models\TypeArticle;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Auth::routes();

Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

//groupe de routes relative aux admins
Route::group([
    "middleware" => ["auth", "auth.admin"],
    "as" => "admin."
], function () {

    Route::group([
        "prefix" => "habilitations",
        "as" => "habilitations."
    ], function () {

        Route::get("/utilisateurs", Utilisateurs::class)->name("users.index");
        //
    });
});