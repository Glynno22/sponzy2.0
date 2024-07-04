<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ClientController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

/*
Route::get('/', function () {
    return view('welcome');
});

Route::get('/choix', function ()  {
    return view('/client/choix');
});*/

route::get("/choix", [ClientController::class, "choix"]);

route::get("/register", [ClientController::class, "register"]);

route::get("/", [ClientController::class, "end"]);
